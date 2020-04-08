<?php

namespace Phony\Fake\Standard;

use Phony\Fake\Fake;

/**
 * Class SlackEmoji.
 *
 *
 * @property-read string people
 * @property-read string nature
 * @property-read string food_and_drink
 * @property-read string celebration
 * @property-read string activity
 * @property-read string travel_and_place
 * @property-read string object_and_symbol
 * @property-read string custom
 * @property-read string emoji
 */
class SlackEmoji extends Fake
{
    protected array $attributes = [
        'people'              => ['slack_emoji.people'],
        'nature'              => ['slack_emoji.nature'],
        'food_and_drink'      => ['slack_emoji.food_and_drink'],
        'celebration'         => ['slack_emoji.celebration'],
        'activity'            => ['slack_emoji.activity'],
        'travel_and_place'   => ['slack_emoji.travel_and_place'],
        'object_and_symbol'   => ['slack_emoji.object_and_symbol'],
        'custom'              => ['slack_emoji.custom'],
        'emoji'               => ['slack_emoji.emoji'],
    ];
}
