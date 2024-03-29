<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Tests\Doctrine\Schema;

use Contao\CoreBundle\Doctrine\Schema\DcaSchemaProvider;
use Contao\CoreBundle\EventListener\DoctrineSchemaListener;
use Contao\CoreBundle\Tests\DoctrineTestCase;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Event\SchemaIndexDefinitionEventArgs;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Platforms\MySqlPlatform;
use Doctrine\DBAL\Platforms\PostgreSqlPlatform;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Event\GenerateSchemaEventArgs;

/**
 * Tests the DoctrineSchemaListener class.
 *
 * @author Andreas Schempp <https://github.com/aschempp>
 */
class DoctrineSchemaListenerTest extends DoctrineTestCase
{
    /**
     * Tests appending to an existing scheme.
     */
    public function testAppendsToAnExistingSchema()
    {
        if (method_exists(AbstractPlatform::class, 'supportsColumnLengthIndexes')) {
            $this->markTestSkipped('This test is only relevant for doctrine/dbal < 2.9');
        }

        $framework = $this->mockContaoFrameworkWithInstaller(
            [
                'tl_files' => [
                    'TABLE_FIELDS' => [
                        'path' => "`path` varchar(1022) NOT NULL default ''",
                    ],
                ],
            ]
        );

        $provider = new DcaSchemaProvider(
            $framework,
            $this->mockDoctrineRegistry()
        );

        $schema = new Schema();
        $event = new GenerateSchemaEventArgs($this->createMock(EntityManagerInterface::class), $schema);

        $this->assertFalse($schema->hasTable('tl_files'));

        $listener = new DoctrineSchemaListener($provider);
        $listener->postGenerateSchema($event);

        $this->assertTrue($schema->hasTable('tl_files'));
        $this->assertTrue($schema->getTable('tl_files')->hasColumn('path'));
    }

    /**
     * Tests that the index is changed if there is a subpart.
     */
    public function testChangesTheIndexIfThereIsASubpart()
    {
        if (method_exists(AbstractPlatform::class, 'supportsColumnLengthIndexes')) {
            $this->markTestSkipped('This test is only relevant for doctrine/dbal < 2.9');
        }

        $connection = $this->createMock(Connection::class);

        $connection
            ->method('getDatabasePlatform')
            ->willReturn(new MySqlPlatform())
        ;

        $connection
            ->expects($this->once())
            ->method('fetchAssoc')
            ->with("SHOW INDEX FROM tl_files WHERE Key_name='path'")
            ->willReturn(
                [
                    'Table' => 'tl_files',
                    'Non_unique' => '1',
                    'Key_name' => 'path',
                    'Seq_in_index' => '1',
                    'Column_name' => 'path',
                    'Collation' => 'A',
                    'Cardinality' => '903',
                    'Sub_part' => '333',
                    'Packed' => null,
                    'Null' => null,
                    'Index_type' => 'BTREE',
                    'Comment' => '',
                    'Index_comment' => '',
                ]
            )
        ;

        /** @var SchemaIndexDefinitionEventArgs|\PHPUnit_Framework_MockObject_MockObject $event */
        $event = $this
            ->getMockBuilder(SchemaIndexDefinitionEventArgs::class)
            ->disableOriginalConstructor()
            ->setMethods(['getConnection', 'getTable', 'getTableIndex', 'preventDefault'])
            ->getMock()
        ;

        $event
            ->method('getConnection')
            ->willReturn($connection)
        ;

        $event
            ->method('getTable')
            ->willReturn('tl_files')
        ;

        $event
            ->method('getTableIndex')
            ->willReturn($this->getIndexEventArg('path'))
        ;

        $event
            ->expects($this->once())
            ->method('preventDefault')
        ;

        $listener = new DoctrineSchemaListener($this->createMock(DcaSchemaProvider::class));
        $listener->onSchemaIndexDefinition($event);

        $index = $event->getIndex();

        $this->assertInstanceOf('Doctrine\DBAL\Schema\Index', $index);
        $this->assertSame('path', $index->getName());
        $this->assertSame(['path(333)'], $index->getColumns());
    }

    /**
     * Tests that the index is not changed if there is no subpart.
     */
    public function testDoesNotChangeTheIndexIfThereIsNoSubpart()
    {
        $connection = $this->createMock(Connection::class);

        $connection
            ->method('getDatabasePlatform')
            ->willReturn(new MySqlPlatform())
        ;

        $connection
            ->method('fetchAssoc')
            ->willReturn(
                [
                    'Table' => 'tl_member',
                    'Non_unique' => '0',
                    'Key_name' => 'username',
                    'Seq_in_index' => '1',
                    'Column_name' => 'username',
                    'Collation' => 'A',
                    'Cardinality' => null,
                    'Sub_part' => null,
                    'Packed' => null,
                    'Null' => 'YES',
                    'Index_type' => 'BTREE',
                    'Comment' => '',
                    'Index_comment' => '',
                ]
            )
        ;

        $event = $this->createMock(SchemaIndexDefinitionEventArgs::class);

        $event
            ->method('getConnection')
            ->willReturn($connection)
        ;

        $event
            ->method('getTable')
            ->willReturn('tl_member')
        ;

        $event
            ->method('getTableIndex')
            ->willReturn($this->getIndexEventArg('username'))
        ;

        $event
            ->expects($this->never())
            ->method('setIndex')
        ;

        $listener = new DoctrineSchemaListener($this->createMock(DcaSchemaProvider::class));
        $listener->onSchemaIndexDefinition($event);
    }

    /**
     * Tests that the index of the primary index column is not changed .
     */
    public function testDoesNotChangeTheIndexOfThePrimaryKeyColumn()
    {
        $connection = $this->createMock(Connection::class);

        $connection
            ->method('getDatabasePlatform')
            ->willReturn(new MySqlPlatform())
        ;

        $connection
            ->expects($this->never())
            ->method('fetchAssoc')
        ;

        $event = $this->createMock(SchemaIndexDefinitionEventArgs::class);

        $event
            ->method('getConnection')
            ->willReturn($connection)
        ;

        $event
            ->method('getTableIndex')
            ->willReturn($this->getIndexEventArg('PRIMARY'))
        ;

        $event
            ->expects($this->never())
            ->method('setIndex')
        ;

        $listener = new DoctrineSchemaListener($this->createMock(DcaSchemaProvider::class));
        $listener->onSchemaIndexDefinition($event);
    }

    /**
     * Tests that the index is not changed on patforms other than MySQL.
     */
    public function testDoesNotChangeTheIndexOnDatabasePlatformsOtherThanMysql()
    {
        $connection = $this->createMock(Connection::class);

        $connection
            ->method('getDatabasePlatform')
            ->willReturn(new PostgreSqlPlatform())
        ;

        $connection
            ->expects($this->never())
            ->method('fetchAssoc')
        ;

        $event = $this->createMock(SchemaIndexDefinitionEventArgs::class);

        $event
            ->method('getConnection')
            ->willReturn($connection)
        ;

        $event
            ->method('getTableIndex')
            ->willReturn($this->getIndexEventArg('pid'))
        ;

        $event
            ->expects($this->never())
            ->method('setIndex')
        ;

        $listener = new DoctrineSchemaListener($this->createMock(DcaSchemaProvider::class));
        $listener->onSchemaIndexDefinition($event);
    }

    /**
     * Returns the index event argument.
     *
     * @param $name
     *
     * @return array
     */
    private function getIndexEventArg($name)
    {
        return [
            'name' => $name,
            'columns' => ['PRIMARY' === $name ? 'id' : $name],
            'unique' => false,
            'primary' => 'PRIMARY' === $name,
            'flags' => [],
            'options' => [],
        ];
    }
}
