<?php

// region Attributes

test('city attribute', function () {
    $value = 🙃()->address->city;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('city_with_state attribute', function () {
    $value = 🙃()->address->city_with_state;

    $this->assertMatchesRegularExpression('/\w+, \w+/', $value);
});

test('street_name attribute', function () {
    $value = 🙃()->address->street_name;

    $this->assertMatchesRegularExpression('/\w+\s\w+/', $value);
});

test('secondary_address attribute', function () {
    $value = 🙃()->address->secondary_address;

    $this->assertMatchesRegularExpression('/\w+\.?\s\d+/', $value);
});

test('street_address attribute', function () {
    $value = 🙃()->address->street_address;

    $this->assertMatchesRegularExpression("/^\d+\s[A-Za-z']+\s[A-Za-z']+/", $value);
});

test('street_address_with_secondary_address attribute', function () {
    $value = 🙃()->address->street_address_with_secondary_address;

    $this->assertMatchesRegularExpression(
        "/\d+\s[A-Za-z0-9\']+\s\w+\s\w+\.?\s\d+/",
        $value
    );
});

test('building_number attribute', function () {
    $value = 🙃()->address->building_number;

    $this->assertMatchesRegularExpression('/\d+/', $value);
});

test('community attribute', function () {
    $value = 🙃()->address->community;

    $this->assertMatchesRegularExpression('/\w+\s\w+/', $value);
});

test('mail_box attribute', function () {
    $value = 🙃()->address->mail_box;

    $this->assertMatchesRegularExpression('/[\w ]+\d+/', $value);
});

test('time_zone attribute', function () {
    $value = 🙃()->address->time_zone;

    $this->assertMatchesRegularExpression('/\w+\/\w+/', $value);
});

test('street_suffix attribute', function () {
    $value = 🙃()->address->street_suffix;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('city_suffix attribute', function () {
    $value = 🙃()->address->city_suffix;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('city_prefix attribute', function () {
    $value = 🙃()->address->city_prefix;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('state_abbreviation attribute', function () {
    $value = 🙃()->address->state_abbreviation;

    $this->assertMatchesRegularExpression('/[A-Z]{2}/', $value);
});

test('state attribute', function () {
    $value = 🙃()->address->state;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('country attribute', function () {
    $value = 🙃()->address->country;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('country_code attribute', function () {
    $value = 🙃()->address->country_code;

    $this->assertMatchesRegularExpression('/[A-Z]{2}/', $value);
});

test('country_code_long attribute', function () {
    $value = 🙃()->address->country_code_long;

    $this->assertMatchesRegularExpression('/[A-Z]{3}/', $value);
});

test('full_address attribute', function () {
    $value = 🙃()->address->full_address;

    $this->assertIsString($value);
});

test('default_country attribute', function () {
    $value = 🙃()->address->default_country;

    $this->assertIsString($value);
});

// endregion

// region Methods

test('zip_code() method', function () {
    $value = 🙃()->address->zip_code();

    $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
});

test('zip_code() method with $stateAbbreviation parameter', function () {
    $value = 🙃()->address->zip_code('CO');

    $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
});

test('country_by_code() method', function () {
    $value = 🙃()->address->country_by_code('NL');

    $this->assertEquals('Netherlands', $value);
});

test('country_by_name() method', function () {
    $value = 🙃()->address->country_by_name('united_states');

    $this->assertEquals('US', $value);
});

test('latitude() method returns a float within the range', function () {
    $value = 🙃()->address->latitude();

    $this->assertIsFloat($value);
    $this->assertGreaterThanOrEqual(-90, $value);
    $this->assertLessThanOrEqual(90, $value);
});

test('longitude() method returns a float within the range', function () {
    $value = 🙃()->address->longitude();

    $this->assertIsFloat($value);
    $this->assertGreaterThanOrEqual(-180, $value);
    $this->assertLessThanOrEqual(180, $value);
});

test('coordinate() method returns an array with latitude and longitude inside', function () {
    $value = 🙃()->address->coordinate();

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
});

// endregion

// region Methods as Attributes

test('zip_code() method as attribute', function () {
    $value = 🙃()->address->zip_code;

    $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
});

test('latitude() method as attribute', function () {
    $value = 🙃()->address->latitude;

    $this->assertIsFloat($value);
    $this->assertGreaterThanOrEqual(-90, $value);
    $this->assertLessThanOrEqual(90, $value);
});

test('longitude() method as attribute', function () {
    $value = 🙃()->address->longitude;

    $this->assertIsFloat($value);
    $this->assertGreaterThanOrEqual(-180, $value);
    $this->assertLessThanOrEqual(180, $value);
});

test('coordinate() method as attribute', function () {
    $value = 🙃()->address->coordinate;

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
});

// endregion

// region Method Aliases

test('zip() method alias', function () {
    $value = 🙃()->address->zip();

    $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
});

test('postcode() method alias', function () {
    $value = 🙃()->address->postcode();

    $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
});

// endregion

// region Method Aliases as Attributes

test('zip() method alias as attribute', function () {
    $value = 🙃()->address->zip;

    $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
});

test('postcode() method alias as attribute', function () {
    $value = 🙃()->address->postcode;

    $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
});

// endregion
