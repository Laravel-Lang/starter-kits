<?php

declare(strict_types=1);

namespace LaravelLang\StarterKits\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Vue extends Plugin
{
    protected ?string $vendor = 'laravel/vue-starter-kit';

    protected bool $with_project_name = true;

    public function files(): array
    {
        return [
            'vue/main/vue.json'    => '{locale}.json',
            'vue/preview/vue.json' => '{locale}.json',
        ];
    }
}
