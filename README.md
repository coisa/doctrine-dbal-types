# Doctrine DBAL Types
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fcoisa%2Fdoctrine-dbal-types.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Fcoisa%2Fdoctrine-dbal-types?ref=badge_shield)

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

## License
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fcoisa%2Fdoctrine-dbal-types.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fcoisa%2Fdoctrine-dbal-types?ref=badge_large)