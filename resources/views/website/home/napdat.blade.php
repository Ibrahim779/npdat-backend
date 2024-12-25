<section
      class="lqd-section experience pt-55 pb-55 mobile-section"
      id="experience"
    >
      <div class="container">
        <div class="row items-center justify-between">
          <div class="col col-12 col-lg-5 offset-lg-1 pr-1percent ml-0">
            <div class="w-full relative flex flex-col items-start">
              <h6 class="ld-fh-element mb-1em" style="color: #caa35c">
                {{ $homeSetting->getNpdatTitle() }}
              </h6>
              <h2
                class="ld-fh-element mb-0/5em text-46 module-h2-init-sm"
                style="color: #fff"
              >
                {{ $homeSetting->getNpdatMainTitle() }}
              </h2>
              <p class="ld-fh-element mb-2/15em" style="color: #ffffff91">
                {{ $homeSetting->getNpdatDescription() }}
              </p>

              <a
                href="./products.html"
                class="btn btn-solid btn-md font-bold btn-icon-right btn-hover-reveal text-16 rounded-4 hover:bg-secondary hover:text-white animation-element"
                style="background-color: #caa35c"
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
          <div
            class="col col-12 col-lg-6 col-xl-5 flex items-stretch transition-all module-col"
            style="height: 550px"
          >
            <div
              class="w-full relative flex flex-col items-end pt-300 px-65 pb-45 mb-0 module-img"
              style="
                border-top-left-radius: 80px;
                border-top-right-radius: 80px;
              "
            >
              <div
                class="row-bg-wrap absolute top-0 right-0 bottom-0 left-0 inline-block overflow-hidden rounded-inherit"
              >
                <div
                  class="row-bg-inner absolute top-0 right-0 bottom-0 left-0 inline-block overflow-hidden rounded-inherit opacity-100 scale-1"
                >
                  <figure
                    class="row-bg absolute -top-5 -right-5 -bottom-5 -left-5 inline-block overflow-hidden rounded-inherit bg-no-repeat bg-cover bg-center-top"
                    style="
                      background-image: url({{ $homeSetting->getNpdatImage() }});
                    "
                  ></figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>