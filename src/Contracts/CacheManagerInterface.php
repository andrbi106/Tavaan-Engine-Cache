<?php

declare(strict_types=1);

namespace Tavaan\Engine\Cache\Contracts;

/**
 * قرارداد CacheManager.
 *
 * @see \Tavaan\Engine\Cache\CacheManager
 * @api 1.0
 */
interface CacheManagerInterface
{
    /**
     * متد store.
     *
     * @return mixed
     */
    public function store(/* ... */): mixed;

    /**
     * متد driver.
     *
     * @return mixed
     */
    public function driver(/* ... */): mixed;

    /**
     * متد extend.
     *
     * @return mixed
     */
    public function extend(/* ... */): mixed;

    /**
     * متد tags.
     *
     * @return mixed
     */
    public function tags(/* ... */): mixed;

    /**
     * متد lock.
     *
     * @return mixed
     */
    public function lock(/* ... */): mixed;

    /**
     * متد getDefaultDriver.
     *
     * @return mixed
     */
    public function getDefaultDriver(/* ... */): mixed;
}