<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Phony;
use Deligoez\Phony\Fakes\Fake;

/**
 * Class Address.
 *
 * @package Deligoez\Phony\Fakes\Standard
 *
 * @property string city
 * @property string cityWithState
 * @property string streetName
 * @property string secondaryAddress
 * @property string streetAddress
 * @property string streetAddressWithSecondaryAddress
 * @property string buildingNumber
 * @property string community
 * @property string mailBox
 * @property string zipCode
 * @property string zip
 * @property string postcode
 * @property string timeZone
 * @property string streetSuffix
 * @property string citySuffix
 * @property string cityPrefix
 * @property string stateAbbr
 * @property string state
 * @property string country
 * @property string countryCode
 * @property string countryCodeLong
 * @property string fullAddress
 * @method zip(?string $stateAbbreviation = null): string
 * @method postcode(?string $stateAbbreviation = null): string
 */
class Address extends Fake
{
    /**
     * Address constructor.
     *
     * @param  \Deligoez\Phony\Phony  $phony
     */
    public function __construct(Phony $phony)
    {
        parent::__construct($phony);

        $this->attributeAliases = [
            'cityWithState'                     => 'city',
            'streetAddressWithSecondaryAddress' => 'streetAddress',
            'zip'                               => 'zipCode',
            'postcode'                          => 'zipCode',
        ];

        $this->functionAliases = [
            'zip'      => 'zipCode',
            'postcode' => 'zipCode',
        ];
    }

    /**
     * Produces the name of a city.
     *
     * @param  bool  $withState
     *
     * @return string
     *
     * @example 🙃::address()->city() // => "Imogeneborough"
     * @example 🙃::address()->city(true) // => "Northfort, California"
     */
    protected function city(bool $withState = false): string
    {
        return ! $withState
            ? $this->fetch('address.city_with_state')
            : $this->fetch('address.city');
    }

    /**
     * Produces a street name.
     *
     * @return string
     *
     * @example 🙃::address()->streetName() // => "Larkin Fork"
     */
    protected function streetName(): string
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
     * @example 🙃::address()->secondaryAddress() // => "Apt. 672"
     */
    protected function secondaryAddress(): string
    {
        return $this->bothify(
            $this->fetch('address.secondary_address')
        );
    }

    /**
     * Produces a street address.
     *
     * @param  bool  $withSecondaryAddress
     *
     * @return string
     *
     * @throws \Exception
     *
     * @example 🙃::address()->streetAddress() // => "282 Kevin Brook"
     */
    protected function streetAddress(bool $withSecondaryAddress = false): string
    {
        return ! $withSecondaryAddress
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
     * @example 🙃::address()->buildingNumber() // => "7304"
     */
    protected function buildingNumber(): string
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
     * @example 🙃::address()->community() // => "University Crossing"
     */
    protected function community(): string
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
     * @example 🙃::address()->mailBox() // => "PO Box 123"
     */
    protected function mailBox(): string
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
     * @example 🙃::address()->zipCode() // => "58517"
     * @example 🙃::address()->zipCode() // => "23285-4905"
     * @example 🙃::address()->zipCode('CO') // => "80011"
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
     * Produces the name of a time zone.
     *
     * @return string
     *
     * @example 🙃::address()->timeZone() // => "Asia/Yakutsk"
     */
    protected function timeZone(): string
    {
        return $this->fetch('address.time_zone');
    }

    /**
     * Produces a street suffix.
     *
     * @return string
     *
     * @example 🙃::address()->streetSuffix() // => "Street"
     */
    protected function streetSuffix(): string
    {
        return $this->fetch('address.street_suffix');
    }

    /**
     * Produces a city suffix.
     *
     * @return string
     *
     * @example 🙃::address()->citySuffix() // => "fort"
     */
    protected function citySuffix(): string
    {
        return $this->fetch('address.city_suffix');
    }

    /**
     * Produces a city prefix.
     *
     * @return string
     *
     * @example 🙃::address()->cityPrefix() // => "Lake"
     */
    protected function cityPrefix(): string
    {
        return $this->fetch('address.city_prefix');
    }

    /**
     * Produces a state abbreviation.
     *
     * @return string
     *
     * @example 🙃::address()->stateAbbr() // => "AP"
     */
    protected function stateAbbr(): string
    {
        return $this->fetch('address.state_abbr');
    }

    /**
     * Produces the name of a state.
     *
     * @return string
     *
     * @example 🙃::address()->state() // => "California"
     */
    protected function state(): string
    {
        return $this->fetch('address.state');
    }

    /**
     * Produces the name of a country.
     *
     * @return string
     *
     * @example 🙃::address()->country() // => "French Guiana"
     */
    protected function country(): string
    {
        return $this->fetch('address.country');
    }

    /**
     * Produces a country by ISO country code.
     * See the [List of ISO 3166 country codes](https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes)
     * on Wikipedia for a full list.
     *
     * @param  string  $code
     *
     * @return string
     *
     * @example 🙃::address()->countryByCode('NL') // => "Netherlands"
     */
    public function countryByCode(string $code): string
    {
        return $this->fetch("address.country_by_code.{$code}");
    }

    /**
     * Produces an ISO 3166 country code when given a country name.
     *
     * @param  string  $name
     *
     * @return string
     *
     * @example 🙃::address()->countryNameToCode('united_states') // => "US"
     */
    public function countryNameToCode(string $name): string
    {
        return $this->fetch("address.country_by_name.{$name}");
    }

    /**
     * Produces an ISO 3166 country code.
     *
     * @return string
     *
     * @example 🙃::address()->countryCode() // => "IT"
     */
    protected function countryCode(): string
    {
        return $this->fetch('address.country_code');
    }

    /**
     * Produces a long (alpha-3) ISO 3166 country code.
     *
     * @return string
     *
     * @example 🙃::address()->countryCodeLong() // => "ITA"
     */
    protected function countryCodeLong(): string
    {
        return $this->fetch('address.country_code_long');
    }

    /**
     * Produces a full address.
     *
     * @return string
     *
     * @throws \Exception
     *
     * @example 🙃::address()->fullAddress() // => "282 Kevin Brook, Imogeneborough, CA 58517"
     */
    protected function fullAddress(): string
    {
        return $this->bothify($this->fetch('address.full_address'));
    }

}
