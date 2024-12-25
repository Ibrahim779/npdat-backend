<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AboutPage extends Settings
{
    public string $banner_image;
    public string $goals_title_ar;
    public string $goals_title_en;
    public string $goals_image;
    public string $vision_title_ar;
    public string $vision_title_en;
    public string $vision_description_ar;
    public string $vision_description_en;
    public string $mission_title_ar;
    public string $mission_title_en;
    public string $mission_description_ar;
    public string $mission_description_en;
    public string $team_title_ar;
    public string $team_title_en;
    public string $team_description_ar;
    public string $team_description_en;
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
    public int $counter_1_num;
    public string $counter_1_title_ar;
    public string $counter_1_title_en;
    public int $counter_2_num;
    public string $counter_2_title_ar;
    public string $counter_2_title_en;
    public int $counter_3_num;
    public string $counter_3_title_ar;
    public string $counter_3_title_en;
    public int $counter_4_num;
    public string $counter_4_title_ar;
    public string $counter_4_title_en;
    public string $ceo_image;
    public string $ceo_title_ar;
    public string $ceo_title_en;
    public string $ceo_main_title_ar;
    public string $ceo_main_title_en;
    public string $ceo_name_ar;
    public string $ceo_name_en;
    public string $ceo_word_ar;
    public string $ceo_word_en;
    public string $help_text_ar;
    public string $help_text_en;
    public string $partner_title_ar;
    public string $partner_title_en;

    public static function group(): string
    {
        return 'about';
    }

    public function getBannerImage()
    {
        return $this->banner_image ? asset('storage/'. $this->banner_image) : asset('assets/images/about-banner.jpeg');
    }

    public function getGoalsImage()
    {
        return $this->goals_image ? asset('storage/'. $this->goals_image) : asset('assets/images/about-us/Dr Profile _ Aboout Doctor.svg');
    }

    public function getCeoImage()
    {
        return $this->ceo_image ? asset('storage/'. $this->ceo_image) : asset('assets/images/CEO-img.jpeg');
    }

    public function getGoalsTitle()
    {
        return $this->{'goals_title_'.app()->getLocale()};
    }

    public function getVisionTitle()
    {
        return $this->{'vision_title_'.app()->getLocale()};
    }

    public function getVisionDescription()
    {
        return $this->{'vision_description_'.app()->getLocale()};
    }

    public function getMissionTitle()
    {
        return $this->{'mission_title_'.app()->getLocale()};
    }

    public function getMissionDescription()
    {
        return $this->{'mission_description_'.app()->getLocale()};
    }

    public function getTeamTitle()
    {
        return $this->{'team_title_'.app()->getLocale()};
    }

    public function getTeamDescription()
    {
        return $this->{'team_description_'.app()->getLocale()};
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

    public function getCounter1Title()
    {
        return $this->{'counter_1_title_'.app()->getLocale()};
    }

    public function getCounter2Title()
    {
        return $this->{'counter_2_title_'.app()->getLocale()};
    }

    public function getCounter3Title()
    {
        return $this->{'counter_3_title_'.app()->getLocale()};
    }

    public function getCounter4Title()
    {
        return $this->{'counter_4_title_'.app()->getLocale()};
    }

    public function getCeoTitle()
    {
        return $this->{'ceo_title_'.app()->getLocale()};
    }

    public function getCeoMainTitle()
    {
        return $this->{'ceo_main_title_'.app()->getLocale()};
    }

    public function getCeoName()
    {
        return $this->{'ceo_name_'.app()->getLocale()};
    }   

    public function getCeoWord()
    {
        return $this->{'ceo_word_'.app()->getLocale()};
    }

    public function getHelpText()
    {
        return $this->{'help_text_'.app()->getLocale()};
    }

    public function getPartnerTitle()
    {
        return $this->{'partner_title_'.app()->getLocale()};
    }

}