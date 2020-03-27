<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Fakes\Fake;
use Deligoez\Phony\Tests\BaseTest;

class AddressTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->address;
    }

    /** @test */
    public function can_call_by_emoji_alias(): void
    {
        // TODO: Move this test to Phony class
        $this->assertInstanceOf(
            Fake::class,
            $this->🙃->📫
        );
    }

    // region Magic Attributes

    /** @test */
    public function cityAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->city
        );
    }

    /** @test */
    public function cityWithStateAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->cityWithState
        );
    }

    /** @test */
    public function streetNameAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->streetName
        );
    }

    /** @test */
    public function secondaryAddressAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->secondaryAddress
        );
    }

    /** @test */
    public function streetAddressAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->streetAddress
        );
    }

    /** @test */
    public function streetAddressWithSecondaryAddressAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->streetAddressWithSecondaryAddress
        );
    }

    /** @test */
    public function buildingNumberAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->buildingNumber
        );
    }

    /** @test */
    public function communityAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->community
        );
    }

    /** @test */
    public function mailBoxAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->mailBox
        );
    }

    /** @test */
    public function zipCodeAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->zipCode
        );
    }

    /** @test */
    public function zipAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->zip
        );
    }

    /** @test */
    public function postcodeAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->postcode
        );
    }

    /** @test */
    public function timeZoneAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->timeZone
        );
    }

    /** @test */
    public function streetSuffixAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->streetSuffix
        );
    }

    /** @test */
    public function citySuffixAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->citySuffix
        );
    }

    /** @test */
    public function cityPrefixAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->cityPrefix
        );
    }

    /** @test */
    public function stateAbbrAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->stateAbbr
        );
    }

    /** @test */
    public function stateAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->state
        );
    }

    /** @test */
    public function countryAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->country
        );
    }

    /** @test */
    public function countryCodeAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->countryCode
        );
    }

    /** @test */
    public function countryCodeLongAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->countryCodeLong
        );
    }

    /** @test */
    public function fullAddressAttribute(): void
    {
        $this->assertIsString(
            $this->🧪->fullAddress
        );
    }

    // endregion

    // region Functions

    /** @test *
     *
     * @throws \Exception
     */
    public function zipCodeMethod(): void
    {
        $this->assertIsString(
            $this->🧪->zipCode()
        );
    }

    /** @test
     *
     * @throws \Exception
     */
    public function zipCodeWithStateAbbreviationMethod(): void
    {
        $this->assertIsString(
            $this->🧪->zipCode('CO')
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function zipMethod(): void
    {
        $this->assertIsString(
            $this->🧪->zip()
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function postcodeMethod(): void
    {
        $this->assertIsString(
            $this->🧪->postcode()
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function countryByCodeMethod(): void
    {
        $this->assertIsString(
            $this->🧪->countryByCode('NL')
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function countryNameToCodeMethod(): void
    {
        $this->assertIsString(
            $this->🧪->countryNameToCode('united_states')
        );
    }

    // endregion
}
