<!-- Start Banner -->
<section
class="lqd-section banner py-100"
id="banner"
style="
  background-image: linear-gradient(180deg, #fff 0%, #caa35c 100%);
"
>
<div
  class="background-overlay bg-no-repeat bg-cover opacity-100 transition-all"
  style="
    background-image: url('./assets/images/demo/start-hub-3/banner-bg.png');
  "
></div>
<div
  class="lqd-particles-bg-wrap lqd-overlay flex pointer-events-none"
></div>
<div
  class="ld-particles-container lqd-particles-as-bg lqd-overlay flex"
>
  <div
    class="ld-particles-inner lqd-overlay flex pointer-events-none"
    id="lqd-particle-banner"
    data-particles="true"
    data-particles-options='{"particles": {"number": {"value" : 4} , "color": {"value" : ["#FDA44C", "#604CFD", "#F85976", "#0FBBB4"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 4}} , "interactivity" : [], "retina_detect": true}'
  ></div>
</div>
<div class="container">
  <div class="row">
    <div
      class="col col-12 col-xl-6 text-center xxl:text-start"
      data-custom-animations="true"
      data-ca-options='{"animationTarget": ".btn, h1, p", "ease": "power4.out", "initValues": {"y": "40px", "rotationY" : 53, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'
    >
      <a
        href="{{$npdatSetting->banner_link}}"
        class="btn btn-naked btn-icon-left btn-icon-circle btn-icon-custom-size btn-icon-bordered btn-icon-border-thicker text-15 leading-3em fresco"
        style="color: #caa35c"
      >
        <span class="btn-txt" data-text="See how it works"
          >
          {{$npdatSetting->getBannerLinkTitle()}}
          </span
        >
        <span class="btn-icon mr-10 w-45 h-45 border-2">
          <i
            aria-hidden="true"
            class="lqd-icn-ess icon-ion-ios-play"
          ></i>
        </span>
      </a>
      <div class="spacer w-full">
        <div class="h-30"></div>
      </div>
      <div class="ld-fancy-heading relative">
        <h1
          class="mb-25 ld-fh-element relative"
          style="line-height: 1"
        >
          <span>
            {{$npdatSetting->getBannerTitle()}}
          </span>
          <br />
          <span
            class="gradient-word"
            style="
              background-image: linear-gradient(
                to left,
                #e6a042,
                #fa6e30,
                #e7babb,
                #ac99e3,
                #8296d6
              );
            "
            >نبضات</span
          >
        </h1>
      </div>
      <div class="ld-fancy-heading relative text-right">
        <p
          class="font-medium mb-25 pr-30percent ld-fh-element relative"
          style="padding-right: 0"
        >
          {{$npdatSetting->getBannerDescription()}}
        </p>
      </div>
      <div
        class="flex flex-wrap justify-end lg:justify-center"
        dir="ltr"
      >
        <a
          href="{{$npdatSetting->banner_ios_app_link}}"
          class="btn btn-solid btn-hover-txt-liquid-x btn-icon-left text-15 leading-1em text-white rounded-6 bg-gray-900 hover:bg-white hover:text-primary"
          data-localscroll="true"
        >
          <span
            class="btn-txt text-start"
            data-text="Available on the Apple Store"
            data-split-text="true"
            data-split-options='{"type":  "chars, words"}'
          >
            <small>Available on the</small>
            <span>Apple Store</span>
          </span>
          <span class="btn-icon text-24">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 384 512"
            >
              <path
                d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"
              />
            </svg>
          </span>
        </a>
      </div>
    </div>
    <div class="col col-12 col-xl-6 sm:hidden">
      <div
        class="relative flex w-full h-full transition-bg justify-end lg:justify-center module-img"
      >
        <div class="relative w-400 px-0 z-2">
          <div
            class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d"
          >
            <figure
              class="w-full relative"
              data-stacking-factor="1"
            >
              <img
                width="795"
                style="height: 500px; transform: rotate(-20deg)"
                src="{{$npdatSetting->getBannerImage1()}}"
                alt="3D shape"
              />
            </figure>
          </div>
        </div>

        <div
          class="absolute w-auto top-0percent md:-right-15percent -right-10percent"
        >
          <div
            class="lqd-imggrp-single block relative"
            data-float="ease"
          >
            <div
              class="lqd-imggrp-img-container inline-flex relative items-center justify-center"
            >
              <figure class="w-full relative">
                <img
                  width="467"
                  style="height: 450px; transform: rotate(20deg)"
                  src="{{$npdatSetting->getBannerImage2()}}"
                  alt="3D shape"
                />
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End Banner -->