<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;

class Address extends Fake
{
    /**
     * Produces the name of a city.
     *
     * @param  bool    $withState
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example 🙃::address()->city() #=> "Imogeneborough"
     * @example 🙃::address()->city(true) #=> "Northfort, California"
     */
    public function city(bool $withState = false, int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $withState
            ? $this->fetch('address.city', $times, $asString, $glue)
            : $this->fetch('address.city_with_state', $times, $asString, $glue);
    }

    /**
     * Produces the name of a city.
     *
     * @param  int     $times
     * @param  bool    $asString
     * @param  string  $glue
     *
     * @return array|string
     *
     * @example 🙃::address()->streetName() #=> "Larkin Fork"
     */
    public function streetName(int $times = 1, bool $asString = false, string $glue = ' ')
    {
        return $this->fetch('address.street_name', $times, $asString, $glue);
    }
}
