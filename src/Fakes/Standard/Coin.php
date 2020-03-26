<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Coin
 *
 * @package Deligoez\Phony\Fakes\Standard
 *
 * @property string flip
 * @property string name
 */
class Coin extends Fake
{
    /**
     * Retrieves a face to a flipped coin.
     *
     * @return string
     *
     * @example 🙃::coin()->flip() #=> "Heads"
     */
    public function flip(): string
    {
        return $this->fetch('coin.flip');
    }

    /**
     * Retrieves a random coin from any country.
     *
     * @return string
     *
     * @example 🙃::coin()->name() #=> "Brazilian Real"
     */
    public function name(): string
    {
        return $this->fetch('coin.name');
    }
}
