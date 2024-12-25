<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\AppRequest;
use App\Http\Requests\Admin\Setting\GeneralRequest;
use App\Http\Requests\Admin\Setting\SocialRequest;
use App\Settings\App;
use App\Settings\General;
use App\Settings\Social;
use Illuminate\Http\Request;
use IIsmail\FileUpload\Facades\FileUpload;

class SettingController extends Controller
{
    public function index(General $generalSettings, Social $social, App $app)
    {
        return view('dashboard.settings.index', compact('generalSettings', 'social', 'app'));
    }

    public function updateGeneral(General $generalSettings, GeneralRequest $request)
    {
        if ($request->logo) {
            $generalSettings->logo = FileUpload::make($request->logo)->store('settings');
        }
        if ($request->logo_2) {
            $generalSettings->logo_2 = FileUpload::make($request->logo_2)->store('settings');
        }
        $generalSettings->title_en = $request->title_en;
        $generalSettings->title_ar = $request->title_ar;
        $generalSettings->description_en = $request->description_en;
        $generalSettings->description_ar = $request->description_ar;
        $generalSettings->address_en = $request->address_en;
        $generalSettings->address_ar = $request->address_ar;
        $generalSettings->phone = $request->phone;
        $generalSettings->phone = $request->phone_2;
        $generalSettings->email = $request->email;
        $generalSettings->copyright = $request->copyright;

        $generalSettings->save();

        toast(trans('main.website_setting_updated'), 'success');
        return redirect()->back();
    }

    public function updateSocial(Social $social, SocialRequest $request)
    {
        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;

        $social->save();

        toast(trans('main.socialmedia_updated'), 'success');
        return redirect()->back();
    }

    public function updateAppLinks(App $app, AppRequest $request)
    {
        $app->android = $request->android;
        $app->ios = $request->ios;
        $app->save();
        toast(trans('main.app_links_updated'), 'success');
        return back();
    }
}
