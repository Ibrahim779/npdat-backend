 <!-- Start Solutions 1 -->
 <section class="lqd-section-scroll-inner solutions1 module-img-1">
  <div class="container">
    <div class="row min-h-100vh items-center">
      <div class="col col-12 col-xl-6">
        <div
          class="lqd-imggrp-single block relative perspective"
          data-hover3d="true"
        >
          <div
            class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d"
          >
            <figure
              class="w-full relative"
              data-stacking-factor="1"
              data-reveal="true"
              data-reveal-options='{"direction": "tb"}'
            >
              <img
                style="height: 600px; width: 400px"
                src="{{$npdatSetting->getApp1Image()}}"
                alt="social media"
              />
            </figure>
          </div>
        </div>
      </div>
      <div
        class="col col-12 col-xl-6 p-0"
        data-custom-animations="true"
        data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "rotationY" : -35, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'
      >
        <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">
          <div
            class="ld-fancy-heading relative animation-element"
          ></div>
          <div class="ld-fancy-heading relative animation-element">
            <h2
              class="text-48 tracking-1 ld-fh-element mb-0/5em inline-block relative"
              data-inview="true"
              data-transition-delay="true"
              data-delay-options=' {"elements": ".lqd-highlight-inner", "delayType": "transition"}'
            >
            @php
              $app1Title = $npdatSetting->getApp1Title();
              $app1TitleArray = explode(' ', $app1Title);
            @endphp
              {{$app1TitleArray[0]}}
              <mark class="lqd-highlight">
                <span class="lqd-highlight-txt">{{$app1TitleArray[1]}}</span>
                <span
                  class="bottom-0 left-0 lqd-highlight-inner"
                ></span>
              </mark>
            </h2>
          </div>
          <div class="ld-fancy-heading relative animation-element">
            <p
              class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative"
            >
              {{$npdatSetting->getApp1Description()}}
            </p>
          </div>
          <div class="spacer w-full animation-element">
            <div class="w-full h-50"></div>
          </div>
          <div class="w-full animation-element">
            <a
              href="#pricing"
              class="btn btn-solid btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-13 w-240 h-55 rounded-6 bg-purple-200 text-purple-500 hover:text-white hover:bg-primary"
              data-localscroll="true"
              dir="ltr"
            >
              <span
                class="btn-txt px-10"
                data-text="الانتقال الي الرابط"
                >تحميل البرنامج</span
              >
              <span class="btn-icon text-1em">
                <i
                  aria-hidden="true"
                  class="lqd-icn-ess icon-ion-ios-arrow-forward"
                ></i>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Solutions -->