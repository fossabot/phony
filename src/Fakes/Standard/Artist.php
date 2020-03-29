<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

/**
 * Class Artist.
 *
 *
 * @property string name
 */
class Artist extends Fake
{
    /**
     * Produces the name of an artist.
     *
     * @return string
     *
     * @example 🙃::artist()->name() // => "Michelangelo"
     */
    protected function name(): string
    {
        return $this->fetch('artist.name');
    }
}
