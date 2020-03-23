# Phony::person()

```php
Phony::person()->name(); // => "Tyshawn Johns Sr."

Phony::person()->nameWithMiddle(); // => "Aditya Elton Douglas"

Phony::person()->firstName(); // => "Kaci"

Phony::person()->middleName(); // => "Abraham"

Phony::person()->maleFirstName(); // => "Edward"

Phony::person()->femaleFirstName(); // => "Natasha"

Phony::person()->lastName(); // => "Ernser"

Phony::person()->prefix(); // => "Mr."

Phony::person()->suffix(); // => "IV"

# Keyword arguments: number
Phony::person()->initials(); // => "NJM"

Phony::person()->initials(2); // => "NM"
```
