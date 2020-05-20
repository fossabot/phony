<?php

namespace Phonyland\Fake\Standard;

use Phonyland\Fake\Fake;

/**
 * Class Cosmere.
 *
 *
 * @property-read string aon
 * @property-read string shard_world
 * @property-read string shard
 * @property-read string surge
 * @property-read string knight_radiant
 * @property-read string metal
 * @property-read string allomancer
 * @property-read string feruchemist
 * @property-read string herald
 * @property-read string spren
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
