<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneral extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.logo', 0);
        $this->migrator->add('general.logo_2', 0);
        $this->migrator->add('general.title_ar', 'نبضات');
        $this->migrator->add('general.title_en', 'LBI');
        $this->migrator->add('general.description_ar', 'علي بعد خطوة واحده من حياة صحية افضل');
        $this->migrator->add('general.description_en', 'One step away from a healthier life');
        $this->migrator->add('general.address_ar', '8 شارع قصر النيل، وسط البلد، القاهرة');
        $this->migrator->add('general.address_en', '8 Qasr El Nil Street, Downtown, Cairo');
        $this->migrator->add('general.phone', '02 25740426');
        $this->migrator->add('general.phone_2', '02 25740426');
        $this->migrator->add('general.email', 'info@lbi.com');
        $this->migrator->add('general.copyright', 'Copyright &copy;2020 Hub Corporation.');
    }
}
