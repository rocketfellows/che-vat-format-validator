<?php

namespace rocketfellows\CHEVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class CHEVatFormatValidatorTest extends TestCase
{
    /**
     * @var CHEVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new CHEVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'CHE-000.000.000 MWST',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-000.000.000 TVA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-000.000.000 IVA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-111.111.111 MWST',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-111.111.111 TVA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-111.111.111 IVA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-999.999.999 MWST',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-999.999.999 TVA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-999.999.999 IVA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-123.456.789 MWST',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-123.456.789 TVA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-123.456.789 IVA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-116.283.229 MWST',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-116.301.376 MWST',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'CHE-116.301.376 FOO',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-116.301.37 MWST',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-116.30.376 MWST',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-11.301.376 MWST',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE-111.301.376 MWST',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-123.456.789 mwst',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-123.456.789 tva',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-123.456.789 iva',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'che-123.456.789 MWST',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'che-123.456.789 TVA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'che-123.456.789 IVA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-12.45.78 IVA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-123.456.789  IVA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-123.456.789IVA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE- 123.456.789 IVA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE123.456.789 IVA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE 123.456.789 IVA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE123456789IVA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE-116.283.229',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'CHE116.283.229',
                'isValid' => false,
            ],
            [
                'vatNumber' => '116.283.229',
                'isValid' => false,
            ],
            [
                'vatNumber' => '116283229',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
