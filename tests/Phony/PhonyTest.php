<?php

use Phonyland\Fake\Fake;

test('can_call_by_an_alias', function () {
    $this->assertInstanceOf(Fake::class, 🙃()->address);
    $this->assertInstanceOf(Fake::class, 🙃()->📫);
    $this->assertInstanceOf(Fake::class, 🙃()->alphabet);
    $this->assertInstanceOf(Fake::class, 🙃()->🔤);
    $this->assertInstanceOf(Fake::class, 🙃()->ancient);
    $this->assertInstanceOf(Fake::class, 🙃()->📜);
    $this->assertInstanceOf(Fake::class, 🙃()->person);
    $this->assertInstanceOf(Fake::class, 🙃()->coin);
    $this->assertInstanceOf(Fake::class, 🙃()->currency);
});
