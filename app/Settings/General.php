<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class General extends Settings
{
    public string $logo;
    public null|string $logo_2;
    public string $title_en;
    public string $title_ar;
    public string $description_en;
    public string $description_ar;
    public null|string $address_en;
    public null|string $address_ar;
    public null|string $phone;
    public null|string $phone_2;
    public null|string $email;
    public null|string $copyright;

    public static function group(): string
    {
        return 'general';
    }

    public function getLogo()
    {
        return $this->logo ? asset('storage/'. $this->logo) : asset('assets/images/LBI LOGO (1).svg');
    }

    public function getLogo2()
    {
        return $this->logo_2 ? asset('storage/'. $this->logo_2) : asset('assets/images/LBI LOGO (1).svg');
    }

    public function getAddress()
    {
        return $this->{'address_'. app()->getLocale()};
    }

    public function getTitle()
    {
        return $this->{'title_'. app()->getLocale()};
    }

    public function getDescription()
    {
        return $this->{'description_'. app()->getLocale()};
    }
    
}
