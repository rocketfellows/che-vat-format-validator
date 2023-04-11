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
        ];
    }
}
