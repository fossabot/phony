<?php

namespace Deligoez\Phony;

use Deligoez\Phony\Fakes\Standard\Address;
use Deligoez\Phony\Fakes\Standard\Alphabet;
use Deligoez\Phony\Fakes\Standard\Ancient;
use Deligoez\Phony\Fakes\Standard\Coin;
use Deligoez\Phony\Fakes\Standard\Currency;
use Deligoez\Phony\Fakes\Standard\Person;
use RuntimeException;

/**
 * Class Phony.
 *
 *
 * @property Address address
 * @property Address 📫
 * @property Alphabet alphabet
 * @property Alphabet 🔤
 * @property Ancient ancient
 * @property Ancient 📜
 * @property Person person
 * @property Coin coin
 * @property Currency currency
 */
class Phony
{
    public string $defaultLocale;
    protected array $attributeAliases;

    /**
     * Phony constructor.
     *
     * @param  string  $defaultLocale
     */
    public function __construct(string $defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;

        $this->attributeAliases = [
            '📫' => 'address',
            '🔤' => 'alphabet',
            '📜' => 'ancient',
        ];
    }

    /**
     * Get attributes by magic.
     *
     * @param $attribute
     *
     * @return mixed
     * @throws \Exception
     */
    public function __get($attribute)
    {
        if (isset($this->attributeAliases[$attribute])) {
            $functionName = $this->attributeAliases[$attribute];

            return $this->$functionName();
        }

        if (! method_exists($this, $attribute)) {
            throw new RuntimeException("The {$attribute} attribute is not defined!");
        }

        return $this->$attribute();
    }

    /**
     * Don't allow setting magic attributes.
     *
     * @param $attribute
     * @param $value
     */
    public function __set($attribute, $value)
    {
        throw new RuntimeException("Setting {$attribute} attribute is not allowed!");
    }

    /**
     * Check if a magic attribute exists.
     *
     * @param $attribute
     *
     * @return bool
     */
    public function __isset($attribute)
    {
        return method_exists($this, $attribute);
    }

    protected function address(): Address
    {
        return new Address($this);
    }

    public function alphabet(): Alphabet
    {
        return new Alphabet($this);
    }

    public function ancient(): Ancient
    {
        return new Ancient($this);
    }

    public function person(): Person
    {
        return new Person($this);
    }

    public function coin(): Coin
    {
        return new Coin($this);
    }

    public function currency(): Currency
    {
        return new Currency($this);
    }
}
