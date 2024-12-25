<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePage extends Settings
{

    public string $banner_image;
    public null|string $banner_title_ar;
    public null|string $banner_title_en;
    public null|string $banner_description_ar;
    public null|string $banner_description_en;

    public string $services_title_ar;
    public string $services_title_en;
    public string $npdat_image;
    public string $npdat_title_ar;
    public string $npdat_title_en;
    public string $npdat_main_title_ar;
    public string $npdat_main_title_en;
    public string $npdat_description_ar;
    public string $npdat_description_en;
    public string $rova_image_1;
    public string $rova_image_2;
    public string $rova_title_ar;
    public string $rova_title_en;
    public string $rova_main_title_ar;
    public string $rova_main_title_en;
    public string $rova_description_ar;
    public string $rova_description_en;
    public string $invest_image_1;
    public string $invest_image_2;
    public string $invest_title_ar;
    public string $invest_title_en;
    public string $invest_main_title_ar;
    public string $invest_main_title_en;
    public string $invest_description_ar;
    public string $invest_description_en;
    public string $invest_list_1_ar;
    public string $invest_list_1_en;
    public string $invest_list_2_ar;
    public string $invest_list_2_en;
    public string $contact_title_ar;
    public string $contact_title_en;
    public string $contact_description_ar;
    public string $contact_description_en;

    public static function group(): string
    {
        return 'home';
    }

    public function getBannerImage()
    {
        return $this->banner_image ? asset('storage/'. $this->banner_image) : asset('assets/images/home-banner.jpeg');
    }

    public function getNpdatImage()
    {
        return $this->npdat_image ? asset('storage/'. $this->npdat_image) : asset('assets/images/mobile/image\ 108.svg');
    }

    public function getRovaImage1()
    {
        return $this->rova_image_1 ? asset('storage/'. $this->rova_image_1) : asset('assets/images/brand/464850401_122207068334077567_295802762612918022_n.svg');
    }

    public function getRovaImage2()
    {
        return $this->rova_image_2 ? asset('storage/'. $this->rova_image_2) : asset('assets/images/brand/468411609_122211572018077567_3746771322806519951_n.svg');
    }

    public function getInvestImage1()
    {
        return $this->invest_image_1 ? asset('storage/'. $this->invest_image_1) : asset('assets/images/real-estate1.jpg');
    }

    public function getInvestImage2()
    {
        return $this->invest_image_2 ? asset('storage/'. $this->invest_image_2) : asset('assets/images/real-estate-img.jpg');
    }

    public function getBannerTitle()
    {
        return $this->{'banner_title_'.app()->getLocale()};
    }

    public function getBannerDescription()
    {
        return $this->{'banner_description_'.app()->getLocale()};
    }

    public function getServicesTitle()
    {
        return $this->{'services_title_'.app()->getLocale()};
    }

    public function getNpdatTitle()
    {
        return $this->{'npdat_title_'.app()->getLocale()};
    }

    public function getNpdatMainTitle()
    {
        return $this->{'npdat_main_title_'.app()->getLocale()};
    }

    public function getNpdatDescription()
    {
        return $this->{'npdat_description_'.app()->getLocale()};
    }

    public function getRovaTitle()
    {
        return $this->{'rova_title_'.app()->getLocale()};
    }

    public function getRovaMainTitle()
    {
        return $this->{'rova_main_title_'.app()->getLocale()};
    }

    public function getRovaDescription()
    {
        return $this->{'rova_description_'.app()->getLocale()};
    }

    public function getInvestTitle()
    {
        return $this->{'invest_title_'.app()->getLocale()};
    }

    public function getInvestMainTitle()
    {
        return $this->{'invest_main_title_'.app()->getLocale()};
    }

    public function getInvestDescription()
    {
        return $this->{'invest_description_'.app()->getLocale()};
    }

    public function getInvestList1()
    {
        return $this->{'invest_list_1_'.app()->getLocale()};
    }

    public function getInvestList2()
    {
        return $this->{'invest_list_2_'.app()->getLocale()};
    }

    public function getContactTitle()
    {
        return $this->{'contact_title_'.app()->getLocale()};
    }

    public function getContactDescription()
    {
        return $this->{'contact_description_'.app()->getLocale()};
    }
    
}