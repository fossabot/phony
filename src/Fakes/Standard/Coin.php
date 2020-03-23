<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Coin extends Fake
{
    /**
     * Retrieves a face to a flipped coin.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::coin()->flip() #=> "Heads"
     */
    public function flip(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('coin.flip', $times, $asString, $glue);
    }

    /**
     * Retrieves a random coin from any country.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::coin()->name() #=> "Brazilian Real"
     */
    public function name(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('currency.name', $times, $asString, $glue);
    }
}
