<?php

namespace CoiSA\Doctrine\DBAL\Types;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Class EnumType
 *
 * @package CoiSA\Doctrine\DBAL\Types
 */
class EnumType extends Type
{
    /** @const string */
    const ENUM = 'enum';

    /** @return string */
    public function getName()
    {
        return self::ENUM;
    }

    /**
     * @param array $fieldDeclaration
     * @param AbstractPlatform $platform
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $values = array_map(
            function ($value) {
                return "'{$value}'";
            },
            $fieldDeclaration['values']
        );

        return 'ENUM(' . implode(',', $values) . ')';
    }
}
