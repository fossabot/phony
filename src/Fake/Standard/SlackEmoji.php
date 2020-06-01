<?php

namespace Phonyland\Fake\Standard;

use Phonyland\Fake\Fake;

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
        'people'            => ['standard.slack_emoji.people'],
        'nature'            => ['standard.slack_emoji.nature'],
        'food_and_drink'    => ['standard.slack_emoji.food_and_drink'],
        'celebration'       => ['standard.slack_emoji.celebration'],
        'activity'          => ['standard.slack_emoji.activity'],
        'travel_and_place'  => ['standard.slack_emoji.travel_and_place'],
        'object_and_symbol' => ['standard.slack_emoji.object_and_symbol'],
        'custom'            => ['standard.slack_emoji.custom'],
        'emoji'             => ['standard.slack_emoji.emoji'],
    ];
}
