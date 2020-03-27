<?php

namespace Deligoez\Phony\Fakes\Standard;

use Deligoez\Phony\Fakes\Fake;
use Deligoez\Phony\Phony;

/**
 * Class Address.
 *
 *
 * @property string city
 * @property string city_with_state
 * @property string street_name
 * @property string secondary_address
 * @property string street_address
 * @property string street_address_with_secondary_address
 * @property string building_number
 * @property string community
 * @property string mail_box
 * @property string zip_code
 * @property string zip
 * @property string postcode
 * @property string time_zone
 * @property string street_suffix
 * @property string city_suffix
 * @property string city_prefix
 * @property string state_abbreviation
 * @property string state
 * @property string country
 * @property string country_code
 * @property string country_code_long
 * @property string full_address
 * @property float latitude
 * @property float longitude
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
            'zip'      => 'zip',
            'postcode' => 'zip',
        ];

        $this->functionAliases = [
            'zip'      => ['zip_code', [null]],
            'postcode' => ['zip_code', [null]],
        ];
    }

    /**
     * Produces the name of a city.
     *
     * @return string
     *
     * @example 🙃::address()->city() // => "Imogeneborough"
     */
    protected function city(): string
    {
        return $this->fetch('address.city');
    }

    /**
     * Produces the name of a city with state.
     *
     * @return string
     *
     * @example 🙃::address()->city_with_state() // => "Northfort, California"
     */
    protected function city_with_state(): string
    {
        return $this->fetch('address.city_with_state');
    }

    /**
     * Produces a street name.
     *
     * @return string
     *
     * @example 🙃::address()->street_name() // => "Larkin Fork"
     */
    protected function street_name(): string
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
     * @example 🙃::address()->secondary_address() // => "Apt. 672"
     */
    protected function secondary_address(): string
    {
        return $this->bothify(
            $this->fetch('address.secondary_address')
        );
    }

    /**
     * Produces a street address.
     *
     * @return string
     *
     * @throws \Exception
     * @example 🙃::address()->street_address() // => "282 Kevin Brook"
     */
    protected function street_address(): string
    {
        return $this->numerify($this->fetch('address.street_address'));
    }

    /**
     * Produces a street address with secondary address.
     *
     * @return string
     *
     * @throws \Exception
     * @example 🙃::address()->street_address_with_secondary_address() // => "282 Kevin Brook Apt. 672"
     */
    protected function street_address_with_secondary_address(): string
    {
        return $this->bothify($this->fetch('address.street_address').' '.$this->secondary_address());
    }

    /**
     * Produces a building number.
     *
     * @return string
     *
     * @throws \Exception
     *
     * @example 🙃::address()->building_number() // => "7304"
     */
    protected function building_number(): string
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
     * @example 🙃::address()->mail_box() // => "PO Box 123"
     */
    protected function mail_box(): string
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
     * @example 🙃::address()->zip_code() // => "58517"
     * @example 🙃::address()->zip_code() // => "23285-4905"
     * @example 🙃::address()->zip_code('CO') // => "80011"
     */
    public function zip_code(?string $stateAbbreviation = null): string
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
     * @example 🙃::address()->time_zone() // => "Asia/Yakutsk"
     */
    protected function time_zone(): string
    {
        return $this->fetch('address.time_zone');
    }

    /**
     * Produces a street suffix.
     *
     * @return string
     *
     * @example 🙃::address()->street_suffix() // => "Street"
     */
    protected function street_suffix(): string
    {
        return $this->fetch('address.street_suffix');
    }

    /**
     * Produces a city suffix.
     *
     * @return string
     *
     * @example 🙃::address()->city_suffix() // => "fort"
     */
    protected function city_suffix(): string
    {
        return $this->fetch('address.city_suffix');
    }

    /**
     * Produces a city prefix.
     *
     * @return string
     *
     * @example 🙃::address()->city_prefix() // => "Lake"
     */
    protected function city_prefix(): string
    {
        return $this->fetch('address.city_prefix');
    }

    /**
     * Produces a state abbreviation.
     *
     * @return string
     *
     * @example 🙃::address()->state_abbreviation() // => "AP"
     */
    protected function state_abbreviation(): string
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
    public function country_by_code(string $code): string
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
    public function country_name_to_code(string $name): string
    {
        return $this->fetch("address.country_by_name.{$name}");
    }

    /**
     * Produces an ISO 3166 country code.
     *
     * @return string
     *
     * @example 🙃::address()->country_code() // => "IT"
     */
    protected function country_code(): string
    {
        return $this->fetch('address.country_code');
    }

    /**
     * Produces a long (alpha-3) ISO 3166 country code.
     *
     * @return string
     *
     * @example 🙃::address()->country_code_long() // => "ITA"
     */
    protected function country_code_long(): string
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
    protected function full_address(): string
    {
        return $this->bothify($this->fetch('address.full_address'));
    }
}
