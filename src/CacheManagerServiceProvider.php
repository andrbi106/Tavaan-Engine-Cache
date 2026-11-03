<?php

declare(strict_types=1);

namespace Tavaan\Engine\Cache;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Cache\Contracts\CacheManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * CacheManagerServiceProvider — ثبت سرویس‌های موتور CacheManager.
 */
final class CacheManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(CacheManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new CacheManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('cache', $this->app->get(CacheManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Cache\Console\Cache_clearCommand::class;

        // ثبت درایورها (در صورت نیاز)
        // درایورها به‌صورت lazy در زمان استفاده ساخته می‌شوند.

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            CacheManagerInterface::class,
            'cache',
        ];
    }
}