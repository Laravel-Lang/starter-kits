<?php

declare(strict_types=1);

namespace LaravelLang\StarterKits\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Livewire extends Plugin
{
    protected ?string $vendor = 'laravel/livewire-starter-kit';

    protected bool $with_project_name = true;

    public function files(): array
    {
        return [
            'livewire/main/livewire.json'       => '{locale}.json',
            'livewire/components/livewire.json' => '{locale}.json',
            'livewire/preview/livewire.json'    => '{locale}.json',
            'livewire/workos/livewire.json'     => '{locale}.json',
        ];
    }
}
