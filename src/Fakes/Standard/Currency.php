<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Currency extends Fake
{
    /**
     * Produces the name of a currency.
     *
     * @return string
     *
     * @example Phony::currency()->name() #=> "Swedish Krona"
     */
    public function name(): string
    {
        return $this->fetch('currency.name');
    }

    /**
     * Produces a currency code.
     *
     * @return string
     *
     * @example Phony::currency()->code() #=> "USD"
     */
    public function code(): string
    {
        return $this->fetch('currency.code');
    }

    /**
     * Produces a currency symbol.
     *
     * @return string
     *
     * @example Phony::currency()->symbol() #=> "$"
     */
    public function symbol(): string
    {
        return $this->fetch('currency.symbol');
    }
}
