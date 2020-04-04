<?php

namespace Deligoez\Phony\Test\Standard;

use Deligoez\Phony\Test\BaseTest;

class AddressTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->address;
    }

    // region Attributes

    /** @test */
    public function city(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->city
        );
    }

    /** @test */
    public function city_with_state(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+, \w+/',
            $this->🧪->city_with_state
        );
    }

    /** @test */
    public function street_name(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\s\w+/',
            $this->🧪->street_name
        );
    }

    /** @test */
    public function secondary_address(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\.?\s\d+/',
            $this->🧪->secondary_address
        );
    }

    /** @test */
    public function street_address(): void
    {
        $this->assertMatchesRegularExpression(
            '/\d+\s\w+\s\w+/',
            $this->🧪->street_address
        );
    }

    /** @test */
    public function street_address_with_secondary_address(): void
    {
        $this->assertMatchesRegularExpression(
            '/\d+\s\w+\s\w+\s\w+\.?\s\d+/',
            $this->🧪->street_address_with_secondary_address
        );
    }

    /** @test */
    public function building_number(): void
    {
        $this->assertMatchesRegularExpression(
            '/\d+/',
            $this->🧪->building_number
        );
    }

    /** @test */
    public function community(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\s\w+/',
            $this->🧪->community
        );
    }

    /** @test */
    public function mail_box(): void
    {
        $this->assertMatchesRegularExpression(
            '/[\w ]+\d+/',
            $this->🧪->mail_box
        );
    }

    /** @test */
    public function zip_code(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🧪->zip_code
        );
    }

    /** @test */
    public function zip(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🧪->zip
        );
    }

    /** @test */
    public function postcode(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🧪->postcode
        );
    }

    /** @test */
    public function time_zone(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\/\w+/',
            $this->🧪->time_zone
        );
    }

    /** @test */
    public function street_suffix(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->street_suffix
        );
    }

    /** @test */
    public function city_suffix(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->city_suffix
        );
    }

    /** @test */
    public function city_prefix(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->city_prefix
        );
    }

    /** @test */
    public function state_abbreviation(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{2}/',
            $this->🧪->state_abbreviation
        );
    }

    /** @test */
    public function state(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->state
        );
    }

    /** @test */
    public function country(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🧪->country
        );
    }

    /** @test */
    public function country_code(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{2}/',
            $this->🧪->country_code
        );
    }

    /** @test */
    public function country_code_long(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{3}/',
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

    /** @test */
    public function default_country(): void
    {
        $this->assertIsString(
            $this->🧪->default_country
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
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🧪->zip_code()
        );
    }

    /** @test
     *
     * @throws \Exception
     */
    public function zip_code_with_state_abbreviation(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🧪->zip_code('CO')
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function zip_method(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🧪->zip()
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function postcode_method(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🧪->postcode()
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function country_by_code(): void
    {
        $this->assertEquals(
            'Netherlands',
            $this->🧪->country_by_code('NL')
        );
    }

    /** @test *
     *
     * @throws \Exception
     */
    public function country_by_name(): void
    {
        $this->assertEquals(
            'US',
            $this->🧪->country_by_name('united_states')
        );
    }

    // endregion
}
