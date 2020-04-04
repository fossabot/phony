<?php

namespace Deligoez\Phony;

use Deligoez\Phony\Fake\Standard\Address;
use Deligoez\Phony\Fake\Standard\Alphabet;
use Deligoez\Phony\Fake\Standard\Ancient;
use Deligoez\Phony\Fake\Standard\Artist;
use Deligoez\Phony\Fake\Standard\Coin;
use Deligoez\Phony\Fake\Standard\Cosmere;
use Deligoez\Phony\Fake\Standard\Currency;
use Deligoez\Phony\Fake\Standard\Person;
use Deligoez\Phony\Fake\Standard\SlackEmoji;
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
    private array $groups;

    /**
     * Phony constructor.
     *
     * @param  string  $defaultLocale
     */
    public function __construct(string $defaultLocale)
    {
        $this->loader = new Loader($defaultLocale);
        $this->defaultLocale = $defaultLocale;
        $this->groups = Group::default;
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
        if (isset($this->groups[$attribute])) {
            if (isset($this->instances[$attribute])) {
                return $this->instances[$attribute];
            }

            $fake = $this->groups[$attribute];
            $this->instances[$attribute] = new $fake($this);

            return $this->instances[$attribute];
        }

        throw new RuntimeException("The {$attribute} fake is not found!");
    }

    /**
     * Don't allow setting magic attributes.
     *
     * @param $attribute
     * @param $value
     */
    public function __set($attribute, $value)
    {
        throw new RuntimeException('Setting fakes is not allowed!');
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
        return isset($this->groups[$attribute]);
    }

    // endregion

    // region Caching

    public function setCacheSize(int $cacheSize): Phony
    {
        $this->loader->setCacheSize($cacheSize);

        return $this;
    }

    public function getCacheSize(): int
    {
        return $this->loader->getCacheSize();
    }

    public function getCacheUsage(): int
    {
        return $this->loader->getCacheUsage();
    }

    // endregion

}
