<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Currency.
 *
 *
 * @property string name
 * @property string code
 * @property string symbol
 */
class Currency extends Fake
{
    /**
     * Produces the name of a currency.
     *
     * @return string
     *
     * @example 🙃::currency()->name() // => "Swedish Krona"
     */
    protected function name(): string
    {
        return $this->fetch('currency.name');
    }

    /**
     * Produces a currency code.
     *
     * @return string
     *
     * @example 🙃::currency()->code() // => "USD"
     */
    protected function code(): string
    {
        return $this->fetch('currency.code');
    }

    /**
     * Produces a currency symbol.
     *
     * @return string
     *
     * @example 🙃::currency()->symbol() // => "$"
     */
    protected function symbol(): string
    {
        return $this->fetch('currency.symbol');
    }
}
