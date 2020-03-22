<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Ancient extends Fake
{
    /**
     * Produces a god from ancient mythology.
     *
     * @return string
     *
     * @example Phony::ancient()->god() #=> "Zeus"
     */
    public function god(): string
    {
        return $this->fetchOne('ancient.god');
    }

    /**
     * Produces a primordial from ancient mythology.
     *
     * @return string
     *
     * @example Phony::ancient()->primordial() #=> "Gaia"
     */
    public function primordial(): string
    {
        return $this->fetchOne('ancient.primordial');
    }

    /**
     * Produces a titan from ancient mythology.
     *
     * @return string
     *
     * @example Phony::ancient()->titan() #=> "Atlas"
     */
    public function titan(): string
    {
        return $this->fetchOne('ancient.titan');
    }

    /**
     * Produces a hero from ancient mythology.
     *
     * @return string
     *
     * @example Phony::ancient()->hero() #=> "Achilles"
     */
    public function hero(): string
    {
        return $this->fetchOne('ancient.hero');
    }
}
