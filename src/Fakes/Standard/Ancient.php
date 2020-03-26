<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Ancient.
 *
 * @package Deligoez\Phony\Fakes\Standard
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
    public function god(): string
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
    public function primordial(): string
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
    public function titan(): string
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
    public function hero(): string
    {
        return $this->fetch('ancient.hero');
    }
}
