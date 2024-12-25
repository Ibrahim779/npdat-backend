<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\About\BannerRequest;
use App\Http\Requests\Admin\About\GoalsRequest;
use App\Http\Requests\Admin\Rova\FirstSectionRequest;
use App\Http\Requests\Admin\Rova\ProductRequest;
use App\Settings\RovaPage;
use IIsmail\FileUpload\Facades\FileUpload;

class RovaController extends Controller
{
    public function index(RovaPage $rovaSetting)
    {
        return view('dashboard.rova.index', compact('rovaSetting'));
    }

    public function updateBanner(RovaPage $rovaSetting, BannerRequest $request)
    {
        if ($request->banner_image) {
            $rovaSetting->banner_image = FileUpload::make($request->banner_image)->store('rova');
        }
        $rovaSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateGoals(RovaPage $rovaSetting, GoalsRequest $request)
    {
        if ($request->goals_first_image) {
            $rovaSetting->goals_first_image = FileUpload::make($request->goals_first_image)->store('rova');
        }
        if ($request->goals_second_image) {
            $rovaSetting->goals_second_image = FileUpload::make($request->goals_second_image)->store('rova');
        }
        $rovaSetting->goals_title_en = $request->goals_title_en;
        $rovaSetting->goals_title_ar = $request->goals_title_ar;
        $rovaSetting->goals_description_en = $request->goals_description_en;
        $rovaSetting->goals_description_ar = $request->goals_description_ar;
        $rovaSetting->goals_list_item_en = $request->goals_list_item_en;
        $rovaSetting->goals_list_item_ar = $request->goals_list_item_ar;
        $rovaSetting->goals_list_item1_en = $request->goals_list_item1_en;
        $rovaSetting->goals_list_item1_ar = $request->goals_list_item1_ar;

        $rovaSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateFirstSection(RovaPage $rovaSetting, FirstSectionRequest $request)
    {
        if ($request->first_section_image) {
            $rovaSetting->first_section_image = FileUpload::make($request->first_section_image)->store('rova');
        }
        $rovaSetting->first_section_title_en = $request->first_section_title_en;
        $rovaSetting->first_section_title_ar = $request->first_section_title_ar;
        $rovaSetting->first_section_description_en = $request->first_section_description_en;
        $rovaSetting->first_section_description_ar = $request->first_section_description_ar;

        $rovaSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateProducts(RovaPage $rovaSetting, ProductRequest $request)
    {
        $rovaSetting->products_title_en = $request->products_title_en;
        $rovaSetting->products_title_ar = $request->products_title_ar;
        $rovaSetting->products_description_en = $request->products_description_en;
        $rovaSetting->products_description_ar = $request->products_description_ar;

        $rovaSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }
}
