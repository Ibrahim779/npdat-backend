<section
      class="lqd-section roova-section what-we-do my-50"
      id="what-we-do"
      dir="ltr"
    >
      <div class="container">
        <div class="row items-center roova-content">
          <div
            class="col col-12 col-xl-6 p-0"
            data-custom-animations="true"
            data-ca-options='{"animationTarget": ".animation-element", "duration" : 1800 , "delay" : 180 , "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'
          >
            <div
              class="w-full flex flex-col items-start pr-15percent pl-5percent module-content"
            >
              <div
                class="ld-fancy-heading relative animation-element w-full text-right"
              >
                <h6
                  class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left text-right"
                >
                  {{ $homeSetting->getRovaTitle() }}
                </h6>
              </div>
              <div class="ld-fancy-heading relative animation-element">
                <h2
                  class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left text-right"
                >
                  {{ $homeSetting->getRovaMainTitle() }}
                </h2>
              </div>
              <div
                class="ld-fancy-heading pb-0/5em relative animation-element"
              >
                <p
                  class="ld-fh-element mb-1/25em inline-block relative lqd-highlight-classic lqd-highlight-grow-left text-right"
                >
                  {{ $homeSetting->getRovaDescription() }}
                </p>
              </div>
              <a
                href="./brand.html"
                class="btn btn-solid btn-md font-bold btn-icon-right btn-hover-reveal text-16 text-white-90 rounded-4 hover:bg-secondary hover:text-white animation-element"
                style="background-color: #101f2e; margin-left: auto"
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
                        src="{{ $homeSetting->getRovaImage1() }}"
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
                          src="{{ $homeSetting->getRovaImage2() }}"
                          alt="What We Do"
                        />
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>