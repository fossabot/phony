<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Ancient extends Fake
{
    /**
     * Produces a god from ancient mythology.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::ancient()->god() #=> "Zeus"
     */
    public function god(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('ancient.god', $times, $asString, $glue);
    }

    /**
     * Produces a primordial from ancient mythology.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::ancient()->primordial() #=> "Gaia"
     */
    public function primordial(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('ancient.primordial', $times, $asString, $glue);
    }

    /**
     * Produces a titan from ancient mythology.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::ancient()->titan() #=> "Atlas"
     */
    public function titan(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('ancient.titan', $times, $asString, $glue);
    }

    /**
     * Produces a hero from ancient mythology.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example Phony::ancient()->hero() #=> "Achilles"
     */
    public function hero(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('ancient.hero', $times, $asString, $glue);
    }
}
