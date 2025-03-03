<?php

declare(strict_types=1);

namespace LaravelLang\StarterKits\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class React extends Plugin
{
    protected ?string $vendor = 'laravel/react-starter-kit';

    public function files(): array
    {
        return [
            'react.json' => '{locale}.json',
        ];
    }
}
