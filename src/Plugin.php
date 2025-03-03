<?php

declare(strict_types=1);

namespace LaravelLang\StarterKits;

use LaravelLang\Publisher\Plugins\Provider;
use LaravelLang\StarterKits\Plugins\Livewire;
use LaravelLang\StarterKits\Plugins\React;
use LaravelLang\StarterKits\Plugins\Vue;

class Plugin extends Provider
{
    protected ?string $package_name = 'laravel-lang/starter-kits';

    protected string $base_path = __DIR__ . '/../';

    protected array $plugins = [
        Livewire::class,
        React::class,
        Vue::class,
    ];
}
