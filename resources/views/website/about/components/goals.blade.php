<!-- Start Has Accordion -->
<section class="lqd-section has-accordion-page pt-100 bg-gray-100">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-xl-6">
          <h2 class="ld-fh-element relative mb-0/5em text-40">
            {{$aboutSetting->getGoalsTitle()}}
          </h2>
          <div
            class="accordion accordion-sm accordion-side-spacing accordion-title-round accordion-expander-lg accordion-active-has-fill"
            id="accordion-bg-title"
            role="tablist"
            aria-multiselectable="true"
          >
            <div
              class="accordion-item mb-20 panel animation-element active"
            >
              <div class="accordion-heading" role="tab">
                <h4
                  class="accordion-title leading-1/5em text-blue-300"
                  id="heading-1"
                >
                  <a
                    class="py-0/65em px-1/5em bg-white text-16 font-bold"
                    role="button"
                    data-bs-toggle="collapse"
                    href="#collapse-1"
                    aria-expanded="true"
                    aria-controls="collapse-1"
                  >
                    <span class="accordion-title-txt">{{$aboutSetting->getVisionTitle()}}</span>
                    <span class="accordion-expander text-22">
                      <i
                        class="lqd-icn-ess icon-ion-ios-arrow-down"
                      ></i>
                      <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                    </span>
                  </a>
                </h4>
              </div>
              <div
                class="accordion-collapse collapse show"
                id="collapse-1"
                data-bs-parent="#accordion-bg-title"
                role="tabpanel"
                aria-labelledby="heading-1"
              >
                <div class="pt-1/5em pl-1/5em">
                  <p class="m-0">
                    {{$aboutSetting->getVisionDescription()}}
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-20 panel animation-element">
              <div class="accordion-heading" role="tab">
                <h4
                  class="accordion-title leading-1/5em text-blue-300"
                  id="heading-2"
                >
                  <a
                    class="collapsed py-0/65em px-1/5em bg-white text-16 font-bold"
                    role="button"
                    data-bs-toggle="collapse"
                    href="#collapse-2"
                    aria-expanded="false"
                    aria-controls="collapse-2"
                  >
                    <span class="accordion-title-txt">
                      {{$aboutSetting->getMissionTitle()}}
                    </span>
                    <span class="accordion-expander text-22">
                      <i
                        class="lqd-icn-ess icon-ion-ios-arrow-down"
                      ></i>
                      <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                    </span>
                  </a>
                </h4>
              </div>
              <div
                class="accordion-collapse collapse"
                id="collapse-2"
                data-bs-parent="#accordion-bg-title"
                role="tabpanel"
                aria-labelledby="heading-2"
              >
                <div class="pt-1/5em pl-1/5em">
                  <p class="m-0">
                    {{$aboutSetting->getMissionDescription()}}
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item panel animation-element">
              <div class="accordion-heading" role="tab">
                <h4
                  class="accordion-title leading-1/5em text-blue-300"
                  id="heading-3"
                >
                  <a
                    class="collapsed py-0/65em px-1/5em bg-white text-16 font-bold"
                    role="button"
                    data-bs-toggle="collapse"
                    href="#collapse-3"
                    aria-expanded="false"
                    aria-controls="collapse-3"
                  >
                    <span class="accordion-title-txt">
                      {{$aboutSetting->getTeamTitle()}}
                    </span>
                    <span class="accordion-expander text-22">
                      <i
                        class="lqd-icn-ess icon-ion-ios-arrow-down"
                      ></i>
                      <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                    </span>
                  </a>
                </h4>
              </div>
              <div
                class="accordion-collapse collapse"
                id="collapse-3"
                data-bs-parent="#accordion-bg-title"
                role="tabpanel"
                aria-labelledby="heading-3"
              >
                <div class="pt-1/5em pl-1/5em">
                  <p class="m-0">
                    {{$aboutSetting->getTeamDescription()}}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-12 col-xl-6 p-0">
          <div
            class="w-full relative flex items-center pr-20percent rounded-8 z-1 module-col"
            data-parallax="true"
            data-parallax-options='{"ease":["linear"],"start":"top bottom","end":"bottom+=0px top"}'
            data-parallax-from='{"y":"60px"}'
            data-parallax-to='{"y":"-75px"}'
            style="justify-content: center"
          >
            <div
              class="lqd-imggrp-single block pos-rel rounded-inherit"
              data-shadow-style="4"
            >
              <div
                class="lqd-imggrp-img-container inline-flex pos-rel items-center justify-center rounded-inherit"
              >
                <figure class="w-full pos-rel">
                  <img
                    class="rounded-inherit"
                    width="592"
                    height="674"
                    src="{{$aboutSetting->getGoalsImage()}}"
                    alt="has accordion"
                  />
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Has Accordion -->