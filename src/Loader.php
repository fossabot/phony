<?php

namespace Deligoez\Phony;

use RuntimeException;

class Loader
{
    protected string $defaultLocale;
    protected array $cache = [];

    public function __construct(string $defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function get(string $key, ?string $path, string $locale = null, bool $fallback = true)
    {
        // TODO: Rename variable names
        // TODO: Implement fallback mechanism
        // TODO: Implement caching mechanism
        //       - Introduce maximum cached items. Exp. 1 million -> After that clean the cache -> should be configurable
        if ($fallback){
            $locale = $locale ?? $this->defaultLocale;
        }

        [$group, $item] = explode('.', $key);

        $line = $this->load($group, $item, $locale);

        if (isset($path)) {
            // TODO: Implement nested paths
            $line = $line[$path];
        }

        return $line ?? $key;
    }

    public function load(string $group, string $item, string $locale)
    {
        if ($this->isCached($group, $item)) {
            return $this->cache[$group][$item];
        }

        $path = __DIR__."/Locale/{$locale}/{$group}/{$item}.php";

        if (file_exists($path)) {
            $data = require $path;
            $this->cache[$group][$item] = $data;

            return $data;
        }

        throw new RuntimeException("File does not exist at path {$path}");
    }

    protected function isCached(string $group, string $item): bool
    {
        return isset($this->cache[$group][$item]);
    }
}
