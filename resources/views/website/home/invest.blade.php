<section
      class="lqd-section real-estate-section what-we-do my-50 py-40"
      id="what-we-do"
      dir="ltr"
    >
      <div class="container">
        <div class="row items-center real-estate-content">
          <div class="col col-12 col-xl-6 p-0">
            <div
              class="w-full flex flex-wrap content-center items-center relative p-10"
            >
              <div class="w-auto relative">
                <div
                  class="lqd-imggrp-single block relative"
                  data-shadow-style="4"
                >
                  <div
                    class="lqd-imggrp-img-container inline-flex relative items-center justify-center w-50percent"
                  >
                    <figure class="w-full relative">
                      <img
                        class="rounded-6"
                        width="492"
                        height="596"
                        src="{{ $homeSetting->getInvestImage1() }}"
                        alt="What We Do"
                      />
                    </figure>
                  </div>
                </div>
              </div>
              <div class="w-auto relative">
                <div
                  class="-mt-40percent -mr-40percent mb-0 ml-35percent"
                >
                  <div
                    class="lqd-imggrp-single block relative"
                    data-shadow-style="4"
                  >
                    <div
                      class="lqd-imggrp-img-container inline-flex relative items-center justify-center w-55percent"
                    >
                      <figure class="w-full relative">
                        <img
                          class="rounded-6"
                          width="666"
                          height="808"
                          src="{{ $homeSetting->getInvestImage2() }}"
                          alt="What We Do"
                        />
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col col-12 col-xl-6 p-0"
            data-custom-animations="true"
            data-ca-options='{"animationTarget": ".animation-element", "duration" : 1800 , "delay" : 180 , "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'
          >
            <div
              class="w-full flex flex-col items-start pr-5percent pl-30percent module-content"
            >
              <div
                class="ld-fancy-heading relative animation-element text-right w-full"
              >
                <h6
                  class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left"
                >
                  {{ $homeSetting->getInvestTitle() }}
                </h6>
              </div>
              <div class="ld-fancy-heading relative animation-element">
                <h2
                  class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left text-right"
                >
                  {{ $homeSetting->getInvestMainTitle() }}
                </h2>
              </div>
              <div
                class="ld-fancy-heading pb-0/5em relative animation-element"
              >
                <p
                  class="ld-fh-element mb-1/25em inline-block relative lqd-highlight-classic lqd-highlight-grow-left text-right"
                >
                  {{ $homeSetting->getInvestDescription() }}
                </p>
              </div>
              <div
                class="mb-20 iconbox flex flex-grow-1 relative items-center iconbox-side animation-element w-full"
                dir="rtl"
              >
                <div class="iconbox-icon-wrap">
                  <div
                    class="iconbox-icon-container inline-flex text-18 text-green-700"
                  >
                    <i
                      aria-hidden="true"
                      class="text-secondary lqd-icn-ess icon-ion-ios-checkmark"
                    ></i>
                  </div>
                </div>
                <h3 class="lqd-iconbox-heading text-16 font-bold m-0">
                  {{ $homeSetting->getInvestList1() }}  
                </h3>
              </div>
              <div
                class="mb-40 iconbox flex flex-grow-1 relative items-center iconbox-side animation-element text-right w-full"
                dir="rtl"
              >
                <div class="iconbox-icon-wrap">
                  <div
                    class="iconbox-icon-container inline-flex text-18 text-green-700"
                  >
                    <i
                      aria-hidden="true"
                      class="text-secondary lqd-icn-ess icon-ion-ios-checkmark"
                    ></i>
                  </div>
                </div>
                <h3 class="lqd-iconbox-heading text-16 font-bold m-0">
                  {{ $homeSetting->getInvestList2() }}
                </h3>
              </div>
              <a
                href="./real-estate.html"
                class="btn btn-solid btn-md font-bold btn-icon-right btn-hover-reveal text-16 text-secondary rounded-4 hover:bg-secondary hover:text-white animation-element cosmetics2-btn"
                style="margin-left: auto"
              >
                <span class="btn-txt" data-text="Get a quote"
                  >معرفة المزيد</span
                >
                <span class="btn-icon text-1/15em">
                  <i
                    aria-hidden="true"
                    class="lqd-icn-ess icon-md-arrow-round-forward"
                  ></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>