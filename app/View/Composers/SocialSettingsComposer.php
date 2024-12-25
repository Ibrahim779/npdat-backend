<?php

namespace App\View\Composers;

use App\Settings\Social;
use Illuminate\View\View;

class SocialSettingsComposer
{
   /**
    * Bind data to the view.
    *
    * @param  \Illuminate\View\View  $view
    * @return void
    */
   public function compose(View $view)
   {
      $social_settings = new Social();

      $view->with('social_settings', $social_settings);
   }
}
