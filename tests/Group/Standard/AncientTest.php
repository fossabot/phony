<?php

// region Attributes

test('god attribute', function () {
    $value = 🙃()->ancient->god;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('primordial attribute', function () {
    $value = 🙃()->ancient->primordial;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('titan attribute', function () {
    $value = 🙃()->ancient->titan;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('hero attribute', function () {
    $value = 🙃()->ancient->hero;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

// endregion
