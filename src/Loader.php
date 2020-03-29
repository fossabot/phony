<?php

namespace Deligoez\Phony;

use RuntimeException;

class Loader
{
    protected string $locale;
    protected string $fallback;

    public function __construct(string $locale)
    {
        $this->locale = $locale;
    }

    public function get(string $key, ?string $path, string $locale = null, bool $fallback = true)
    {
        // TODO: Rename variable names
        // TODO: Implement fallback mechanism
        $locale = $locale ?? $this->locale;

        [$group, $item] = explode('.', $key);

        $line = $this->getLine($group, $item, $locale);

        if (isset($path)) {
            $line = $this->getPath($line, $path);
        }

        return $line ?? $key;
    }

    protected function getPath($line, string $path)
    {
        // TODO: Implement nested paths
        return $line[$path];
    }

    protected function getLine(string $group, string $item, string $locale)
    {
        return $this->load($group, $item, $locale);
    }

    public function load(string $group, string $item, string $locale)
    {
        // TODO: Check if already loaded

        $path = __DIR__."/Locales/{$locale}/{$group}/{$item}.php";

        if (file_exists($path)) {
            return require $path;
        }

        throw new RuntimeException("File does not exist at path {$path}");
    }
}
