<?php

declare(strict_types=1);

namespace Tavaan\Engine\Cache\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * cache:clear command.
 */
final class CacheClearCommand implements CommandInterface
{
    public function name(): string
    {
        return 'cache:clear';
    }

    public function description(): string
    {
        return 'Run cache:clear (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
