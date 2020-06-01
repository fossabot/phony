<?php

it('can get cache size', function () {
    $value = 🙃()->getCacheSize();

    $this->assertIsInt($value);
});

it('can set cache size', function () {
    $🙃 = 🙃()->setCacheSize(1000000);

    $this->assertEquals(
        1000000,
        $🙃->getCacheSize()
    );
});

it('does not cache if size exceed', function () {
    $🙃 = 🙃()->setCacheSize(0);

    $🙃->alphabet->uppercase_letter;
    $🙃->alphabet->lowercase_letter;

    $this->assertEquals(
        0,
        $🙃->getCacheUsage()
    );
});

it('does not cache if it will be exceed with the number of new items', function () {
    $🙃 = 🙃()->setCacheSize(29);

    $🙃->alphabet->uppercase_letter; // Size of 29
    $🙃->alphabet->lowercase_letter; // Size of 29

    $this->assertEquals(
        29,
        $🙃->getCacheUsage()
    );
});

test('cache size can be dynamically increase', function () {
    $🙃 = 🙃()->setCacheSize(0);

    $🙃->alphabet->uppercase_letter; // Size of 29

    $this->assertEquals(
        0,
        $🙃->getCacheUsage()
    );

    $🙃 = 🙃()->setCacheSize(29);

    $🙃->alphabet->uppercase_letter; // Size of 29

    $this->assertEquals(
        29,
        $🙃->getCacheUsage()
    );
});
