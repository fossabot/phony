<?php

namespace Phony;

use RuntimeException;

/**
 * Class Phony.
 *
 *
 * @property-read \Phony\Fake\Standard\Address    address
 * @property-read \Phony\Fake\Standard\Address    📫
 * @property-read \Phony\Fake\Standard\Alphabet   alphabet
 * @property-read \Phony\Fake\Standard\Alphabet   🔤
 * @property-read \Phony\Fake\Standard\Ancient    ancient
 * @property-read \Phony\Fake\Standard\Ancient    📜
 * @property-read \Phony\Fake\Standard\Artist     artist
 * @property-read \Phony\Fake\Standard\Boolean    boolean
 * @property-read \Phony\Fake\Standard\Coin       coin
 * @property-read \Phony\Fake\Standard\Cosmere    cosmere
 * @property-read \Phony\Fake\Standard\Currency   currency
 * @property-read \Phony\Fake\Standard\Number     number
 * @property-read \Phony\Fake\Standard\Person     person
 * @property-read \Phony\Fake\Standard\SlackEmoji slack_emoji
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
