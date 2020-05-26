<?php

// region Attributes

test('flip attribute', function () {
    $value = 🙃('tr')->coin->flip;

    $this->assertIsString($value);
});

// endregion
