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
        'aon'            => ['standard.cosmere.aon'],
        'shard_world'    => ['standard.cosmere.shard_world'],
        'shard'          => ['standard.cosmere.shard'],
        'surge'          => ['standard.cosmere.surge'],
        'knight_radiant' => ['standard.cosmere.knight_radiant'],
        'metal'          => ['standard.cosmere.metal'],
        'allomancer'     => ['standard.cosmere.allomancer'],
        'feruchemist'    => ['standard.cosmere.feruchemist'],
        'herald'         => ['standard.cosmere.herald'],
        'spren'          => ['standard.cosmere.spren'],
    ];
}
