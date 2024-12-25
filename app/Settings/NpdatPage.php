<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class NpdatPage extends Settings
{

    public string $banner_image_1;
    public string $banner_image_2;
    public string $banner_title_ar;
    public string $banner_title_en;
    public string $banner_description_ar;
    public string $banner_description_en;
    public string $banner_link_title_ar;
    public string $banner_link_title_en;
    public string $banner_link;
    public string $banner_ios_app_link;
    public string $app_1_title_ar;
    public string $app_1_title_en;
    public string $app_1_description_ar;
    public string $app_1_description_en;
    public string $app_1_image;
    public string $app_1_link;
    public string $app_2_title_ar;
    public string $app_2_title_en;
    public string $app_2_description_ar;
    public string $app_2_description_en;
    public string $app_2_image;
    public string $app_2_link;
    public string $npdat_title_ar;
    public string $npdat_title_en;

    public string $why_npdat_title_ar;
    public string $why_npdat_title_en;

    public string $icon_1_title_ar;
    public string $icon_1_title_en;
    public string $icon_1_description_ar;
    public string $icon_1_description_en;
    public string $icon_2_title_ar;
    public string $icon_2_title_en;
    public string $icon_2_description_ar;
    public string $icon_2_description_en;
    public string $icon_3_title_ar;
    public string $icon_3_title_en;
    public string $icon_3_description_ar;
    public string $icon_3_description_en;
    public string $icon_4_title_ar;
    public string $icon_4_title_en;
    public string $icon_4_description_ar;
    public string $icon_4_description_en;

    public string $download_title_ar;
    public string $download_title_en;
    public string $download_link;

    public static function group(): string
    {
        return 'npdat';
    }

    public function getBannerImage1()
    {
        return $this->banner_image_1 ? asset('storage/'. $this->banner_image_1) : asset('assets/images/mobile/image 108.svg');
    }

    public function getBannerImage2()
    {
        return $this->banner_image_2 ? asset('storage/'. $this->banner_image_2) : asset('assets/images/mobile/image 109.svg');
    }

    public function getApp1Image()
    {
        return $this->app_1_image ? asset('storage/'. $this->app_1_image) : asset('assets/images/mobile/image 108.svg');
    }

    public function getApp2Image()
    {
        return $this->app_2_image ? asset('storage/'. $this->app_2_image) : asset('assets/images/mobile/image 109.svg');
    }

    public function getBannerTitle()
    {
        return $this->{'banner_title_'.app()->getLocale()};
    }

    public function getBannerDescription()
    {
        return $this->{'banner_description_'.app()->getLocale()};
    }

    public function getBannerLinkTitle()
    {
        return $this->{'banner_link_title_'.app()->getLocale()};
    }

    public function getApp1Title()
    {
        return $this->{'app_1_title_'.app()->getLocale()};
    }

    public function getApp1Description()
    {
        return $this->{'app_1_description_'.app()->getLocale()};
    }

    public function getApp2Title()
    {
        return $this->{'app_2_title_'.app()->getLocale()};
    }

    public function getApp2Description()
    {
        return $this->{'app_2_description_'.app()->getLocale()};
    }

    public function getNpdatTitle()
    {
        return $this->{'npdat_title_'.app()->getLocale()};
    }

    public function getWhyNpdatTitle()
    {
        return $this->{'why_npdat_title_'.app()->getLocale()};
    }

    public function getIcon1Title()
    {
        return $this->{'icon_1_title_'.app()->getLocale()};
    }

    public function getIcon1Description()
    {
        return $this->{'icon_1_description_'.app()->getLocale()};
    }

    public function getIcon2Title()
    {
        return $this->{'icon_2_title_'.app()->getLocale()};
    }

    public function getIcon2Description()
    {
        return $this->{'icon_2_description_'.app()->getLocale()};
    }

    public function getIcon3Title()
    {
        return $this->{'icon_3_title_'.app()->getLocale()};
    }

    public function getIcon3Description()
    {
        return $this->{'icon_3_description_'.app()->getLocale()};
    }

    public function getIcon4Title()
    {
        return $this->{'icon_4_title_'.app()->getLocale()};
    }

    public function getIcon4Description()
    {
        return $this->{'icon_4_description_'.app()->getLocale()};
    }

    public function getDownloadTitle()
    {
        return $this->{'download_title_'.app()->getLocale()};
    }


}