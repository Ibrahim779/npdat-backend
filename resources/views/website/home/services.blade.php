<section class="lqd-section consultation pt-80" id="consultation">
    <div class="container">
      <div class="row">
        <div
          class="col col-12 flex flex-row flex-wrap justify-center"
          data-custom-animations="true"
          data-ca-options='{"animationTarget": ".animation-element", "duration" : 1800 , "delay" : 180 , "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'
        >
          <div
            class="w-45percent flex flex-col justify-center text-center mb-55 md:w-full"
          >
            <div class="ld-fancy-heading relative animation-element">
              <h2 class="ld-fh-element mb-0/5em inline-block relative">
                {{ $homeSetting->getServicesTitle() }}
              </h2>
            </div>
            <div
              class="ld-fancy-heading relative animation-element"
            ></div>
          </div>
          <div class="w-full"></div>
          @foreach ($services as $service)
          <div
            class="flex w-33percent flex p-15 lg:w-full animation-element"
          >
            <div
              class="ld-flipbox w-full h-full relative perspective rounded-4"
            >
              <div
                class="ld-flipbox-wrap w-full h-full relative transform-style-3d"
              >
                <div
                  class="ld-flipbox-face ld-flipbox-front flex flex-col w-full h-full backface-hidden transform-style-3d"
                  style="
                    background-image: url('{{$service->img}}');
                  "
                >
                  <span
                    class="ld-flipbox-overlay lqd-overlay flex bg-transparent"
                    style="
                      background-image: linear-gradient(
                        180deg,
                        rgba(24, 27, 49, 0) 0%,
                        rgba(24, 27, 49, 0.65) 100%
                      );
                    "
                  ></span>
                  <div
                    class="ld-flipbox-inner w-full flex-grow-1 items-center justify-center backface-hidden"
                  >
                    <div
                      class="w-full flex flex-col flex-wrap items-start p-10 px-15"
                    >
                      <div
                        class="ld-fancy-heading relative w-auto mb-2em rounded-4 bg-white"
                      >
                        <h5
                          class="ld-fh-element m-0 inline-block relative bg-white text-15 font-semibold leading-1em tracking-0/5 py-0/5em px-1em rounded-4"
                        >
                          {{ $service->name }}
                        </h5>
                      </div>
                      <div class="ld-fancy-heading relative">
                        <h5
                          class="ld-fh-element mb-0/5em inline-block relative text-30 text-white leading-1em"
                        >
                          {{ $service->title }}
                        </h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="ld-flipbox-face ld-flipbox-back flex flex-col lqd-overlay flex h-full backface-hidden transform-style-3d"
                >
                  <span
                    class="ld-flipbox-overlay lqd-overlay flex"
                  ></span>
                  <div
                    class="ld-flipbox-inner flex flex-col flex-grow-1 items-center justify-center w-full backface-hidden py-40 px-50"
                  >
                    <div
                      class="ld py-1/15em px-2/1em-fancy-heading rounded-4 relative hover:text-white text-center"
                    >
                      <p
                        class="ld-fh-element text-white-60 inline-block relative"
                      >
                        {{ $service->description }}
                      </p>
                    </div>
                    @php
                      $links = [
                        1 => 'products.html',
                        2 => 'products.html',
                        3 => 'products.html',
                      ];
                    @endphp
                    <a
                      href="{{ $links[$loop->iteration] }}"
                      class="btn btn-solid btn-md whitespace-nowrap text-15 font-bold py-1/15em px-2/1em text-secondary rounded-4 bg-white hover:text-white send-message"
                    >
                      <span class="btn-txt" data-text="Send message"
                        >التعرف علي المزيد</span
                      >
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>