<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class App extends Settings
{
    public string $android;
    public string $ios;

    public static function group(): string
    {
        return 'app';
    }
}
