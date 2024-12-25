<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Settings\AboutPage;
use App\Http\Controllers\Controller;
use IIsmail\FileUpload\Facades\FileUpload;
use App\Http\Requests\Admin\About\BannerRequest;
use App\Http\Requests\Admin\About\GoalsRequest;
use App\Http\Requests\Admin\About\IconsRequest;
use App\Http\Requests\Admin\About\CountersRequest;
use App\Http\Requests\Admin\About\CeoRequest;
use App\Http\Requests\Admin\About\PartnerTitleRequest;

class AboutController extends Controller
{
    public function index(AboutPage $aboutSetting)
    {
        return view('dashboard.about.index', compact('aboutSetting'));
    }

    public function updateBanner(AboutPage $aboutSetting, BannerRequest $request)
    {
        if ($request->banner_image) {
            $aboutSetting->banner_image = FileUpload::make($request->banner_image)->store('about');
        }

        $aboutSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateGoals(AboutPage $aboutSetting, GoalsRequest $request)
    {
        if ($request->goals_image) {
            $aboutSetting->goals_image = FileUpload::make($request->goals_image)->store('about');
        }
        $aboutSetting->goals_title_en = $request->goals_title_en;
        $aboutSetting->goals_title_ar = $request->goals_title_ar;
        $aboutSetting->vision_title_en = $request->vision_title_en;
        $aboutSetting->vision_title_ar = $request->vision_title_ar;
        $aboutSetting->vision_description_en = $request->vision_description_en;
        $aboutSetting->vision_description_ar = $request->vision_description_ar;
        $aboutSetting->mission_title_en = $request->mission_title_en;
        $aboutSetting->mission_title_ar = $request->mission_title_ar;
        $aboutSetting->mission_description_en = $request->mission_description_en;
        $aboutSetting->mission_description_ar = $request->mission_description_ar;
        $aboutSetting->team_title_en = $request->team_title_en;
        $aboutSetting->team_title_ar = $request->team_title_ar;
        $aboutSetting->team_description_en = $request->team_description_en;
        $aboutSetting->team_description_ar = $request->team_description_ar;

        $aboutSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateIcons(AboutPage $aboutSetting, IconsRequest $request)
    {
        $aboutSetting->icon_1_title_en = $request->icon_1_title_en;
        $aboutSetting->icon_1_title_ar = $request->icon_1_title_ar;
        $aboutSetting->icon_1_description_en = $request->icon_1_description_en;
        $aboutSetting->icon_1_description_ar = $request->icon_1_description_ar;

        $aboutSetting->icon_2_title_en = $request->icon_2_title_en;
        $aboutSetting->icon_2_title_ar = $request->icon_2_title_ar;
        $aboutSetting->icon_2_description_en = $request->icon_2_description_en;
        $aboutSetting->icon_2_description_ar = $request->icon_2_description_ar;

        $aboutSetting->icon_3_title_en = $request->icon_3_title_en;
        $aboutSetting->icon_3_title_ar = $request->icon_3_title_ar;
        $aboutSetting->icon_3_description_en = $request->icon_3_description_en;
        $aboutSetting->icon_3_description_ar = $request->icon_3_description_ar;

        $aboutSetting->icon_4_title_en = $request->icon_4_title_en;
        $aboutSetting->icon_4_title_ar = $request->icon_4_title_ar;
        $aboutSetting->icon_4_description_en = $request->icon_4_description_en;
        $aboutSetting->icon_4_description_ar = $request->icon_4_description_ar;

        $aboutSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateCounters(AboutPage $aboutSetting, CountersRequest $request)
    {
        $aboutSetting->counter_1_num = $request->counter_1_num;
        $aboutSetting->counter_1_title_en = $request->counter_1_title_en;
        $aboutSetting->counter_1_title_ar = $request->counter_1_title_ar;

        $aboutSetting->counter_2_num = $request->counter_2_num;
        $aboutSetting->counter_2_title_en = $request->counter_2_title_en;
        $aboutSetting->counter_2_title_ar = $request->counter_2_title_ar;

        $aboutSetting->counter_3_num = $request->counter_3_num;
        $aboutSetting->counter_3_title_en = $request->counter_3_title_en;
        $aboutSetting->counter_3_title_ar = $request->counter_3_title_ar;

        $aboutSetting->counter_4_num = $request->counter_4_num;
        $aboutSetting->counter_4_title_en = $request->counter_4_title_en;
        $aboutSetting->counter_4_title_ar = $request->counter_4_title_ar;

        $aboutSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateCeo(AboutPage $aboutSetting, CeoRequest $request)
    {
        if ($request->ceo_image) {
            $aboutSetting->ceo_image = FileUpload::make($request->ceo_image)->store('about');
        }

        $aboutSetting->ceo_title_en = $request->ceo_title_en;
        $aboutSetting->ceo_title_ar = $request->ceo_title_ar;
        $aboutSetting->ceo_main_title_en = $request->ceo_main_title_en;
        $aboutSetting->ceo_main_title_ar = $request->ceo_main_title_ar;
        $aboutSetting->ceo_name_en = $request->ceo_name_en;
        $aboutSetting->ceo_name_ar = $request->ceo_name_ar;
        $aboutSetting->ceo_word_en = $request->ceo_word_en;
        $aboutSetting->ceo_word_ar = $request->ceo_word_ar;

        $aboutSetting->ceo_help_text_en = $request->ceo_help_text_en;
        $aboutSetting->ceo_help_text_ar = $request->ceo_help_text_ar;

        $aboutSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updatePartnerTitle(AboutPage $aboutSetting, PartnerTitleRequest $request)
    {
        $aboutSetting->partner_title_en = $request->partner_title_en;
        $aboutSetting->partner_title_ar = $request->partner_title_ar;

        $aboutSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }
}
