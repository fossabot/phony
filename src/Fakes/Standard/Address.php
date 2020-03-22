<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Address extends Fake
{
    /**
     * Produces the name of a city.
     *
     * @param  bool  $withState
     *
     * @return string
     *
     * @example Phony::address()->city() #=> "Zeus"
     */
    public function city(bool $withState): string
    {
        return $this->fetchOne('address.city');
    }
}
