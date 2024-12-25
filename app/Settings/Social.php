<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class Social extends Settings
{
    public string $twitter;
    public string $linkedin;
    public string $facebook;
    public string $instagram;
    public string $youtube;

    public static function group(): string
    {
        return 'social';
    }
}
