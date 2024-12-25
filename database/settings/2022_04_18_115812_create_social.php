<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateSocial extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('social.twitter', '#');
        $this->migrator->add('social.linkedin', '#');
        $this->migrator->add('social.facebook', '#');
        $this->migrator->add('social.youtube', '#');
        $this->migrator->add('social.instagram', '#');
    }
}
