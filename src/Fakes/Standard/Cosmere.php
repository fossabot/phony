<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Cosmere.
 *
 *
 * @property string aon
 * @property string shard_world
 * @property string shard
 * @property string surge
 * @property string knight_radiant
 * @property string metal
 * @property string allomancer
 * @property string feruchemist
 * @property string herald
 * @property string spren
 */
class Cosmere extends Fake
{
    protected function aon(): string
    {
        return $this->fetch('cosmere.aon');
    }

    protected function shard_world(): string
    {
        return $this->fetch('cosmere.shard_world');
    }

    protected function shard(): string
    {
        return $this->fetch('cosmere.shard');
    }

    protected function surge(): string
    {
        return $this->fetch('cosmere.surge');
    }

    protected function knight_radiant(): string
    {
        return $this->fetch('cosmere.knight_radiant');
    }

    protected function metal(): string
    {
        return $this->fetch('cosmere.metal');
    }

    protected function allomancer(): string
    {
        return $this->fetch('cosmere.allomancer');
    }

    protected function feruchemist(): string
    {
        return $this->fetch('cosmere.feruchemist');
    }

    protected function herald(): string
    {
        return $this->fetch('cosmere.herald');
    }

    protected function spren(): string
    {
        return $this->fetch('cosmere.spren');
    }
}
