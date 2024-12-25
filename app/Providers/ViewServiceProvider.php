<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\View\Composers\FooterComposer;
use App\View\Composers\HeaderComposer;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\SocialSettingsComposer;
use App\View\Composers\GeneralSettingsComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('website.layout.header', HeaderComposer::class);
        View::composer('website.layout.footer', FooterComposer::class);
        View::composer([
            'website.layout.head',
            'website.layout.header', 
            'website.layout.footer', 
            'website.contacts.index', 
            'website.home.about', 
            'website.home.contact-us',
            'dashboard.layout.head',
            'dashboard.layout.aside',
            'dashboard.auth.login',
        ], GeneralSettingsComposer::class);
        View::composer('website.layout.footer', SocialSettingsComposer::class);
    }
}
