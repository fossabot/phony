<?php

namespace Phonyland;

use RuntimeException;

class Loader
{
    private string $defaultLocale;
    private array $cache = [];
    private int $cacheSize = 100000;

    public function __construct(string $defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;
    }

    // region Getters & Setters

    public function getCacheSize(): int
    {
        return $this->cacheSize;
    }

    public function setCacheSize(int $cacheSize): void
    {
        $this->cacheSize = $cacheSize;
    }

    public function getCacheUsage(): int
    {
        return count($this->cache, COUNT_RECURSIVE);
    }

    // endregion

    // TODO: Rename $path -> $inlinePath
    public function get(string $key, ?string $path, string $locale = null, bool $fallback = true)
    {
        if ($fallback) {
            $locale = $locale ?? $this->defaultLocale;
        }

        [$group, $fake, $item] = explode('.', $key);

        $line = $this->load($group, $fake, $item, $locale);

        if (isset($path)) {
            // TODO: Implement nested inline paths in arrays -> should work also using cache
            $line = $line[$path];
        }

        return $line ?? $key;
    }

    private function load(string $group, string $fake, string $item, string $locale)
    {
        if ($this->isCached($group, $fake, $item)) {
            return $this->cache[$group][$fake][$item];
        }

        $path = __DIR__."/Locale/{$locale}/{$group}/{$fake}/{$item}.php";

        if (file_exists($path)) {
            $data = require $path;

            $this->cache($data, $group, $fake, $item);

            return $data;
        }

        throw new RuntimeException("File does not exist at path {$path}");
    }

    private function isCached(string $group, string $fake, string $item): bool
    {
        return isset($this->cache[$group][$fake][$item]);
    }

    private function cache($data, string $group, string $fake, string $item): bool
    {
        if ((count($this->cache, COUNT_RECURSIVE) + count($data, COUNT_RECURSIVE)) < $this->cacheSize) {
            $this->cache[$group][$fake][$item] = $data;

            return true;
        }

        return false;
    }
}
