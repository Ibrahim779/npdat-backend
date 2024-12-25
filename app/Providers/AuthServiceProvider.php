<?php

namespace App\Providers;

use App\Models\AboutImage;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Question;
use App\Models\Quote;
use App\Models\RovaProduct;
use App\Models\RovaReview;
use App\Models\Service;
use App\Models\WeOffer;
use App\Policies\AboutImagePolicy;
use App\Policies\RolePolicy;
use App\Policies\AdminPolicy;
use App\Policies\ContactPolicy;
use App\Policies\PagePolicy;
use App\Policies\PartnerPolicy;
use App\Policies\QuestionPolicy;
use App\Policies\QuotePolicy;
use App\Policies\RovaProductPolicy;
use App\Policies\RovaReviewPolicy;
use App\Policies\ServicePolicy;
use App\Policies\WeOfferPolicy;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Admin::class => AdminPolicy::class,
        Role::class => RolePolicy::class,
        Page::class => PagePolicy::class,
        Contact::class => ContactPolicy::class,
        Question::class => QuestionPolicy::class,
        Partner::class => PartnerPolicy::class,
        Service::class => ServicePolicy::class,
        RovaProduct::class => RovaProductPolicy::class,
        RovaReview::class => RovaReviewPolicy::class,
        Quote::class => QuotePolicy::class,
        WeOffer::class => WeOfferPolicy::class,
        AboutImage::class => AboutImagePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
