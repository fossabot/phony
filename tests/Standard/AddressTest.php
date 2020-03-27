<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

class AddressTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->address;
    }

    // region Magic Attributes

    /** @test */
    public function city(): void
    {
        $this->assertIsString(
            $this->🧪->city
        );
    }

    /** @test */
    public function city_with_state(): void
    {
        $this->assertIsString(
            $this->🧪->city_with_state
        );
    }

    /** @test */
    public function street_name(): void
    {
        $this->assertIsString(
            $this->🧪->street_name
        );
    }

    /** @test */
    public function secondary_address(): void
    {
        $this->assertIsString(
            $this->🧪->secondary_address
        );
    }

    /** @test */
    public function street_address(): void
    {
        $this->assertIsString(
            $this->🧪->street_address
        );
    }

    /** @test */
    public function street_address_with_secondary_address(): void
    {
        $this->assertIsString(
            $this->🧪->street_address_with_secondary_address
        );
    }

    /** @test */
    public function building_number(): void
    {
        $this->assertIsString(
            $this->🧪->building_number
        );
    }

    /** @test */
    public function community(): void
    {
        $this->assertIsString(
            $this->🧪->community
        );
    }

    /** @test */
    public function mail_box(): void
    {
        $this->assertIsString(
            $this->🧪->mail_box
        );
    }

    /** @test */
    public function zip_code(): void
    {
        $this->assertIsString(
            $this->🧪->zip_code
        );
    }

    /** @test */
    public function zip(): void
    {
        $this->assertIsString(
            $this->🧪->zip
        );
    }

    /** @test */
    public function postcode(): void
    {
        $this->assertIsString(
            $this->🧪->postcode
        );
    }

    /** @test */
    public function time_zone(): void
    {
        $this->assertIsString(
            $this->🧪->time_zone
        );
    }

    /** @test */
    public function street_suffix(): void
    {
        $this->assertIsString(
            $this->🧪->street_suffix
        );
    }

    /** @test */
    public function city_suffix(): void
    {
        $this->assertIsString(
            $this->🧪->city_suffix
        );
    }

    /** @test */
    public function city_prefix(): void
    {
        $this->assertIsString(
            $this->🧪->city_prefix
        );
    }

    /** @test */
    public function state_abbreviation(): void
    {
        $this->assertIsString(
            $this->🧪->state_abbreviation
        );
    }

    /** @test */
    public function state(): void
    {
        $this->assertIsString(
            $this->🧪->state
        );
    }

    /** @test */
    public function country(): void
    {
        $this->assertIsString(
            $this->🧪->country
        );
    }

    /** @test */
    public function country_code(): void
    {
        $this->assertIsString(
            $this->🧪->country_code
        );
    }

    /** @test */
    public function country_code_long(): void
    {
        $this->assertIsString(
            $this->🧪->country_code_long
        );
    }

    /** @test */
    public function full_address(): void
    {
        $this->assertIsString(
            $this->🧪->full_address
        );
    }

    // endregion

    // region Functions

    /** @test *
     *
     * @throws \Exception
     */
    public function zip_code_method(): void
    {
        $this->assertIsString(
            $this->🧪->zip_code()
        );
    }

    /** @test
     *
     * @throws \Exception
     */
    public function zip_code_with_state_abbreviation(): void
    {
        $this->assertIsString(
            $this->🧪->zip_code('CO')
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function zip_method(): void
    {
        $this->assertIsString(
            $this->🧪->zip()
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function postcode_method(): void
    {
        $this->assertIsString(
            $this->🧪->postcode()
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function country_by_code(): void
    {
        $this->assertIsString(
            $this->🧪->country_by_code('NL')
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function country_name_to_code(): void
    {
        $this->assertIsString(
            $this->🧪->country_name_to_code('united_states')
        );
    }

    // endregion
}
