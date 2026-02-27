<?php

declare(strict_types=1);

namespace LaravelLang\StarterKits\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Vue extends Plugin
{
    protected ?string $vendor = 'laravel/svelte-starter-kit';

    protected bool $with_project_name = true;

    public function files(): array
    {
        return [
            'svelte/main/svelte.json'    => '{locale}.json',
            'svelte/preview/svelte.json' => '{locale}.json',
        ];
    }
}