# Switzerland vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Switzerland vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/che-vat-format-validator
```

## Usage example

Valid Switzerland vat number:

```php
$validator = new CHEVatFormatValidator();
$validator->isValid('CHE-123.456.789 MWST');
$validator->isValid('CHE-123.456.789 TVA');
$validator->isValid('CHE-123.456.789 IVA');
```

Returns:

```shell
true
true
true
```

Invalid Switzerland vat number:

```php
$validator = new CHEVatFormatValidator();
$validator->isValid('CHE-116.301.376 FOO');
$validator->isValid('CHE-116.301.37 MWST');
$validator->isValid('CHE-116.30.376 MWST');
$validator->isValid('CHE-11.301.376 MWST');
$validator->isValid('DE-111.301.376 MWST');
$validator->isValid('CHE-123.456.789 mwst');
$validator->isValid('CHE-123.456.789 tva');
$validator->isValid('CHE-123.456.789 iva');
$validator->isValid('che-123.456.789 MWST');
$validator->isValid('CHE-12.45.78 IVA');
$validator->isValid('CHE-123.456.789  IVA');
$validator->isValid('CHE-123.456.789IVA');
$validator->isValid('CHE- 123.456.789 IVA');
$validator->isValid('CHE123.456.789 IVA');
$validator->isValid('CHE 123.456.789 IVA');
$validator->isValid('CHE123456789IVA');
$validator->isValid('CHE-116.283.229');
$validator->isValid('CHE116.283.229');
$validator->isValid('116.283.229');
$validator->isValid('116283229');
$validator->isValid('1');
$validator->isValid('0');
$validator->isValid('');
```

```shell
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
