<?php

namespace Phony\Fake\Standard;

use Phony\Fake\Fake;
use Phony\Operation;

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
 * @property string default_country
 * @property float latitude
 * @property float longitude
 * @method zip(?string $stateAbbreviation = null): string
 * @method postcode(?string $stateAbbreviation = null): string
 */
class Address extends Fake
{
    protected array $attributes = [
        'city'                                  => ['address.city'],
        'city_with_state'                       => ['address.city_with_state'],
        'street_name'                           => ['address.street_name'],
        'secondary_address'                     => ['address.secondary_address', Operation::numerify],
        'street_address'                        => ['address.street_address', Operation::numerify],
        'street_address_with_secondary_address' => ['address.street_address_with_secondary_address', Operation::bothify],
        'building_number'                       => ['address.building_number', Operation::bothify],
        'community'                             => ['address.community'],
        'mail_box'                              => ['address.mail_box', Operation::bothify],
        'time_zone'                             => ['address.time_zone'],
        'street_suffix'                          => ['address.street_suffix'],
        'city_suffix'                            => ['address.city_suffix'],
        'city_prefix'                            => ['address.city_prefix'],
        'state_abbreviation'                    => ['address.state_abbreviation'],
        'state'                                 => ['address.state'],
        'country'                               => ['address.country'],
        'country_code'                          => ['address.country_code'],
        'country_code_long'                     => ['address.country_code_long'],
        'full_address'                          => ['address.full_address'],
        'default_country'                       => ['address.default_country'],
    ];

    protected array $functionAttributes = [
        'zip_code' => ['zip_code', [null]],
        'zip'      => ['zip_code', [null]],
        'postcode' => ['zip_code', [null]],
    ];

    protected array $functionAliases = [
        'zip_code' => 'zip_code',
        'zip'      => 'zip_code',
        'postcode' => 'zip_code',
    ];

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
            $this->fetch('address.postcode_by_state', $stateAbbreviation)
        );
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
     * @example 🙃::address()->country_by_code('NL') // => "Netherlands"
     */
    public function country_by_code(string $code): string
    {
        return $this->fetch('address.country_by_code', $code);
    }

    /**
     * Produces an ISO 3166 country code when given a country name.
     *
     * @param  string  $name
     *
     * @return string
     *
     * @example 🙃::address()->country_by_name('united_states') // => "US"
     */
    public function country_by_name(string $name): string
    {
        return $this->fetch('address.country_by_name', $name);
    }
}
