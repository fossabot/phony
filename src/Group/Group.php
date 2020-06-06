<?php

namespace Phonyland\Group;

use Phonyland\Fake\Fake;
use Phonyland\Phony;
use RuntimeException;

class Group
{
    protected Phony $phony;
    public array $fakes;
    protected array $fakeInstances = [];

    public const All = [
        'standard'             => Standard::class,
        'programming_language' => ProgrammingLanguage::class,
    ];

    /**
     * Group constructor.
     *
     * @param  \Phonyland\Phony  $phony
     */
    public function __construct(Phony $phony)
    {
        $this->phony = $phony;
    }

    public function __get($attribute)
    {
        // Check if it's a valid fake
        if (isset($this->fakes[$attribute])) {
            // Check if it's already instantiated
            if (isset($this->fakeInstances[$attribute])) {
                return $this->fakeInstances[$attribute];
            }

            return $this->createFakeInstance($attribute);
        }

        // TODO: Handle if it's not in $fakes -> TDD
    }

    private function createFakeInstance(string $fake): Fake
    {
        $fakeClassName = $this->fakes[$fake];
        // TODO: Check if there is a localized fake class
        $this->fakeInstances[$fake] = new $fakeClassName($this->phony);

        return $this->fakeInstances[$fake];
    }

    /**
     * Don't allow setting magic attributes.
     *
     * @param $attribute
     * @param $value
     */
    public function __set($attribute, $value)
    {
        throw new RuntimeException('Setting group is not allowed!');
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
        return isset($this->fakes[$attribute]);
    }
}
