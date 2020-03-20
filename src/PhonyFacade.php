<?php

namespace Deligoez\Phony;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deligoez\Phony\Skeleton\SkeletonClass
 */
class PhonyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phony';
    }
}
