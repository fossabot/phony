<?php

namespace Deligoez\Phony\Fake\Standard;

use Deligoez\Phony\Fake\Fake;

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
    protected array $attributes = [
        'aon'            => ['cosmere.aon'],
        'shard_world'    => ['cosmere.shard_world'],
        'shard'          => ['cosmere.shard'],
        'surge'          => ['cosmere.surge'],
        'knight_radiant' => ['cosmere.knight_radiant'],
        'metal'          => ['cosmere.metal'],
        'allomancer'     => ['cosmere.allomancer'],
        'feruchemist'    => ['cosmere.feruchemist'],
        'herald'         => ['cosmere.herald'],
        'spren'          => ['cosmere.spren'],
    ];
}
