<?php

declare(strict_types=1);

namespace LaravelLang\StarterKits\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Vue extends Plugin
{
    protected ?string $vendor = 'laravel/vue-starter-kit';

    public function files(): array
    {
        return [
            'vue/main/vue.json' => '{locale}.json',
        ];
    }
}
