<?php

namespace Deligoez\Phony;

use Deligoez\Phony\Fakes\Standard\Address;
use Deligoez\Phony\Fakes\Standard\Alphabet;
use Deligoez\Phony\Fakes\Standard\Ancient;
use Deligoez\Phony\Fakes\Standard\Artist;
use Deligoez\Phony\Fakes\Standard\Coin;
use Deligoez\Phony\Fakes\Standard\Cosmere;
use Deligoez\Phony\Fakes\Standard\Currency;
use Deligoez\Phony\Fakes\Standard\Person;
use Deligoez\Phony\Fakes\Standard\SlackEmoji;
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
 * @property Artist artist
 * @property Coin coin
 * @property Cosmere cosmere
 * @property Currency currency
 * @property Person person
 * @property SlackEmoji slack_emoji
 */
class Phony
{
    public Loader $loader;
    public string $defaultLocale;
    private array $instances = [];
    private array $aliases;

    /**
     * Phony constructor.
     *
     * @param  string  $defaultLocale
     */
    public function __construct(string $defaultLocale)
    {
        $this->loader = new Loader($defaultLocale);
        $this->defaultLocale = $defaultLocale;
        $this->aliases = Alias::default;
    }

    // region Magic Setup

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
        if (isset($this->aliases[$attribute])) {
            if (isset($this->instances[$attribute]))
            {
                return $this->instances[$attribute];
            }

            $fake = $this->aliases[$attribute];
            $this->instances[$attribute] = new $fake($this);
            return $this->instances[$attribute];
        }

        throw new RuntimeException("The {$attribute} attribute is not defined!");
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
        return isset($this->aliases[$attribute]);
    }

    // endregion
}
