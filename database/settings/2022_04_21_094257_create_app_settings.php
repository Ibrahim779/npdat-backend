<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateAppSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('app.android', '#');
        $this->migrator->add('app.ios', '#');
    }
}
