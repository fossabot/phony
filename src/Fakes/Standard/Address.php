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
     * @example 🙃::address()->city() #=> "Imogeneborough"
     * @example 🙃::address()->city(true) #=> "Northfort, California"
     */
    public function city(bool $withState = false): string
    {
        return !$withState
            ? $this->fetch('address.city_with_state')
            : $this->fetch('address.city');
    }

    /**
     * Produces a street name.
     *
     * @return string
     *
     * @example 🙃::address()->streetName() #=> "Larkin Fork"
     */
    public function streetName(): string
    {
        return $this->fetch('address.street_name');
    }

    /**
     * Produces a secondary address.
     *
     * @return string
     *
     * @throws \Exception
     *
     * @example 🙃::address()->secondaryAddress() #=> "Apt. 672"
     */
    public function secondaryAddress(): string
    {
        return $this->bothify(
            $this->fetch('address.secondary_address')
        );
    }

    /**
     * Produces a street address.
     *
     * @param  bool  $includeSecondary
     *
     * @return string
     *
     * @throws \Exception
     *
     * @example 🙃::address()->streetAddress() #=> "282 Kevin Brook"
     */
    public function streetAddress(bool $includeSecondary = false): string
    {
        return !$includeSecondary
            ? $this->fetch('address.street_address')
            : $this->fetch('address.street_address').' '.$this->secondaryAddress();
    }

    /**
     * Produces a building number.
     *
     * @return string
     *
     * @throws \Exception
     *
     * @example 🙃::address()->buildingNumber() #=> "7304"
     */
    public function buildingNumber(): string
    {
        return $this->bothify(
            $this->fetch('address.building_number')
        );
    }

    /**
     * Produces the name of a community.
     *
     * @return string
     *
     * @example 🙃::address()->community() #=> "University Crossing"
     */
    public function community(): string
    {
        return $this->fetch('address.community');
    }

    /**
     * Produces a mail box number.
     *
     * @return string
     *
     * @throws \Exception
     *
     * @example 🙃::address()->mailBox() #=> "PO Box 123"
     */
    public function mailBox(): string
    {
        return $this->bothify(
            $this->fetch('address.mail_box')
        );
    }

    /**
     * Produces a Zip Code.
     *
     * @param  string  $stateAbbreviation
     *
     * @return string
     *
     * @throws \Exception
     *
     * @example 🙃::address()->zipCode() #=> "58517"
     * @example 🙃::address()->zipCode() #=> "23285-4905"
     * @example 🙃::address()->zipCode('CO') #=> "80011"
     */
    public function zipCode(?string $stateAbbreviation = null): string
    {
        if (empty($stateAbbreviation)) {
            return $this->bothify(
                $this->fetch('address.postcode')
            );
        }

        return $this->bothify(
            $this->fetch("address.postcode_by_state.{$stateAbbreviation}")
        );
    }

    /**
     * Alias for the zipCode().
     *
     * @param  string  $stateAbbreviation
     *
     * @return string
     *
     * @throws \Exception
     */
    public function zip(?string $stateAbbreviation = null): string
    {
        return $this->zipCode($stateAbbreviation);
    }

    /**
     * Alias for the zipCode().
     *
     * @param  string  $stateAbbreviation
     *
     * @return string
     *
     * @throws \Exception
     */
    public function postcode(?string $stateAbbreviation = null): string
    {
        return $this->zipCode($stateAbbreviation);
    }

    /**
     * Produces a street suffix.
     *
     * @return string
     *
     * @example 🙃::address()->streetSuffix() #=> "Street"
     */
    public function streetSuffix(): string
    {
        return $this->fetch('address.street_suffix');
    }

    /**
     * Produces a city suffix.
     *
     * @return string
     *
     * @example 🙃::address()->citySuffix() #=> "fort"
     */
    public function citySuffix(): string
    {
        return $this->fetch('address.city_suffix');
    }

    /**
     * Produces a city prefix.
     *
     * @return string
     *
     * @example 🙃::address()->cityPrefix() #=> "Lake"
     */
    public function cityPrefix(): string
    {
        return $this->fetch('address.city_prefix');
    }
}
