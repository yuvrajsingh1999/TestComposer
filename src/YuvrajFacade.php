<?php

namespace Test\Yuvraj;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Test\Yuvraj\Skeleton\SkeletonClass
 */
class YuvrajFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'yuvraj';
    }
}
