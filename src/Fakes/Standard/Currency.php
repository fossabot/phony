<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Currency extends Fake
{
    /**
     * Produces the name of a currency.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::currency()->name() #=> "Swedish Krona"
     */
    public function name(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('currency.name', $times, $asString, $glue);
    }

    /**
     * Produces a currency code.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::currency()->code() #=> "USD"
     */
    public function code(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('currency.code', $times, $asString, $glue);
    }

    /**
     * Produces a currency symbol.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::currency()->symbol() #=> "$"
     */
    public function symbol(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('currency.symbol', $times, $asString, $glue);
    }
}
