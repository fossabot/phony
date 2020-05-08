<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class AddressTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function city(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->city
        );
    }

    /** @test */
    public function city_with_state(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+, \w+/',
            $this->🙃->address->city_with_state
        );
    }

    /** @test */
    public function street_name(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\s\w+/',
            $this->🙃->address->street_name
        );
    }

    /** @test */
    public function secondary_address(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\.?\s\d+/',
            $this->🙃->address->secondary_address
        );
    }

    /** @test */
    public function street_address(): void
    {
        $this->assertMatchesRegularExpression(
            '/\d+\s\w+\s\w+/',
            $this->🙃->address->street_address
        );
    }

    /** @test */
    public function street_address_with_secondary_address(): void
    {
        $this->assertMatchesRegularExpression(
            '/\d+\s[A-Za-z0-9\']+\s\w+\s\w+\.?\s\d+/',
            $this->🙃->address->street_address_with_secondary_address
        );
    }

    /** @test */
    public function building_number(): void
    {
        $this->assertMatchesRegularExpression(
            '/\d+/',
            $this->🙃->address->building_number
        );
    }

    /** @test */
    public function community(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\s\w+/',
            $this->🙃->address->community
        );
    }

    /** @test */
    public function mail_box(): void
    {
        $this->assertMatchesRegularExpression(
            '/[\w ]+\d+/',
            $this->🙃->address->mail_box
        );
    }

    /** @test */
    public function zip_code(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->zip_code
        );
    }

    /** @test */
    public function zip(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->zip
        );
    }

    /** @test */
    public function postcode(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->postcode
        );
    }

    /** @test */
    public function time_zone(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\/\w+/',
            $this->🙃->address->time_zone
        );
    }

    /** @test */
    public function street_suffix(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->street_suffix
        );
    }

    /** @test */
    public function city_suffix(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->city_suffix
        );
    }

    /** @test */
    public function city_prefix(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->city_prefix
        );
    }

    /** @test */
    public function state_abbreviation(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{2}/',
            $this->🙃->address->state_abbreviation
        );
    }

    /** @test */
    public function state(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->state
        );
    }

    /** @test */
    public function country(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->country
        );
    }

    /** @test */
    public function country_code(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{2}/',
            $this->🙃->address->country_code
        );
    }

    /** @test */
    public function country_code_long(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{3}/',
            $this->🙃->address->country_code_long
        );
    }

    /** @test */
    public function full_address(): void
    {
        $this->assertIsString(
            $this->🙃->address->full_address
        );
    }

    /** @test */
    public function default_country(): void
    {
        $this->assertIsString(
            $this->🙃->address->default_country
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
            $this->🙃->address->zip_code()
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
            $this->🙃->address->zip_code('CO')
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
            $this->🙃->address->zip()
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
            $this->🙃->address->postcode()
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
            $this->🙃->address->country_by_code('NL')
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
            $this->🙃->address->country_by_name('united_states')
        );
    }

    // endregion
}
