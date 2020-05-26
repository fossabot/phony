<?php

// region Attributes

test('name attribute', function () {
    $value = 🙃()->artist->name;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

// endregion
