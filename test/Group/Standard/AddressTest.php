<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class AddressTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function city_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->city
        );
    }

    /** @test */
    public function city_with_state_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+, \w+/',
            $this->🙃->address->city_with_state
        );
    }

    /** @test */
    public function street_name_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\s\w+/',
            $this->🙃->address->street_name
        );
    }

    /** @test */
    public function secondary_address_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\.?\s\d+/',
            $this->🙃->address->secondary_address
        );
    }

    /** @test */
    public function street_address_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\d+\s\w+\s\w+/',
            $this->🙃->address->street_address
        );
    }

    /** @test */
    public function street_address_with_secondary_address_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\d+\s[A-Za-z0-9\']+\s\w+\s\w+\.?\s\d+/',
            $this->🙃->address->street_address_with_secondary_address
        );
    }

    /** @test */
    public function building_number_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\d+/',
            $this->🙃->address->building_number
        );
    }

    /** @test */
    public function community_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\s\w+/',
            $this->🙃->address->community
        );
    }

    /** @test */
    public function mail_box_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/[\w ]+\d+/',
            $this->🙃->address->mail_box
        );
    }

    /** @test */
    public function time_zone_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+\/\w+/',
            $this->🙃->address->time_zone
        );
    }

    /** @test */
    public function street_suffix_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->street_suffix
        );
    }

    /** @test */
    public function city_suffix_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->city_suffix
        );
    }

    /** @test */
    public function city_prefix_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->city_prefix
        );
    }

    /** @test */
    public function state_abbreviation_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{2}/',
            $this->🙃->address->state_abbreviation
        );
    }

    /** @test */
    public function state_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->state
        );
    }

    /** @test */
    public function country_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/\w+/',
            $this->🙃->address->country
        );
    }

    /** @test */
    public function country_code_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{2}/',
            $this->🙃->address->country_code
        );
    }

    /** @test */
    public function country_code_long_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/[A-Z]{3}/',
            $this->🙃->address->country_code_long
        );
    }

    /** @test */
    public function full_address_attribute(): void
    {
        $this->assertIsString(
            $this->🙃->address->full_address
        );
    }

    /** @test */
    public function default_country_attribute(): void
    {
        $this->assertIsString(
            $this->🙃->address->default_country
        );
    }

    // endregion

    // region Methods

    /** @test */
    public function zip_code_method(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->zip_code()
        );
    }

    /** @test */
    public function zip_code_method_with_state_abbreviation(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->zip_code('CO')
        );
    }

    /** @test */
    public function country_by_code_method(): void
    {
        $this->assertEquals(
            'Netherlands',
            $this->🙃->address->country_by_code('NL')
        );
    }

    /** @test */
    public function country_by_name_method(): void
    {
        $this->assertEquals(
            'US',
            $this->🙃->address->country_by_name('united_states')
        );
    }

    /** @test */
    public function latitude_method_returns_a_float_within_the_range(): void
    {
        $value = $this->🙃->address->latitude();

        $this->assertIsFloat($value);
        $this->assertGreaterThanOrEqual(-90, $value);
        $this->assertLessThanOrEqual(90, $value);
    }

    /** @test */
    public function longitude_method_returns_a_float_within_the_range(): void
    {
        $value = $this->🙃->address->longitude();

        $this->assertIsFloat($value);
        $this->assertGreaterThanOrEqual(-180, $value);
        $this->assertLessThanOrEqual(180, $value);
    }

    /** @test */
    public function coordinate_method_returns_an_array_with_latitude_and_longitude(): void
    {
        $value = $this->🙃->address->coordinate();

        $this->assertIsArray($value);
        $this->assertCount(2, $value);

        // latitude()
        $this->assertIsFloat($value[0]);
        $this->assertGreaterThanOrEqual(-90, $value[0]);
        $this->assertLessThanOrEqual(90, $value[0]);

        // longitude()
        $this->assertIsFloat($value[1]);
        $this->assertGreaterThanOrEqual(-180, $value[1]);
        $this->assertLessThanOrEqual(180, $value[1]);
    }

    // endregion

    // region Methods as Attributes

    /** @test */
    public function zip_code_method_as_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->zip_code
        );
    }

    // endregion

    // region Method Aliases

    /** @test */
    public function zip_method_alias(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->zip()
        );
    }

    /** @test */
    public function postcode_method_alias(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->postcode()
        );
    }

    // endregion

    // region Method Aliases as Attributes

    /** @test */
    public function zip_method_alias_as_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->zip
        );
    }

    /** @test */
    public function postcode_method_alias_as_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            '/^\d+-?\d*$/',
            $this->🙃->address->postcode
        );
    }

    // endregion
}
