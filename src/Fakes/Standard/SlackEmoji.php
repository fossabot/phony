<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class SlackEmoji.
 *
 *
 * @property string people
 * @property string nature
 * @property string food_and_drink
 * @property string celebration
 * @property string activity
 * @property string travel_and_places
 * @property string objects_and_symbols
 * @property string custom
 * @property string emoji
 */
class SlackEmoji extends Fake
{
    protected array $attributes = [
        'people'              => ['slack_emoji.people'],
        'nature'              => ['slack_emoji.nature'],
        'food_and_drink'      => ['slack_emoji.food_and_drink'],
        'celebration'         => ['slack_emoji.celebration'],
        'activity'            => ['slack_emoji.activity'],
        'travel_and_places'   => ['slack_emoji.travel_and_places'],
        'objects_and_symbols' => ['slack_emoji.objects_and_symbols'],
        'custom'              => ['slack_emoji.custom'],
        'emoji'               => ['slack_emoji.emoji'],
    ];
}
