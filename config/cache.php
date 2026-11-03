<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Cache Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور cache — همهٔ کلیدهای مستندشده در `docs/03-engines/cache.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/cache.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('CACHE_DEFAULT', 'array'),

    /*| لیست درایورها */
    'drivers' => [
        'array' => [
            // پیکربندی درایور array
            'enabled' => true,
        ],
        'file' => [
            // پیکربندی درایور file
            'enabled' => true,
        ],
        'redis' => [
            // پیکربندی درایور redis
            'enabled' => true,
        ],
        'memcached' => [
            // پیکربندی درایور memcached
            'enabled' => true,
        ],
        'apcu' => [
            // پیکربندی درایور apcu
            'enabled' => true,
        ],
        'database' => [
            // پیکربندی درایور database
            'enabled' => true,
        ],
    ],

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('CACHE_PREFIX', 'cache:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('CACHE_LOG_CHANNEL', 'cache'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Cache',
        'accessor' => 'cache',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];