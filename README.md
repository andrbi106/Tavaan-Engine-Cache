# Tavaan Engine — Cache

> **حافظه نهان** — موتور Cache در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.cache` |
| نام | `Cache` |
| عنوان فارسی | حافظه نهان |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Cache` |
| نوع | `engine` |
| Facade | `Cache` (accessor: `cache`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Cache\Contracts\LockInterface`
- `Tavaan\Engine\Cache\Contracts\LockProviderInterface`
- `Tavaan\Engine\Cache\Contracts\RepositoryInterface`
- `Tavaan\Engine\Cache\Contracts\StoreInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Cache\Exceptions\LockTimeoutException`

## Facadeها

- `Tavaan\Engine\Cache\Facades\Cache`

## کلاس‌های اصلی

- `src/CacheManager.php`
- `src/CacheRepository.php`
- `src/CacheServiceProvider.php`
- `src/Console/CacheClearCommand.php`
- `src/Locks/CacheLock.php`
- `src/Stores/ApcuStore.php`
- `src/Stores/ArrayStore.php`
- `src/Stores/DatabaseStore.php`
- `src/Stores/FileStore.php`
- `src/Stores/MemcachedStore.php`
- `src/Stores/RedisStore.php`
- `src/TaggedCache.php`

## Service Providerها

- `Tavaan\Engine\Cache\CacheServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `event`

## دستورات CLI

- `cache:clear`

## پیکربندی

- فایل پیکربندی: `config/cache.php`
- کلید: `cache`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Cache.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Cache`** (این مخزن) | موتور Cache |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
