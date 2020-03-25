# 🙃::address()

```php
🙃::address()->city();                              // => "Imogeneborough"

// $withState
🙃::address()->city(true);                          // => "Northfort, California"

🙃::address()->streetName();                        // => "Larkin Fork"

🙃::address()->secondaryAddress();                  // => "Apt. 672"

🙃::address()->streetAddress();                     // => "282 Kevin Brook"

// $includeSecondary
🙃::address()->streetAddress(true);                 // => "282 Kevin Brook Apt. 672"

🙃::address()->buildingNumber();                    // => "7304"

🙃::address()->community();                         // => "University Crossing"

🙃::address()->mailBox();                           // => "PO Box 123"

🙃::address()->zipCode();                           // => "58517" or "23285-4905"

🙃::address()->zip();                               // => "58517" or "66259-8212"

🙃::address()->postcode();                          // => "76032-4907" or "58517"

🙃::address()->streetSuffix();                      // => "Street"

🙃::address()->citySuffix();                        // => "fort"

🙃::address()->cityPrefix();                        // => "Lake"

🙃::address()->timeZone();                          // => "Asia/Yakutsk"

🙃::address()->state();                             // => "California"

🙃::address()->stateAbbr();                         // => "AP"

🙃::address()->country();                           // => "French Guiana"

// Keyword arguments: code
🙃::address()->countryByCode('NL');                 // => "Netherlands"

// Keyword arguments: name
🙃::address()->countryNameToCode('united_states');  // => "US"

🙃::address()->countryCode();                       // => "IT"

🙃::address()->countryCodeLong();                   // => "ITA"

🙃::address()->latitude();                          // => "-58.17256227443719"

🙃::address()->longitude();                         // => "-156.65548382095133"

🙃::address()->fullAddress();                       // => "282 Kevin Brook, Imogeneborough, CA 58517"
```
