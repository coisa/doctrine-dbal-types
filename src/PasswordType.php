<?php

namespace CoiSA\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

/**
 * Class PasswordType
 *
 * @package CoiSA\Doctrine\DBAL\Types
 */
class PasswordType extends Type
{
    /** @const string DBAL Type name */
    const NAME = 'password';

    /** @return string */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * @param array $fieldDeclaration
     * @param AbstractPlatform $platform
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $platform->getVarcharTypeDeclarationSQL($fieldDeclaration);
    }

    /**
     * @param string $value
     * @param AbstractPlatform $platform
     *
     * @return string
     * @throws \RuntimeException On password_hash execution failure
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        $value = password_hash($value, PASSWORD_DEFAULT);

        if ($value === false) {
            throw new \RuntimeException('Error trying to convert password hash');
        }

        return $value;
    }

    /**
     * @param AbstractPlatform $platform
     * @return int
     */
    public function getDefaultLength(AbstractPlatform $platform)
    {
        return $platform->getVarcharDefaultLength();
    }
}
