# Phony::address()

```php
Phony::address()->city(); // => "Imogeneborough"

Phony::address()->streetName(); // => "Larkin Fork"

Phony::address()->streetAddress(); // => "282 Kevin Brook"

Phony::address()->secondaryAddress(); // => "Apt. 672"

Phony::address()->buildingNumber(); // => "7304"

Phony::address()->mailBox(); // => "PO Box 123"

Phony::address()->community(); // => "University Crossing"

Phony::address()->zipCode(); // => "58517" or "23285-4905"

Phony::address()->zip(); // => "58517" or "66259-8212"

Phony::address()->postcode(); // => "76032-4907" or "58517"

Phony::address()->timeZone(); // => "Asia/Yakutsk"

Phony::address()->streetSuffix(); // => "Street"

Phony::address()->citySuffix(); // => "fort"

Phony::address()->cityPrefix(); // => "Lake"

Phony::address()->state(); // => "California"

Phony::address()->stateAbbr(); // => "AP"

Phony::address()->country(); // => "French Guiana"

// Keyword arguments: code
Phony::address()->countryByCode('NL'); // => "Netherlands"

// Keyword arguments: name
Phony::address()->countryNameToCode('united_states'); // => "US"

Phony::address()->countryCode(); // => "IT"

Phony::address()->countryCodeLong(); // => "ITA"

Phony::address()->latitude(); // => "-58.17256227443719"

Phony::address()->longitude(); // => "-156.65548382095133"

Phony::address()->fullAddress(); // => "282 Kevin Brook, Imogeneborough, CA 58517"
```
