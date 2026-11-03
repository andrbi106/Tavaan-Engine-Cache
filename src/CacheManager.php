<?php

declare(strict_types=1);

namespace Tavaan\Engine\Cache;

use Tavaan\Engine\Cache\Contracts\RepositoryInterface;

/**
 * CacheManager — مدیریت چندین store.
 */
final class CacheManager
{
    /**
     * @param array<string, mixed> $config
     */
    public function __construct(
        private readonly array $config = [],
    ) {
    }

    public function repository(): CacheRepository
    {
        return new CacheRepository($this->config);
    }

    public function store(?string $name = null): RepositoryInterface
    {
        return $this->repository()->store($name);
    }

    public function lock(string $name, int $ttl = 30, ?string $owner = null): Locks\CacheLock
    {
        return new Locks\CacheLock($name, $ttl, $owner);
    }

    /**
     * driver
     */
    public function driver(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * extend
     */
    public function extend(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
    /**
     * getDefaultDriver
     */
    public function getDefaultDriver(/* ... */): mixed
    {
        return \$this->config['default'] ?? 'array';
    }
    /**
     * tags
     */
    public function tags(/* ... */): mixed
    {
        // TODO: Implement per docs.
        return null;
    }
}
