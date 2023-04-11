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
        ];
    }
}
