<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Fakes\Fake;
use Deligoez\Phony\Tests\BaseTest;

class AddressTest extends BaseTest
{
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
            $this->🙃->address()->city()
        );
    }

    /** @test */
    public function city_with_state(): void
    {
        $this->assertIsString(
            $this->🙃->address()->city(true)
        );
    }

    /** @test */
    public function street_name(): void
    {
        $this->assertIsString(
            $this->🙃->address()->streetName()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function secondary_address(): void
    {
        $this->assertIsString(
            $this->🙃->address()->secondaryAddress()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function street_address(): void
    {
        $this->assertIsString(
            $this->🙃->address()->streetAddress()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function street_address_secondary_address_included(): void
    {
        $this->assertIsString(
            $this->🙃->address()->streetAddress(true)
        );
    }

    /** @test
     * @throws \Exception
     */
    public function building_number(): void
    {
        $this->assertIsString(
            $this->🙃->address()->buildingNumber()
        );
    }

    /** @test */
    public function community(): void
    {
        $this->assertIsString(
            $this->🙃->address()->community()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function mailBox(): void
    {
        $this->assertIsString(
            $this->🙃->address()->mailBox()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function zip_code(): void
    {
        $this->assertIsString(
            $this->🙃->address()->zipCode()
        );

        $this->assertIsString(
            $this->🙃->address()->zip()
        );

        $this->assertIsString(
            $this->🙃->address()->postcode()
        );
    }

    /** @test
     * @throws \Exception
     */
    public function zip_code_for_state_abbreviation(): void
    {
        $this->assertIsString(
            $this->🙃->address()->zipCode('CO')
        );

        $this->assertIsString(
            $this->🙃->address()->zip('CO')
        );

        $this->assertIsString(
            $this->🙃->address()->postcode('CO')
        );
    }

    /** @test */
    public function street_suffix(): void
    {
        $this->assertIsString(
            $this->🙃->address()->streetSuffix()
        );
    }

    /** @test */
    public function city_suffix(): void
    {
        $this->assertIsString(
            $this->🙃->address()->citySuffix()
        );
    }

    /** @test */
    public function city_prefix(): void
    {
        $this->assertIsString(
            $this->🙃->address()->cityPrefix()
        );
    }

    /** @test */
    public function can_access_by_magic_attributes(): void
    {
        $this->assertNotNull($this->🙃->address()->city);
        $this->assertNotNull($this->🙃->address()->streetName);
        $this->assertNotNull($this->🙃->address()->secondaryAddress);
        $this->assertNotNull($this->🙃->address()->streetAddress);
        $this->assertNotNull($this->🙃->address()->buildingNumber);
        $this->assertNotNull($this->🙃->address()->community);
        $this->assertNotNull($this->🙃->address()->mailBox);
        $this->assertNotNull($this->🙃->address()->zipCode);
        $this->assertNotNull($this->🙃->address()->zip);
        $this->assertNotNull($this->🙃->address()->postcode);
        $this->assertNotNull($this->🙃->address()->streetSuffix);
        $this->assertNotNull($this->🙃->address()->citySuffix);
        $this->assertNotNull($this->🙃->address()->cityPrefix);
    }
}
