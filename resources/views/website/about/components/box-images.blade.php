<!-- Start Image Box -->
<section class="lqd-section image-box py-130">
    <div class="container">
      <div class="row">
        <div class="col col-12 p-0 module-col">
          <div
            class="ld-media-row flex flex-wrap -mx-10"
            data-liquid-masonry="true"
          >
          @php
            $imageHeight = [
                ['width' => 'w-50percent', 'height' => 'h-645', 'justify' => 'justify-center'],
                ['width' => 'w-50percent','height' => 'h-310', 'justify' => 'justify-end'],
                ['width' => 'w-25percent','height' => 'h-310', 'justify' => 'justify-end'],
                ['width' => 'w-25percent','height' => 'h-310', 'justify' => 'justify-end'],
            ];
          @endphp
          @foreach ($aboutImages as $key => $aboutImage)
          <div
            class="masonry-item {{ $imageHeight[$key]['width'] }} {{ $imageHeight[$key]['height'] }} px-10 mb-20 module-img lg:w-full"
          >
            <div class="ld-media-item pos-rel overflow-hidden h-full">
              <figure class="bg-cover h-full">
                <img
                  class="w-full h-full objfit-cover objpos-center"
                  width="1076"
                  height="1146"
                  src="{{ $aboutImage->img }}"
                  alt="image box"
                />
              </figure>
              <div
                class="ld-media-item-overlay flex flex-col items-center lqd-overlay text-center {{ $imageHeight[$key]['justify'] }}"
              >
                <div class="ld-media-bg lqd-overlay"></div>
                <div class="ld-media-content pos-rel z-2">
                  <div class="ld-media-txt">
                    <h3 class="m-0">
                      {{ $aboutImage->title }}
                    </h3>
                    <h6 class="m-0 uppercase ltr-sp-135"></h6>
                  </div>
                </div>
              </div>
              <a
                src="./assets/images/about-us/Dr Profile _ Aboout Doctor.svg"
                target="_blank"
                rel="nofollow"
                class="lqd-overlay z-2 fresco"
                data-fresco-group="gallery-image-box"
              ></a>
            </div>
          </div>
            
          @endforeach

            {{-- <div
              class="masonry-item w-50percent h-310 px-10 mb-20 module-img lg:w-full"
            >
              <div class="ld-media-item pos-rel overflow-hidden h-full">
                <figure class="bg-cover h-full">
                  <img
                    class="w-full h-full objfit-cover objpos-center"
                    width="1182"
                    height="546"
                    src="./assets/images/about-us/Login or Sign up _ Country.svg"
                    alt="image box"
                  />
                </figure>
                <div
                  class="ld-media-item-overlay flex flex-col items-center lqd-overlay text-center justify-end"
                >
                  <div class="ld-media-bg lqd-overlay"></div>
                  <div class="ld-media-content pos-rel z-2">
                    <div class="ld-media-txt">
                      <h3 class="m-0">Press and Media</h3>
                      <h6 class="m-0 uppercase ltr-sp-135"></h6>
                    </div>
                  </div>
                </div>
                <a
                  src="./assets/images/about-us/Login or Sign up _ Country.svg"
                  class="lqd-overlay z-2 fresco"
                  data-fresco-group="gallery-image-box"
                ></a>
              </div>
            </div>
            <div
              class="masonry-item w-25percent h-310 px-10 mb-20 module-img lg:w-full"
            >
              <div class="ld-media-item pos-rel overflow-hidden h-full">
                <figure class="bg-cover h-full">
                  <img
                    class="w-full h-full objfit-cover objpos-center"
                    width="556"
                    height="546"
                    src="./assets/images/about-us/Profile _ My Profile-1.svg"
                    alt="image box"
                  />
                </figure>
                <div
                  class="ld-media-item-overlay flex flex-col items-center lqd-overlay text-center justify-end"
                >
                  <div class="ld-media-bg lqd-overlay"></div>
                  <div class="ld-media-content pos-rel z-2">
                    <div class="ld-media-txt">
                      <h3 class="m-0">Career</h3>
                      <h6 class="m-0 uppercase ltr-sp-135"></h6>
                    </div>
                  </div>
                </div>
                <a
                  src="./assets/images/about-us/Profile _ My Profile-1.svg"
                  target="_blank"
                  rel="nofollow"
                  class="lqd-overlay z-2 fresco"
                  data-fresco-group="gallery-image-box"
                ></a>
              </div>
            </div>
            <div
              class="masonry-item w-25percent h-310 px-10 mb-20 module-img lg:w-full"
            >
              <div class="ld-media-item pos-rel overflow-hidden h-full">
                <figure class="bg-cover h-full">
                  <img
                    class="w-full h-full objfit-cover objpos-center"
                    width="580"
                    height="546"
                    src="./assets/images/about-us/Profile _ My Profile.svg"
                    alt="image box"
                  />
                </figure>
                <div
                  class="ld-media-item-overlay flex flex-col items-center lqd-overlay text-center justify-end"
                >
                  <div class="ld-media-bg lqd-overlay"></div>
                  <div class="ld-media-content pos-rel z-2">
                    <div class="ld-media-txt">
                      <h3 class="m-0">Learn</h3>
                      <h6 class="m-0 uppercase ltr-sp-135"></h6>
                    </div>
                  </div>
                </div>
                <a
                  href="./assets/images/demo/company/about/image-box-4.jpg"
                  class="lqd-overlay z-2 fresco"
                  data-fresco-group="gallery-image-box"
                ></a>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Image Box -->