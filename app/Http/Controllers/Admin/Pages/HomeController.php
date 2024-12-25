<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Settings\HomePage;
use App\Http\Controllers\Controller;
use IIsmail\FileUpload\Facades\FileUpload;
use App\Http\Requests\Admin\Home\BannerRequest;
use App\Http\Requests\Admin\Home\ContactRequest;
use App\Http\Requests\Admin\Home\InvestRequest;
use App\Http\Requests\Admin\Home\NpdatRequest;
use App\Http\Requests\Admin\Home\RovaRequest;
use App\Http\Requests\Admin\Home\ServicesRequest;

class HomeController extends Controller
{
    public function index(HomePage $homeSetting)
    {
        return view('dashboard.home.index', compact('homeSetting'));
    }

    public function updateBanner(HomePage $homeSetting, BannerRequest $request)
    {
        if ($request->banner_image) {
            $homeSetting->banner_image = FileUpload::make($request->banner_image)->store('home');
        }
        $homeSetting->banner_title_en = $request->banner_title_en;
        $homeSetting->banner_title_ar = $request->banner_title_ar;
        $homeSetting->banner_description_en = $request->banner_description_en;
        $homeSetting->banner_description_ar = $request->banner_description_ar;

        $homeSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateNpdat(HomePage $homeSetting, NpdatRequest $request)
    {
        if ($request->npdat_image) {
            $homeSetting->npdat_image = FileUpload::make($request->npdat_image)->store('home');
        }
        $homeSetting->npdat_title_en = $request->npdat_title_en;
        $homeSetting->npdat_title_ar = $request->npdat_title_ar;
        $homeSetting->npdat_main_title_en = $request->npdat_main_title_en;
        $homeSetting->npdat_main_title_ar = $request->npdat_main_title_ar;
        $homeSetting->npdat_description_en = $request->npdat_description_en;
        $homeSetting->npdat_description_ar = $request->npdat_description_ar;

        $homeSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateRova(HomePage $homeSetting, RovaRequest $request)
    {
        if ($request->rova_image_1) {
            $homeSetting->rova_image_1 = FileUpload::make($request->rova_image_1)->store('home');
        }
        if ($request->rova_image_2) {
            $homeSetting->rova_image_2 = FileUpload::make($request->rova_image_2)->store('home');
        }

        $homeSetting->rova_title_en = $request->rova_title_en;
        $homeSetting->rova_title_ar = $request->rova_title_ar;
        $homeSetting->rova_main_title_en = $request->rova_main_title_en;
        $homeSetting->rova_main_title_ar = $request->rova_main_title_ar;
        $homeSetting->rova_description_en = $request->rova_description_en;
        $homeSetting->rova_description_ar = $request->rova_description_ar;

        $homeSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateInvest(HomePage $homeSetting, InvestRequest $request)
    {
        if ($request->invest_image_1) {
            $homeSetting->invest_image_1 = FileUpload::make($request->invest_image_1)->store('home');
        }
        if ($request->invest_image_2) {
            $homeSetting->invest_image_2 = FileUpload::make($request->invest_image_2)->store('home');
        }

        $homeSetting->invest_title_en = $request->invest_title_en;
        $homeSetting->invest_title_ar = $request->invest_title_ar;
        $homeSetting->invest_main_title_en = $request->invest_main_title_en;
        $homeSetting->invest_main_title_ar = $request->invest_main_title_ar;
        $homeSetting->invest_description_en = $request->invest_description_en;
        $homeSetting->invest_description_ar = $request->invest_description_ar;
        $homeSetting->invest_list_en_1 = $request->invest_list_en_1;
        $homeSetting->invest_list_ar_1 = $request->invest_list_ar_1;
        $homeSetting->invest_list_en_2 = $request->invest_list_en_2;
        $homeSetting->invest_list_ar_2 = $request->invest_list_ar_2;

        $homeSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateContact(HomePage $homeSetting, ContactRequest $request)
    {
        $homeSetting->contact_title_en = $request->contact_title_en;
        $homeSetting->contact_title_ar = $request->contact_title_ar;
        $homeSetting->contact_description_en = $request->contact_description_en;
        $homeSetting->contact_description_ar = $request->contact_description_ar;

        $homeSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }

    public function updateServices(HomePage $homeSetting, ServicesRequest $request)
    {
        $homeSetting->services_title_en = $request->services_title_en;
        $homeSetting->services_title_ar = $request->services_title_ar;

        $homeSetting->save();

        toast(trans('main.updated'), 'success');
        return redirect()->back();
    }
}
