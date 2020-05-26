<?php

// region Attributes

test('name attribute', function () {
    $value = 🙃()->person->name;

    $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $value);
});

test('name_with_middle attribute', function () {
    $value = 🙃()->person->name_with_middle;

    $this->assertMatchesRegularExpression('/(\w+\.? ?){3,4}/', $value);
});

test('first_name attribute', function () {
    $value = 🙃()->person->first_name;

    $this->assertMatchesRegularExpression('/(\w+\.? ?){2,4}/', $value);
});

test('middle_name attribute', function () {
    $value = 🙃()->person->middle_name;

    $this->assertMatchesRegularExpression('/(\w+\.? ?){3,4}/', $value);
});

test('male_first_name attribute', function () {
    $value = 🙃()->person->male_first_name;

    $this->assertIsString($value);
});

test('female_first_name attribute', function () {
    $value = 🙃()->person->female_first_name;

    $this->assertIsString($value);
});

test('last_name attribute', function () {
    $value = 🙃()->person->last_name;

    $this->assertMatchesRegularExpression('/(\w+\.? ?){3,4}/', $value);
});

test('prefix attribute', function () {
    $value = 🙃()->person->prefix;

    $this->assertMatchesRegularExpression('/[A-Z][a-z]+\.?/', $value);
});

test('suffix attribute', function () {
    $value = 🙃()->person->suffix;

    $this->assertMatchesRegularExpression('/[A-Z][a-z]*\.?/', $value);
});

// endregion

// region Methods

test('initials() method with default length', function () {
    $value = 🙃()->person->initials();

    $this->assertEquals(3, strlen($value));
});

test('initials() method with given length', function () {
    $value = 🙃()->person->initials($times = random_int(2, 10));

    $this->assertEquals($times, strlen($value));
});

// endregion

// region Methods as Attributes

test('initials() method as an attribute', function () {
    $value = 🙃()->person->initials;

    $this->assertEquals(3, strlen($value));
});

// endregion
