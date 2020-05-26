<?php

// region Attributes

test('uppercase_letter attribute', function () {
    $value = 🙃('tr')->alphabet->uppercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('lowercase_letter attribute', function () {
    $value = 🙃('tr')->alphabet->lowercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('letter attribute', function () {
    $value = 🙃('tr')->alphabet->letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

// endregion
