<section
      class="lqd-section banner bg-no-repeat bg-center bg-cover py-140 px-140 md:px-0 banner-home"
      id="banner"
      style="background-image: url({{ $homeSetting->getBannerImage() }});height: 90dvh;"
      dir="ltr"
    >
      <div class="container">
        <div class="row">
          <div
            class="col col-12 col-lg-7 col-xl-5"
            data-custom-animations="true"
            data-ca-options='{"triggerHandler": "inview", "animationTarget": "all-childs", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 45 , "transformOriginX" : 50 , "transformOriginY" : 50 , "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0 , "transformOriginX" : 50 , "transformOriginY" : 50 , "transformOriginZ": "0px", "opacity" : 1}}'
          >
            <div class="ld-fancy-heading">
              <h1
                class="ld-fh-element mb-0/35em lqd-split-lines text-right"
                data-split-text="true"
                data-split-options='{"type": "lines"}'
              >
                {{ $homeSetting->getBannerTitle() }}
              </h1>
            </div>
            <div class="ld-fancy-heading">
              <p
                class="ld-fh-element mb-2em lqd-split-lines leading-30 text-17 text-right"
                data-split-text="true"
                data-split-options='{"type": "lines"}'
              >
                {{ $homeSetting->getBannerDescription() }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>