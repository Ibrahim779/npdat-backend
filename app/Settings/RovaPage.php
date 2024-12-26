<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class RovaPage extends Settings
{
    public string $banner_image;
    public string $goals_title_ar;
    public string $goals_title_en;
    public string $goals_first_image;
    public string $goals_second_image;
    public string $goals_description_ar;
    public string $goals_description_en;
    public string $goals_list_item_ar;
    public string $goals_list_item_en;
    public string $goals_list_item1_ar;
    public string $goals_list_item1_en;
    public string $products_title_ar;
    public string $products_title_en;
    public string $products_description_ar;
    public string $products_description_en;
    public string $first_section_image;
    public string $first_section_title_ar;
    public string $first_section_title_en;
    public string $first_section_description_ar;
    public string $first_section_description_en;
    

    public static function group(): string
    {
        return 'rova';
    }

    public function getFirstSectionImage()
    {
        return $this->first_section_image ? asset('storage/' . $this->first_section_image) : asset('assets/images/brand/brand-img.jpeg');
    }
    public function getFirstSectionTitle()
    {
        return $this->{'first_section_title_' . app()->getLocale()};
    }
    public function getFirstSectionDescription()
    {
        return $this->{'first_section_description_' . app()->getLocale()};
    }

    public function getGoalsTitle()
    {
        return $this->{'goals_title_' . app()->getLocale()};
    }

    public function getGoalsDescription()
    {
        return $this->{'goals_description_' . app()->getLocale()};
    }

    public function getGoalsListItem()
    {
        return $this->{'goals_list_item_' . app()->getLocale()};
    }

    public function getGoalsListItem1()
    {
        return $this->{'goals_list_item1_' . app()->getLocale()};
    }

    public function getGoalsFirstImage()
    {
        return $this->goals_first_image ? asset('storage/' . $this->goals_first_image) : asset('assets/images/brand/462685574_122204306504077567_8445288059121335041_n.svg');
    }
    public function getGoalsSecImage()
    {
        return $this->goals_second_image ? asset('storage/' . $this->goals_second_image) : asset('assets/images/brand/462445669_122203382270077567_8111457207779176232_n.svg');
    }

    public function getBannerImage()
    {
        return $this->banner_image ? asset('storage/' . $this->banner_image) : asset('assets/images/brand/brand-bg.jpeg');
    }

    public function getProductsTitle()
    {
        return $this->{'products_title_' . app()->getLocale()};
    }
    public function getProductsDescription()
    {
        return $this->{'products_description_' . app()->getLocale()};
    }
}
