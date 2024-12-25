<!-- Start Title Box -->
<section class="lqd-section title-box pt-50">
    <div class="container">
      <div class="row">
        <div
          class="col col-12 flex flex-col items-center text-center p-20 mb-20"
        >
          <h6 class="ld-fh-element relative mb-0/5em">
            {{ $aboutSetting->getCeoTitle() }}
          </h6>
          <h2 class="ld-fh-element relative mb-0/5em">
            {{ $aboutSetting->getCeoMainTitle() }}
          </h2>
        </div>
      </div>
    </div>
  </section>
  <!-- End Title Box -->

  <!-- Start Partners -->
  <section class="lqd-section partners">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-md-12">
          <div
            class="w-full relative flex flex-wrap transition-all border-1 border-gray-100"
          >
            <div
              class="w-35percent relative flex items-center justify-center transition-all lg:w-full"
            >
              <img
                class="objfit-cover opacity-100"
                style="height: 500px"
                width="500"
                height="500"
                src="{{ $aboutSetting->getCeoImage() }}"
                alt="partner"
              />
            </div>
            <div
              class="w-65percent relative flex flex-col justify-center py-15 px-55 module-contnet lg:w-full"
            >
              <h3 class="ld-fh-element relative mb-1/5em text-16">
                {{ $aboutSetting->getCeoName() }}
              </h3>
              <p
                class="ld-fh-element relative mb-0/5em lqd-highlight-classic lqd-highlight-grow-left text-right"
              >
                {{ $aboutSetting->getCeoWord() }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Partners -->
  <!-- Start Text Naked -->
  <section class="lqd-section text-naked pt-20 pb-95">
    <div class="container">
      <div class="row">
        <div class="col col-12 text-center">
          <p class="ld-fh-element relative mb-0/5em">
            {{ $aboutSetting->getHelpText() }}
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Text Naked -->