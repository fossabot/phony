<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Fakes\Fake;
use Deligoez\Phony\Tests\BaseTest;

class AddressTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->address();
    }

    /** @test */
    public function can_call_by_emoji_alias(): void
    {
        $this->assertInstanceOf(
            Fake::class,
            $this->🙃->📫()
        );
    }

    /** @test */
    public function city(): void
    {
        $this->assertIsString(
            $this->🧪->city()
        );
    }

    /** @test */
    public function city_with_state(): void
    {
        $this->assertIsString(
            $this->🧪->city(true)
        );
    }

    /** @test */
    public function street_name(): void
    {
        $this->assertIsString(
            $this->🧪->streetName()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function secondary_address(): void
    {
        $this->assertIsString(
            $this->🧪->secondaryAddress()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function street_address(): void
    {
        $this->assertIsString(
            $this->🧪->streetAddress()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function street_address_secondary_address_included(): void
    {
        $this->assertIsString(
            $this->🧪->streetAddress(true)
        );
    }

    /** @test
     * @throws \Exception
     */
    public function building_number(): void
    {
        $this->assertIsString(
            $this->🧪->buildingNumber()
        );
    }

    /** @test */
    public function community(): void
    {
        $this->assertIsString(
            $this->🧪->community()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function mailBox(): void
    {
        $this->assertIsString(
            $this->🧪->mailBox()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function zip_code(): void
    {
        $this->assertIsString(
            $this->🧪->zipCode()
        );

        $this->assertIsString(
            $this->🧪->zip()
        );

        $this->assertIsString(
            $this->🧪->postcode()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function zip_code_for_state_abbreviation(): void
    {
        $this->assertIsString(
            $this->🧪->zipCode('CO')
        );

        $this->assertIsString(
            $this->🧪->zip('CO')
        );

        $this->assertIsString(
            $this->🧪->postcode('CO')
        );
    }

    /** @test */
    public function street_suffix(): void
    {
        $this->assertIsString(
            $this->🧪->streetSuffix()
        );
    }

    /** @test */
    public function city_suffix(): void
    {
        $this->assertIsString(
            $this->🧪->citySuffix()
        );
    }

    /** @test */
    public function city_prefix(): void
    {
        $this->assertIsString(
            $this->🧪->cityPrefix()
        );
    }

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🧪->city);
        $this->assertNotNull($this->🧪->streetName);
        $this->assertNotNull($this->🧪->secondaryAddress);
        $this->assertNotNull($this->🧪->streetAddress);
        $this->assertNotNull($this->🧪->buildingNumber);
        $this->assertNotNull($this->🧪->community);
        $this->assertNotNull($this->🧪->mailBox);
        $this->assertNotNull($this->🧪->zipCode);
        $this->assertNotNull($this->🧪->zip);
        $this->assertNotNull($this->🧪->postcode);
        $this->assertNotNull($this->🧪->streetSuffix);
        $this->assertNotNull($this->🧪->citySuffix);
        $this->assertNotNull($this->🧪->cityPrefix);
    }
}
