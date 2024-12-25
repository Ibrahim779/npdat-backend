<!DOCTYPE html>
<html lang="en">
@include('website.layout.head')

<body
    data-mobile-nav-breakpoint="1199"
    data-mobile-nav-style="classic"
    data-mobile-nav-scheme="gray"
    data-mobile-nav-trigger-alignment="right"
    data-mobile-header-scheme="gray"
    data-mobile-secondary-bar="false"
    data-mobile-logo-alignment="center"
    dir="rtl"
  >
  <div id="wrap">

    @include('website.layout.header')

    <div class="lqd-back-to-top fixed" data-back-to-top="true">
        <a
          href="#wrap"
          class="inline-flex items-center justify-center rounded-full text-18"
          data-localscroll="true"
        >
          <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
        </a>
    </div>

    <main class="contact z-2 transition-all bg-white" id="lqd-site-content">
        <div id="lqd-contents-wrap">
        @yield('content')
        </div>
    </main>
      
    @include('website.layout.footer')

  </div>

    @include('website.layout.script')
</body>

</html>
