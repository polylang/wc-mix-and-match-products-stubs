# WooCommerce Mix and Match Products Stubs

This package provides stub declarations for [WooCommerce Mix and Match Products](https://woocommerce.com/products/woocommerce-mix-and-match-products/).
These stubs can help plugin and theme developers leverage static analysis tools like [PHPStan](https://phpstan.org/).

Stubs are generated directly from the source using [php-stubs/generator](https://github.com/php-stubs/generator).

## Requirements

- PHP >=7.1

## Installation

Require this package as a development dependency with Composer.

```bash
composer require --dev wpsyntex/wc-mix-and-match-products-stubs
```

## Usage in PHPStan

Include the stubs in the PHPStan configuration file.

```yaml
parameters:
  bootstrapFiles:
    - vendor/wpsyntex/wc-mix-and-match-products-stubs/wc-mix-and-match-products-stubs.php
```
