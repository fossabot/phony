<?php

// region Attributes

test('name attribute', function () {
    $value = 🙃()->currency->name;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('code attribute', function () {
    $value = 🙃()->currency->code;

    $this->assertMatchesRegularExpression('/[A-Z]{3}/', $value);
});

test('symbol attribute', function () {
    $value = 🙃()->currency->symbol;

    $this->assertIsString($value);
});

// endregion
