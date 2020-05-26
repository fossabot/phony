<?php

// region Attributes

test('boolean attribute', function () {
    $value = 🙃()->boolean->boolean;

    $this->assertIsBool($value);
});

// endregion

// region Methods

test('boolean() method returns a boolean value', function () {
    $value = 🙃()->boolean->boolean();

    $this->assertIsBool($value);
});

test('boolean() method with $truePercentage=100 returns always true', function () {
    $value = 🙃()->boolean->boolean(100);

    $this->assertTrue($value);
});

test('boolean() method with $truePercentage=0 returns always false', function () {
    $value = 🙃()->boolean->boolean(0);

    $this->assertFalse($value);
});

// endregion
