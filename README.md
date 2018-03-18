# Doctrine DBAL Types
Provides extra Doctrine DBAL types

## Installation
```
composer require coisa/doctrine-dbal-types
```

## Using
```
# Add type to DBAL collection before doing any interaction with your entity manager
\Doctrine\DBAL\Types\Type::addType(
    \Coisa\Doctrine\DBAL\Type\PasswordType::NAME,
    \Coisa\Doctrine\DBAL\Type\PasswordType::class
);
```