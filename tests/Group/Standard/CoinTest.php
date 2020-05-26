<?php

// region Attributes

test('flip attribute', function () {
    $value = 🙃()->coin->flip;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('name attribute', function () {
    $value = 🙃()->coin->name;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

// endregion
