<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Phony;

class Coin extends Phony
{
    /**
     * Retrieves a face to a flipped coin.
     *
     * @return string
     *
     * @example Phony::coin()->flip() #=> "Heads"
     */
    public function flip(): string
    {
        return $this->fetchOne('coin.flip');
    }
}
