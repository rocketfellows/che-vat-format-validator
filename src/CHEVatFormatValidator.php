<?php

namespace rocketfellows\CHEVatFormatValidator;

use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidator;

class CHEVatFormatValidator extends CountryVatFormatValidator
{
    private const VAT_NUMBER_PATTERN = '/^(CHE-)?[\d]{3}.[\d]{3}.[\d]{3}\s(MWST|TVA|IVA)$/';

    protected function isValidFormat(string $vatNumber): bool
    {
        return (bool) preg_match(self::VAT_NUMBER_PATTERN, $vatNumber);
    }
}
