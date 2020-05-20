# $🙃->address


### $🙃->📫

```php
use Phonyland\Phony;


$🙃 = new Phony('en');

$🙃->address->city;                                  // => "Imogeneborough"

$🙃->address->city_with_state;                       // => "Northfort, California"

$🙃->address->street_name;                           // => "Larkin Fork"

$🙃->address->secondary_address;                     // => "Apt. 672"

$🙃->address->street_address;                        // => "282 Kevin Brook"

$🙃->address->street_address_with_secondary_address; // => "282 Kevin Brook Apt. 672"

$🙃->address->building_number;                       // => "7304"

$🙃->address->community;                             // => "University Crossing"

$🙃->address->mail_box;                              // => "PO Box 123"

// $stateAbbreviation
$🙃->address->zip_code('CO');                        // => "80011"

$🙃->address->zip('CO');                             // => "80011"

$🙃->address->zip_code('CO');                        // => "80011"

$🙃->address->zip_code;                              // => "58517" or "23285-4905"

$🙃->address->zip;                                   // => "58517" or "66259-8212"

$🙃->address->postcode;                              // => "76032-4907" or "58517"

$🙃->address->time_zone;                             // => "Asia/Yakutsk"

$🙃->address->street_suffix;                         // => "Street"

$🙃->address->city_suffix;                           // => "fort"

$🙃->address->city_prefix;                           // => "Lake"

$🙃->address->state_abbreviation;                    // => "AP"

$🙃->address->state;                                 // => "California"

$🙃->address->country;                               // => "French Guiana"

// Keyword arguments: code
$🙃->address->country_by_code('NL');                 // => "Netherlands"

// Keyword arguments: name
$🙃->address->country_by_name('united_states');      // => "US"

$🙃->address->country_code;                          // => "IT"

$🙃->address->country_code_long;                     // => "ITA"

$🙃->address->full_address;                          // => "282 Kevin Brook, Imogeneborough, CA 58517"

$🙃->address->default_country;                       // => "United States of America"

$🙃->address->latitude;                              // => "-58.17256227443719"

$🙃->address->longitude;                             // => "-156.65548382095133"

```
