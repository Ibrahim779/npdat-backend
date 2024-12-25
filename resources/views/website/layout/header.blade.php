
<header
        id="site-header"
        class="main-header"
        data-sticky-header="true"
        data-sticky-values-measured="false"
      >
        <div class="lqd-head-sec-wrap relative shadow-sm md:hidden">
          <div
            class="lqd-head-sec container flex items-stretch justify-between p-0"
          >
            <div class="col col-auto lqd-head-col justify-start">
              <div
                class="header-module module-logo no-rotate navbar-brand-plain py-10"
              >
                <a class="navbar-brand" href="{{route('home')}}" rel="home">
                  <span class="navbar-brand-inner">
                    <img
                      class="max-w-full h-auto vertical-top rounded-inherit"
                      src="{{$general_settings->getLogo()}}"
                      alt="Hub Theme"
                      style="width: 150px; height: 70px; object-fit: cover"
                    />
                  </span>
                </a>
              </div>
            </div>
            <div class="col lqd-head-col justify-end">
              <div
                class="header-module module-primary-nav pos-stc items-stretch"
              >
                <div
                  class="navbar-collapse lqd-submenu-default-style inline-flex flex-col items-stretch flex-basic-0 h-full"
                  id="main-header-collapse"
                  aria-expanded="false"
                  role="navigation"
                >
                  <ul
                    id="primary-nav"
                    class="main-nav lqd-menu-counter-right main-nav-hover-underline-1 items-stretch justify-end flex reset-ul link-14 link-black"
                    data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}'
                    data-localscroll="true"
                    data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "offset": 65}'
                  >
                    <li class="is-active">
                      <a href="{{route('home')}}"> {{ __('web.home') }} </a>
                    </li>
                    <li>
                      <a href="{{route('about.index')}}"> من نحن </a>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="{{route('services.index')}}">
                        خدماتنا
                        <span class="link-icon right-icon">
                          <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                        </span>
                      </a>

                      <ul class="nav-item-children">
                        <li class="menu-item-has-children">
                          <a href="{{route('npdat.index')}}"> نبضات </a>
                        </li>
                        <li>
                          <a href="{{route('rova.index')}}"> رووفا </a>
                        </li>
                        <li>
                          <a href="{{route('invest.index')}}">الاستثمار العقاري</a>
                        </li>
                        <li class="is-active">
                          <a href="/agrarian-reform.html">الاستصلاح الزراعي</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{route('careers.index')}}">الوظائف</a>
                    </li>
                    <li>
                      <a href="{{route('contact.index')}}"> تواصل معنا </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- 
          <div class="header-module module-button py-10 ml-25">
            <a
              href="#header-contact-modal"
              class="btn btn-get-touch font-bold btn-solid text-white bg-primary uppercase border-none text-11 leading-1/5em tracking-0/1em rounded-4"
              data-lity="#header-contact-modal"
            >
              <span class="inline-flex py-0/85em px-1/5em">
                <span class="btn-txt" data-text="Get in Touch"
                  >Get in Touch</span
                >
              </span>
            </a>
          </div> -->
            </div>
          </div>
        </div>
        <div class="lqd-mobile-sec">
          <div class="lqd-mobile-sec-inner navbar-header flex items-stretch">
            <div class="lqd-mobile-modules-container"></div>
            <button
              type="button"
              class="navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end border-none bg-transparent text-black p-0"
              data-ld-toggle="true"
              data-bs-toggle="collapse"
              data-bs-target="#lqd-mobile-sec-nav"
              aria-expanded="false"
              data-bs-toggle-options='{"changeClassnames":  {"html": "mobile-nav-activated"} }'
            >
              <span class="sr-only">Menu</span>
              <span class="bars inline-block relative z-1">
                <span class="bars-inner flex flex-col w-full h-full">
                  <span class="bar inline-block"></span>
                  <span class="bar inline-block"></span>
                  <span class="bar inline-block"></span>
                </span>
              </span>
            </button>
            <a
              class="navbar-brand"
              href="./index-classic.html"
              style="padding: 10px 0px; margin: 0 !important"
            >
              <span class="navbar-brand-inner">
                <img
                  class="max-w-full h-auto vertical-top rounded-inherit"
                  src="./assets/images/LBI LOGO (1).svg"
                  alt="Hub Theme"
                  style="width: 100px; height: 50px; object-fit: cover"
                />
              </span>
            </a>
          </div>
          <div class="lqd-mobile-sec-nav">
            <div
              class="mobile-navbar-collapse navbar-collapse collapse"
              id="lqd-mobile-sec-nav"
              aria-expanded="false"
              role="navigation"
            >
              <ul
                id="mobile-primary-nav"
                class="lqd-mobile-main-nav main-nav nav p-0 m-0"
                data-localscroll="true"
                data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'
              >
                <li class="is-active">
                  <a href={{route('home')}}"> الصفحة الرئيسية </a>
                </li>
                <li>
                  <a href="/about.html"> من نحن </a>
                </li>
                <li class="menu-item-has-children">
                  <a href="/services.html"> خدامتنا </a>
                </li>
                <li class="menu-item-has-children">
                  <a href="/products.html"> نبضات </a>
                </li>
                <li>
                  <a href="/brand.html"> رووفا </a>
                </li>
                <li>
                  <a href="/real-estate.html">الاستثمار العقاري</a>
                </li>
                <li>
                  <a href="/agrarian-reform.html">الاستصلاح الزراعي</a>
                </li>
                <li>
                  <a href="/careers.html">الوظائف</a>
                </li>
                <li>
                  <a href="/contact-us.html">تواصل معنا</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>