<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Phony;

class Currency extends Phony
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
        return $this->fetchOne('currency.name');
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
        return $this->fetchOne('currency.code');
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
        return $this->fetchOne('currency.symbol');
    }
}