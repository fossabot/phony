<?php

// region Attributes

test('aon attribute', function () {
    $value = 🙃()->cosmere->aon;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('shard_world attribute', function () {
    $value = 🙃()->cosmere->shard_world;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('shard attribute', function () {
    $value = 🙃()->cosmere->shard;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('surge attribute', function () {
    $value = 🙃()->cosmere->surge;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('knight_radiant attribute', function () {
    $value = 🙃()->cosmere->knight_radiant;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('metal attribute', function () {
    $value = 🙃()->cosmere->metal;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('allomancer attribute', function () {
    $value = 🙃()->cosmere->allomancer;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('feruchemist attribute', function () {
    $value = 🙃()->cosmere->feruchemist;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('herald attribute', function () {
    $value = 🙃()->cosmere->herald;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('spren attribute', function () {
    $value = 🙃()->cosmere->spren;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

// endregion
