<?php

declare(strict_types=1);

namespace Tavaan\Engine\Cache\Contracts;

/**
 * قرارداد CacheRepository.
 *
 * @see \Tavaan\Engine\Cache\CacheRepository
 * @api 1.0
 */
interface CacheRepositoryInterface
{
    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد put.
     *
     * @return mixed
     */
    public function put(/* ... */): mixed;

    /**
     * متد has.
     *
     * @return mixed
     */
    public function has(/* ... */): mixed;

    /**
     * متد missing.
     *
     * @return mixed
     */
    public function missing(/* ... */): mixed;

    /**
     * متد forget.
     *
     * @return mixed
     */
    public function forget(/* ... */): mixed;

    /**
     * متد flush.
     *
     * @return mixed
     */
    public function flush(/* ... */): mixed;

    /**
     * متد forever.
     *
     * @return mixed
     */
    public function forever(/* ... */): mixed;

    /**
     * متد remember.
     *
     * @return mixed
     */
    public function remember(/* ... */): mixed;

    /**
     * متد rememberForever.
     *
     * @return mixed
     */
    public function rememberForever(/* ... */): mixed;

    /**
     * متد add.
     *
     * @return mixed
     */
    public function add(/* ... */): mixed;

    /**
     * متد increment.
     *
     * @return mixed
     */
    public function increment(/* ... */): mixed;

    /**
     * متد decrement.
     *
     * @return mixed
     */
    public function decrement(/* ... */): mixed;

    /**
     * متد pull.
     *
     * @return mixed
     */
    public function pull(/* ... */): mixed;

    /**
     * متد many.
     *
     * @return mixed
     */
    public function many(/* ... */): mixed;

    /**
     * متد putMany.
     *
     * @return mixed
     */
    public function putMany(/* ... */): mixed;

    /**
     * متد lock.
     *
     * @return mixed
     */
    public function lock(/* ... */): mixed;
}