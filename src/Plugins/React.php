<?php

declare(strict_types=1);

namespace LaravelLang\StarterKits\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class React extends Plugin
{
    protected ?string $vendor = 'laravel/react-starter-kit';

    protected bool $with_project_name = true;

    public function files(): array
    {
        return [
            'react/main/react.json'    => '{locale}.json',
            'react/preview/react.json' => '{locale}.json',
        ];
    }
}
