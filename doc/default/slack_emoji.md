# $🙃->slack_emoji

```php
use PhonyPHP\Phony\Phony;


$🙃 = new Phony('en');

# Random Slack Emoji from people category
$🙃->slack_emoji->people;                   // => ":sleepy:"

# Random Slack Emoji from nature category
$🙃->slack_emoji->nature;                   // => ":chestnut:"

# Random Slack Emoji from food and drink category
$🙃->slack_emoji->food_and_drink;           // => ":tangerine:"

# Random Slack Emoji from celebration category
$🙃->slack_emoji->celebration;              // => ":ribbon:"

# Random Slack Emoji from activity category
$🙃->slack_emoji->activity;                 // => ":performing_arts:"

# Random Slack Emoji from travel and places category
$🙃->slack_emoji->travel_and_places;        // => ":truck:"

# Random Slack Emoji from objects & symbols category
$🙃->slack_emoji->objects_and_symbols;      // => ":alarm_clock:"

# Random Slack Emoji from custom category
$🙃->slack_emoji->custom;                   // => ":suspect:"

# Random Slack Emoji from any category
$🙃->slack_emoji->emoji;                    // => ":last_quarter_moon:"
```
