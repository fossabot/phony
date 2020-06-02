<?php

// region Attributes

test('uppercase_letter attribute', function () {
    $value = 🙃()->alphabet->uppercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('lowercase_letter attribute', function () {
    $value = 🙃()->alphabet->lowercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('letter attribute', function () {
    foreach (range(1, 10) as $index) {
        $value = 🙃()->alphabet->letter;
        $this->assertEquals(1, mb_strlen($value, 'utf8'));
    }
});

test('punctuation_mark attribute', function () {
    $value = 🙃()->alphabet->punctuation_mark;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

// endregion

// region Methods

test('ascii_uppercase_letter() method', function () {
    $value = 🙃()->alphabet->ascii_uppercase_letter();

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('ascii_lowercase_letter() method', function () {
    $value = 🙃()->alphabet->ascii_lowercase_letter();

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('ascii_letter() method', function () {
    $value = 🙃()->alphabet->ascii_letter();

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

// endregion

// region Methods as Attributes

test('ascii_uppercase_letter() method as attribute', function () {
    $value = 🙃()->alphabet->ascii_uppercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('ascii_lowercase_letter() method as attribute', function () {
    $value = 🙃()->alphabet->ascii_lowercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('ascii_letter() method as attribute', function () {
    $value = 🙃()->alphabet->ascii_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

// endregion
