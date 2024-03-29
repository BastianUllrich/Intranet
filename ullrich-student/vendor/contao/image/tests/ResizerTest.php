<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\Image\Tests;

use Contao\Image\Image;
use Contao\Image\ImageDimensions;
use Contao\Image\ResizeCalculatorInterface;
use Contao\Image\ResizeConfigurationInterface;
use Contao\Image\ResizeCoordinates;
use Contao\Image\ResizeOptions;
use Contao\Image\Resizer;
use Contao\ImagineSvg\Imagine as SvgImagine;
use Contao\ImagineSvg\UndefinedBox;
use Imagine\Gd\Imagine as GdImagine;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface as ImagineImageInterface;
use Imagine\Image\Point;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;

class ResizerTest extends TestCase
{
    /**
     * @var string
     */
    private $rootDir;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->rootDir = __DIR__.'/tmp';
    }

    /**
     * {@inheritdoc}
     */
    public function tearDown()
    {
        parent::tearDown();

        if (file_exists($this->rootDir)) {
            (new Filesystem())->remove($this->rootDir);
        }
    }

    public function testInstantiation()
    {
        $resizer = $this->createResizer();

        $this->assertInstanceOf('Contao\Image\Resizer', $resizer);
        $this->assertInstanceOf('Contao\Image\ResizerInterface', $resizer);
    }

    public function testResize()
    {
        $calculator = $this->createMock(ResizeCalculatorInterface::class);
        $calculator
            ->method('calculate')
            ->willReturn(new ResizeCoordinates(new Box(100, 100), new Point(0, 0), new Box(100, 100)))
        ;

        $resizer = $this->createResizer(null, $calculator);

        if (!is_dir($this->rootDir)) {
            mkdir($this->rootDir, 0777, true);
        }

        (new GdImagine())
            ->create(new Box(100, 100))
            ->save($this->rootDir.'/dummy.jpg')
        ;

        $image = $this->createMock(Image::class);
        $image
            ->method('getDimensions')
            ->willReturn(new ImageDimensions(new Box(200, 200)))
        ;

        $image
            ->method('getPath')
            ->willReturn($this->rootDir.'/dummy.jpg')
        ;

        $image
            ->method('getImagine')
            ->willReturn(new GdImagine())
        ;

        $configuration = $this->createMock(ResizeConfigurationInterface::class);

        $defaultUmask = umask();

        try {
            foreach ([0000, 0002, 0007, 0022, 0027, 0077] as $umask) {
                umask($umask);

                $resizedImage = $resizer->resize(
                    $image,
                    $configuration,
                    (new ResizeOptions())
                        ->setImagineOptions([
                            'jpeg_quality' => 95,
                            'interlace' => ImagineImageInterface::INTERLACE_PLANE,
                        ])
                );

                $this->assertEquals(new ImageDimensions(new Box(100, 100)), $resizedImage->getDimensions());
                $this->assertRegExp('(/[0-9a-f]/dummy-[0-9a-f]{8}.jpg$)', $resizedImage->getPath());
                $this->assertFilePermissions(0666, $resizedImage->getPath());

                unlink($resizedImage->getPath());
            }
        } finally {
            umask($defaultUmask);
        }

        $resizedImage = $resizer->resize(
            $image,
            $configuration,
            (new ResizeOptions())->setTargetPath($this->rootDir.'/target-path.jpg')
        );

        $this->assertEquals(new ImageDimensions(new Box(100, 100)), $resizedImage->getDimensions());
        $this->assertSame($this->rootDir.'/target-path.jpg', $resizedImage->getPath());
        $this->assertFilePermissions(0666, $resizedImage->getPath());

        // Replace target image with larger image
        (new GdImagine())
            ->create(new Box(200, 200))
            ->save($this->rootDir.'/target-path.jpg')
        ;

        // Resize with override
        $resizedImage = $resizer->resize(
            $image,
            $configuration,
            (new ResizeOptions())->setTargetPath($this->rootDir.'/target-path.jpg')
        );

        $this->assertSame($this->rootDir.'/target-path.jpg', $resizedImage->getPath());
        $this->assertEquals(new ImageDimensions(new Box(100, 100)), $resizedImage->getDimensions());
        $this->assertFilePermissions(0666, $resizedImage->getPath());
    }

    public function testResizeSvg()
    {
        $xml = '<?xml version="1.0"?>'
            .'<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100" height="100"></svg>';

        if (!is_dir($this->rootDir)) {
            mkdir($this->rootDir, 0777, true);
        }

        file_put_contents($this->rootDir.'/dummy.svg', $xml);

        $calculator = $this->createMock(ResizeCalculatorInterface::class);
        $calculator
            ->method('calculate')
            ->willReturn(new ResizeCoordinates(new Box(100, 100), new Point(0, 0), new Box(100, 100)))
        ;

        $resizer = $this->createResizer(null, $calculator);

        $image = $this->createMock(Image::class);
        $image
            ->method('getDimensions')
            ->willReturn(new ImageDimensions(new Box(200, 200)))
        ;

        $image
            ->method('getPath')
            ->willReturn($this->rootDir.'/dummy.svg')
        ;

        $image
            ->method('getImagine')
            ->willReturn(new SvgImagine())
        ;

        $configuration = $this->createMock(ResizeConfigurationInterface::class);

        $resizedImage = $resizer->resize(
            $image,
            $configuration,
            (new ResizeOptions())
                ->setImagineOptions([
                    'jpeg_quality' => 95,
                    'interlace' => ImagineImageInterface::INTERLACE_PLANE,
                ])
        );

        $this->assertEquals(new ImageDimensions(new Box(100, 100)), $resizedImage->getDimensions());
        $this->assertRegExp('(/[0-9a-f]/dummy-[0-9a-f]{8}.svg$)', $resizedImage->getPath());
        $this->assertFilePermissions(0666, $resizedImage->getPath());

        unlink($resizedImage->getPath());

        $resizedImage = $resizer->resize(
            $image,
            $configuration,
            (new ResizeOptions())->setTargetPath($this->rootDir.'/target-path.svg')
        );

        $this->assertEquals(new ImageDimensions(new Box(100, 100)), $resizedImage->getDimensions());
        $this->assertSame($this->rootDir.'/target-path.svg', $resizedImage->getPath());
        $this->assertFilePermissions(0666, $resizedImage->getPath());

        unlink($resizedImage->getPath());
    }

    public function testResizeCache()
    {
        $calculator = $this->createMock(ResizeCalculatorInterface::class);
        $calculator
            ->method('calculate')
            ->willReturn(new ResizeCoordinates(new Box(100, 100), new Point(0, 0), new Box(100, 100)))
        ;

        $resizer = $this->createResizer(null, $calculator);

        if (!is_dir($this->rootDir)) {
            mkdir($this->rootDir, 0777, true);
        }

        (new GdImagine())
            ->create(new Box(100, 100))
            ->save($this->rootDir.'/dummy.jpg')
        ;

        $image = $this->createMock(Image::class);
        $image
            ->method('getDimensions')
            ->willReturn(new ImageDimensions(new Box(200, 200)))
        ;

        $image
            ->method('getPath')
            ->willReturn($this->rootDir.'/dummy.jpg')
        ;

        $image
            ->method('getImagine')
            ->willReturn(new GdImagine())
        ;

        $configuration = $this->createMock(ResizeConfigurationInterface::class);
        $resizedImage = $resizer->resize($image, $configuration, new ResizeOptions());

        $this->assertEquals(new ImageDimensions(new Box(100, 100)), $resizedImage->getDimensions());
        $this->assertRegExp('(/[0-9a-f]/dummy-[0-9a-f]{8}.jpg$)', $resizedImage->getPath());
        $this->assertFilePermissions(0666, $resizedImage->getPath());

        $imagePath = $resizedImage->getPath();

        // Different cache file for testing
        (new GdImagine())
            ->create(new Box(200, 100))
            ->save($imagePath)
        ;

        // With cache
        $resizedImage = $resizer->resize($image, $configuration, new ResizeOptions());

        $this->assertSame($imagePath, $resizedImage->getPath());
        $this->assertSame(200, getimagesize($imagePath)[0], 'Cache file should no be overwritten');

        // With cache and target path
        $targetPath = $this->rootDir.'/target-image.jpg';
        $resizedImage = $resizer->resize($image, $configuration, (new ResizeOptions())->setTargetPath($targetPath));

        $this->assertSame($targetPath, $resizedImage->getPath());
        $this->assertFileEquals($imagePath, $targetPath, 'Cache file should have been copied');

        // With different imagine options
        $resizedImage = $resizer->resize($image, $configuration, (new ResizeOptions())->setImagineOptions(['jpeg_quality' => 10]));

        $this->assertNotSame($imagePath, $resizedImage->getPath());
        $this->assertSame(100, getimagesize($resizedImage->getPath())[0], 'New cache file should have been created');

        // With different paths, but same relative path
        $subDir = $this->rootDir.'/sub/dir';

        mkdir($subDir, 0777, true);
        copy($this->rootDir.'/dummy.jpg', $subDir.'/dummy.jpg');
        touch($subDir.'/dummy.jpg', filemtime($this->rootDir.'/dummy.jpg'));

        $subResizer = $this->createResizer($subDir, $calculator);

        $subImage = $this->createMock(Image::class);
        $subImage
            ->method('getDimensions')
            ->willReturn(new ImageDimensions(new Box(200, 200)))
        ;

        $subImage
            ->method('getPath')
            ->willReturn($subDir.'/dummy.jpg')
        ;

        $subImage
            ->method('getImagine')
            ->willReturn(new GdImagine())
        ;

        $resizedImage = $subResizer->resize($subImage, $configuration, (new ResizeOptions())->setBypassCache(true));

        $this->assertSame(
            substr($imagePath, \strlen($this->rootDir)),
            substr($resizedImage->getPath(), \strlen($subDir)),
            'The hash should be the same if the image path relative to the cacheDir is the same'
        );

        // Without cache
        $resizedImage = $resizer->resize($image, $configuration, (new ResizeOptions())->setBypassCache(true));

        $this->assertSame($imagePath, $resizedImage->getPath());
        $this->assertSame(100, getimagesize($imagePath)[0]);
    }

    public function testResizeUndefinedSize()
    {
        $imagePath = $this->rootDir.'/dummy.jpg';
        $resizer = $this->createResizer();

        if (!is_dir($this->rootDir)) {
            mkdir($this->rootDir, 0777, true);
        }

        file_put_contents($imagePath, '');

        $image = $this->createMock(Image::class);
        $image
            ->method('getDimensions')
            ->willReturn(new ImageDimensions(new UndefinedBox()))
        ;

        $image
            ->method('getPath')
            ->willReturn($imagePath)
        ;

        $image
            ->method('getImagine')
            ->willReturn(new GdImagine())
        ;

        $configuration = $this->createMock(ResizeConfigurationInterface::class);
        $resizedImage = $resizer->resize($image, $configuration, new ResizeOptions());

        $this->assertSame($imagePath, $resizedImage->getPath());
    }

    public function testResizeEmptyConfig()
    {
        $imagePath = $this->rootDir.'/dummy.jpg';
        $resizer = $this->createResizer();

        if (!is_dir($this->rootDir)) {
            mkdir($this->rootDir, 0777, true);
        }

        file_put_contents($imagePath, '');

        $image = $this->createMock(Image::class);
        $image
            ->method('getDimensions')
            ->willReturn(new ImageDimensions(new Box(100, 100)))
        ;

        $image
            ->method('getPath')
            ->willReturn($imagePath)
        ;

        $image
            ->method('getImagine')
            ->willReturn(new GdImagine())
        ;

        $configuration = $this->createMock(ResizeConfigurationInterface::class);
        $configuration
            ->method('isEmpty')
            ->willReturn(true)
        ;

        $resizedImage = $resizer->resize($image, $configuration, new ResizeOptions());

        $this->assertSame($image->getPath(), $resizedImage->getPath());
        $this->assertNotSame($image, $resizedImage);
    }

    public function testResizeSameDimensions()
    {
        $path = $this->rootDir.'/dummy.jpg';

        $calculator = $this->createMock(ResizeCalculatorInterface::class);
        $calculator
            ->method('calculate')
            ->willReturn(new ResizeCoordinates(new Box(100, 100), new Point(0, 0), new Box(100, 100)))
        ;

        $resizer = $this->createResizer(null, $calculator);

        if (!is_dir($this->rootDir)) {
            mkdir($this->rootDir, 0777, true);
        }

        (new GdImagine())
            ->create(new Box(100, 100))
            ->save($path)
        ;

        $image = $this->createMock(Image::class);
        $image
            ->method('getDimensions')
            ->willReturn(new ImageDimensions(new Box(100, 100)))
        ;

        $image
            ->method('getPath')
            ->willReturn($path)
        ;

        $image
            ->method('getImagine')
            ->willReturn(new GdImagine())
        ;

        $configuration = $this->createMock(ResizeConfigurationInterface::class);
        $resizedImage = $resizer->resize($image, $configuration, new ResizeOptions());

        $this->assertEquals(new ImageDimensions(new Box(100, 100)), $resizedImage->getDimensions());
        $this->assertSame($path, $resizedImage->getPath());

        $resizedImage = $resizer->resize(
            $image,
            $configuration,
            (new ResizeOptions())->setTargetPath($this->rootDir.'/target-path.jpg')
        );

        $this->assertEquals(new ImageDimensions(new Box(100, 100)), $resizedImage->getDimensions());
        $this->assertSame($this->rootDir.'/target-path.jpg', $resizedImage->getPath());
    }

    public function testResizeSameDimensionsRelative()
    {
        $xml = '<?xml version="1.0"?>'.
            '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100"></svg>';

        if (!is_dir($this->rootDir)) {
            mkdir($this->rootDir, 0777, true);
        }

        file_put_contents($this->rootDir.'/dummy.svg', $xml);

        $calculator = $this->createMock(ResizeCalculatorInterface::class);
        $calculator
            ->method('calculate')
            ->willReturn(new ResizeCoordinates(new Box(100, 100), new Point(0, 0), new Box(100, 100)))
        ;

        $resizer = $this->createResizer(null, $calculator);

        $image = $this->createMock(Image::class);
        $image
            ->method('getDimensions')
            ->willReturn(new ImageDimensions(new Box(100, 100), true))
        ;

        $image
            ->method('getPath')
            ->willReturn($this->rootDir.'/dummy.svg')
        ;

        $image
            ->method('getImagine')
            ->willReturn(new SvgImagine())
        ;

        $configuration = $this->createMock(ResizeConfigurationInterface::class);
        $resizedImage = $resizer->resize($image, $configuration, new ResizeOptions());

        $this->assertSame(100, $resizedImage->getDimensions()->getSize()->getWidth());
        $this->assertSame(100, $resizedImage->getDimensions()->getSize()->getHeight());
        $this->assertFalse($resizedImage->getDimensions()->isRelative());
        $this->assertRegExp('(/[0-9a-f]/dummy-[0-9a-f]{8}.svg$)', $resizedImage->getPath());

        unlink($resizedImage->getPath());
    }

    /**
     * Returns a resizer.
     *
     * @param string                    $cacheDir
     * @param ResizeCalculatorInterface $calculator
     * @param Filesystem                $filesystem
     *
     * @return Resizer
     */
    private function createResizer($cacheDir = null, $calculator = null, $filesystem = null)
    {
        if (null === $cacheDir) {
            $cacheDir = $this->rootDir;
        }

        return new Resizer($cacheDir, $calculator, $filesystem);
    }

    /**
     * @param int    $expectedPermissions
     * @param string $path
     */
    private function assertFilePermissions($expectedPermissions, $path)
    {
        $this->assertSame(
            sprintf('%o', $expectedPermissions & ~umask() & 0777),
            sprintf('%o', fileperms($path) & 0777)
        );
    }
}
