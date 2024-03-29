<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

/**
 * Type that maps a PHP string to a binary database field.
 *
 * @author Andreas Schempp <https://github.com/aschempp>
 */
class BinaryStringType extends Type
{
    /**
     * @var string
     */
    const NAME = 'binary_string';

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        if (!empty($fieldDeclaration['fixed'])) {
            return $platform->getBinaryTypeDeclarationSQL($fieldDeclaration);
        }

        return $platform->getBlobTypeDeclarationSQL($fieldDeclaration);
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}
