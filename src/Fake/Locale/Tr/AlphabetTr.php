<?php

namespace Phonyland\Fake\Locale\Tr;

use Phonyland\Fake\Standard\Alphabet;

/**
 * Class AlphabetTr.
 *
 *
 * @property-read string büyük_harf
 * @property-read string küçük_harf
 * @property-read string harf
 */
class AlphabetTr extends Alphabet
{
    protected array $attributes = [
        'büyük_harf' => ['standard.alphabet.uppercase_letter'],
        'küçük_harf' => ['standard.alphabet.lowercase_letter'],
        'harf'       => ['standard.alphabet.letter'],
    ];
}
