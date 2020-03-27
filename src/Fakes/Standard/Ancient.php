<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Ancient.
 *
 *
 * @property string god
 * @property string primordial
 * @property string titan
 * @property string hero
 */
class Ancient extends Fake
{
    /**
     * Produces a god from ancient mythology.
     *
     * @return string
     *
     * @example 🙃::ancient()->god() // => "Zeus"
     */
    protected function god(): string
    {
        return $this->fetch('ancient.god');
    }

    /**
     * Produces a primordial from ancient mythology.
     *
     * @return string
     *
     * @example 🙃::ancient()->primordial() // => "Gaia"
     */
    protected function primordial(): string
    {
        return $this->fetch('ancient.primordial');
    }

    /**
     * Produces a titan from ancient mythology.
     *
     * @return string
     *
     * @example 🙃::ancient()->titan() // => "Atlas"
     */
    protected function titan(): string
    {
        return $this->fetch('ancient.titan');
    }

    /**
     * Produces a hero from ancient mythology.
     *
     * @return string
     *
     * @example 🙃::ancient()->hero() // => "Achilles"
     */
    protected function hero(): string
    {
        return $this->fetch('ancient.hero');
    }
}
