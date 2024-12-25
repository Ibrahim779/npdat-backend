<?php

namespace App\View\Composers;

use App\Settings\General;
use Illuminate\View\View;

class GeneralSettingsComposer
{
   /**
    * Bind data to the view.
    *
    * @param  \Illuminate\View\View  $view
    * @return void
    */
   public function compose(View $view)
   {
      $general_settings = new General();

      $view->with('general_settings', $general_settings);
   }
}
