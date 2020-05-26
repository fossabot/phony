<?php

// region Attributes

test('male_first_name attribute', function () {
    $value = 🙃('tr')->person->male_first_name;

    $this->assertIsString($value);
});

test('female_first_name attribute', function () {
    $value = 🙃('tr')->person->female_first_name;

    $this->assertIsString($value);
});

test('last_name attribute', function () {
    $value = 🙃('tr')->person->last_name;

    $this->assertTrue(mb_ereg_match('(\w+\.? ?){3,4}', $value));
});

// endregion

// region Methods

test('initials() method with default length', function () {
    $value = 🙃('tr')->person->initials();

    $this->assertEquals(6, mb_strlen($value, 'utf-8'));
});

test('initials() method with given length', function () {
    $times = random_int(2, 10);
    $value = 🙃('tr')->person->initials($times);

    $this->assertEquals($times * 2, mb_strlen($value, 'utf-8'));
});

// endregion
