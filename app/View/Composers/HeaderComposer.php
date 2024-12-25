<?php

namespace App\View\Composers;

use App\Models\Page;
use Illuminate\View\View;

class HeaderComposer
{
   /**
    * Bind data to the view.
    *
    * @param  \Illuminate\View\View  $view
    * @return void
    */
   public function compose(View $view)
   {
      $header_pages = Page::whereIn('position', [Page::HEADER, Page::BOTH])->active()->get();

      $view->with('header_pages', $header_pages);
   }
}
