<?php

namespace App\View\Composers;

use App\Models\Page;
use Illuminate\View\View;

class FooterComposer
{
   /**
    * Bind data to the view.
    *
    * @param  \Illuminate\View\View  $view
    * @return void
    */
   public function compose(View $view)
   {
      $footer_pages = Page::whereIn('position', [Page::FOOTER, Page::BOTH])->active()->get();

      $view->with('footer_pages', $footer_pages);
   }
} 
