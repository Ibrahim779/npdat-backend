<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Settings\NpdatPage;
use App\Http\Controllers\Controller;
use IIsmail\FileUpload\Facades\FileUpload;
use App\Http\Requests\Admin\Npdat\App1Request;
use App\Http\Requests\Admin\Npdat\App2Request;
use App\Http\Requests\Admin\Npdat\IconsRequest;
use App\Http\Requests\Admin\Npdat\BannerRequest;
use App\Http\Requests\Admin\Npdat\DownloadRequest;
use App\Http\Requests\Admin\Npdat\NpdatTitleRequest;

class NpdatController extends Controller
{
    public function index(NpdatPage $npdatSetting)
    {
        return view('dashboard.npdat.index', compact('npdatSetting'));
    }

    public function updateBanner(NpdatPage $npdatSetting, BannerRequest $request)
    {
        if ($request->banner_image_1) {
            $npdatSetting->banner_image_1 = FileUpload::make($request->banner_image_1)->store('npdat');
        }
        if ($request->banner_image_2) {
            $npdatSetting->banner_image_2 = FileUpload::make($request->banner_image_2)->store('npdat');
        }

        $npdatSetting->banner_title_en = $request->banner_title_en;
        $npdatSetting->banner_title_ar = $request->banner_title_ar;

        $npdatSetting->banner_description_en = $request->banner_description_en;
        $npdatSetting->banner_description_ar = $request->banner_description_ar;

        $npdatSetting->banner_link_title_ar = $request->banner_link_title_ar;
        $npdatSetting->banner_link_title_en = $request->banner_link_title_en;

        $npdatSetting->banner_link = $request->banner_link;
        $npdatSetting->banner_ios_app_link = $request->banner_ios_app_link;

        $npdatSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateApp1(NpdatPage $npdatSetting, App1Request $request)
    {
        if ($request->app_1_image) {
            $npdatSetting->app_1_image = FileUpload::make($request->app_1_image)->store('npdat');
        }
        $npdatSetting->app_1_title_en = $request->app_1_title_en;
        $npdatSetting->app_1_title_ar = $request->app_1_title_ar;
        $npdatSetting->app_1_description_en = $request->app_1_description_en;
        $npdatSetting->app_1_description_ar = $request->app_1_description_ar;
        $npdatSetting->app_1_link = $request->app_1_link;

        $npdatSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateApp2(NpdatPage $npdatSetting, App2Request $request)
    {
        if ($request->app_2_image) {
            $npdatSetting->app_2_image = FileUpload::make($request->app_2_image)->store('npdat');
        }
        $npdatSetting->app_2_title_en = $request->app_2_title_en;
        $npdatSetting->app_2_title_ar = $request->app_2_title_ar;
        $npdatSetting->app_2_description_en = $request->app_2_description_en;
        $npdatSetting->app_2_description_ar = $request->app_2_description_ar;
        $npdatSetting->app_2_link = $request->app_2_link;

        $npdatSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateIcons(NpdatPage $npdatSetting, IconsRequest $request)
    {
        $npdatSetting->why_npdat_title_en = $request->why_npdat_title_en;
        $npdatSetting->why_npdat_title_ar = $request->why_npdat_title_ar;

        $npdatSetting->icon_1_title_en = $request->icon_1_title_en;
        $npdatSetting->icon_1_title_ar = $request->icon_1_title_ar;
        $npdatSetting->icon_1_description_en = $request->icon_1_description_en;
        $npdatSetting->icon_1_description_ar = $request->icon_1_description_ar;

        $npdatSetting->icon_2_title_en = $request->icon_2_title_en;
        $npdatSetting->icon_2_title_ar = $request->icon_2_title_ar;
        $npdatSetting->icon_2_description_en = $request->icon_2_description_en;
        $npdatSetting->icon_2_description_ar = $request->icon_2_description_ar;

        $npdatSetting->icon_3_title_en = $request->icon_3_title_en;
        $npdatSetting->icon_3_title_ar = $request->icon_3_title_ar;
        $npdatSetting->icon_3_description_en = $request->icon_3_description_en;
        $npdatSetting->icon_3_description_ar = $request->icon_3_description_ar;

        $npdatSetting->icon_4_title_en = $request->icon_4_title_en;
        $npdatSetting->icon_4_title_ar = $request->icon_4_title_ar;
        $npdatSetting->icon_4_description_en = $request->icon_4_description_en;
        $npdatSetting->icon_4_description_ar = $request->icon_4_description_ar;

        $npdatSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateDownload(NpdatPage $npdatSetting, DownloadRequest $request)
    {
        $npdatSetting->download_link = $request->download_link;
        $npdatSetting->download_title_en = $request->download_title_en;
        $npdatSetting->download_title_ar = $request->download_title_ar;

        $npdatSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateNpdatTitle(NpdatPage $npdatSetting, NpdatTitleRequest $request)
    {
        $npdatSetting->npdat_title_en = $request->npdat_title_en;
        $npdatSetting->npdat_title_ar = $request->npdat_title_ar;

        $npdatSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }
}
