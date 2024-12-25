<footer
        id="site-footer"
        class="main-footer bg-dark text-white-50 pt-90"
        data-sticky-footer="true"
        data-sticky-footer-options='{"shadow": "0"}'
        dir="rtl"
      >
        <section class="lqd-section module-top">
          <div class="container">
            <div class="row">
              <div class="col col-12 col-lg-4">
                <div
                  class="w-full flex flex-col mb-35 pr-15percent module-first"
                >
                  <div class="flex items-center mb-35">
                    <figure
                      class="max-w-full inline-flex vertical-top m-0 flex-grow-1"
                    >
                      <img
                        class="max-w-full h-auto vertical-top rounded-inherit"
                        width="153"
                        height="40"
                        src="{{ $general_settings->getLogo() }}"
                        alt="Hub Classic Pro"
                      />
                    </figure>
                  </div>
                  <div class="ld-fancy-heading module-text">
                    <p class="ld-fh-element mb-3em text-28">
                      {{ $general_settings->getDescription() }}
                    </p>
                  </div>
                  <ul class="social-icon social-icon-border-none text-24">
                    <li>
                      <a
                        class="text-white-70 text-24 hover:text-white"
                        href="{{ $social_settings->facebook }}"
                        target="_blank"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          height="1em"
                          viewBox="0 0 512 512"
                        >
                          <path
                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a
                        class="text-white-70 text-24 hover:text-white"
                        href="{{ $social_settings->twitter }}"
                        target="_blank"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          height="1em"
                          viewBox="0 0 512 512"
                        >
                          <path
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a
                        class="text-white-70 text-24 hover:text-white"
                        href="{{ $social_settings->linkedin }}"
                        target="_blank"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          height="1em"
                          viewBox="0 0 448 512"
                        >
                          <path
                            d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-4">
                <div
                  class="w-full flex flex-col pl-15percent mb-35 bg-center bg-no-repeat bg-contain md:pl-0"
                  style="
                    background-image: url(./assets/images/demo/classic/footer/map@2x.png);
                  "
                >
                  <div class="ld-fancy-heading">
                    <h3 class="ld-fh-element mb-2em text-16 text-white">
                      اتصل بنا
                    </h3>
                  </div>
                  <div
                    class="iconbox relative items-center justify-start text-start mb-2em"
                  >
                    <div class="iconbox-icon-wrap flex ml-30">
                      <span
                        class="iconbox-icon-container m-0 text-40 text-primary"
                      >
                        <svg
                          class="w-20 h-auto relative z-2"
                          xmlns="http://www.w3.org/2000/svg"
                          width="19.063"
                          height="19.057"
                          viewbox="0 0 19.063 19.057"
                        >
                          <path
                            d="M1.969-18.375v1.313a7.172,7.172,0,0,1,3.65.984A7.31,7.31,0,0,1,8.2-13.494a7.172,7.172,0,0,1,.984,3.65H10.5A8.353,8.353,0,0,0,9.331-14.15a8.4,8.4,0,0,0-3.056-3.056A8.353,8.353,0,0,0,1.969-18.375Zm-6.788,1.969a1.442,1.442,0,0,0-.964.349L-7.9-13.9l.062-.041A1.966,1.966,0,0,0-8.5-12.879a2.041,2.041,0,0,0,.072,1.23A20.666,20.666,0,0,0-6.891-8.367,20.038,20.038,0,0,0-3.671-4.2,21.246,21.246,0,0,0,3.773.554h.021a2.245,2.245,0,0,0,1.2.082A2.32,2.32,0,0,0,6.07.1L8.142-1.969a1.379,1.379,0,0,0,.41-1.015A1.379,1.379,0,0,0,8.142-4L5.455-6.706a1.391,1.391,0,0,0-1.025-.41,1.391,1.391,0,0,0-1.025.41L2.112-5.394A10.206,10.206,0,0,1-.595-7.229,8.015,8.015,0,0,1-2.42-9.905l1.313-1.312a1.505,1.505,0,0,0,.431-1.077,1.234,1.234,0,0,0-.492-1.015l.062.062-2.748-2.81A1.442,1.442,0,0,0-4.819-16.406Zm6.788.656v1.313a4.5,4.5,0,0,1,2.307.615,4.558,4.558,0,0,1,1.671,1.671,4.5,4.5,0,0,1,.615,2.307H7.875a5.809,5.809,0,0,0-.8-2.974A6.127,6.127,0,0,0,4.942-14.95,5.809,5.809,0,0,0,1.969-15.75Zm-6.788.656a.253.253,0,0,1,.144.062l2.687,2.748a.142.142,0,0,1-.041.144l-1.948,1.928.144.41.267.574A11.008,11.008,0,0,0-2.81-7.875,7.98,7.98,0,0,0-1.5-6.3,11.479,11.479,0,0,0,.82-4.573,8.9,8.9,0,0,0,1.969-4l.41.185L4.368-5.8q.041-.041.062-.041t.062.041L7.26-3.035q.041.041.041.051t-.041.051L5.209-.9A.945.945,0,0,1,4.225-.7a19.676,19.676,0,0,1-6.973-4.43A19.5,19.5,0,0,1-5.763-9.044,17.408,17.408,0,0,1-7.2-12.1v-.021a.679.679,0,0,1-.021-.441.745.745,0,0,1,.226-.4l2.03-2.071A.2.2,0,0,1-4.819-15.094Zm6.788,1.969v1.313a1.9,1.9,0,0,1,1.395.574,1.9,1.9,0,0,1,.574,1.395H5.25a3.21,3.21,0,0,0-.441-1.641,3.258,3.258,0,0,0-1.2-1.2A3.21,3.21,0,0,0,1.969-13.125Z"
                            transform="translate(8.563 18.375)"
                            fill="#caa35c"
                          ></path>
                        </svg>
                      </span>
                    </div>
                    
                    <div class="contents">
                      <h3 class="text-13 text-white-40 mb-0">
                        أبحث عن التعاون?
                      </h3>
                      <p>
                        <span class="text-16 text-white" dir="ltr"
                          >
                          {{ $general_settings->phone }}
                          </span
                        >
                      </p>
                      <p>
                        <span class="text-16 text-white" dir="ltr"
                          >
                          {{ $general_settings->phone_2 }}
                          </span
                        >
                      </p>
                    </div>
                  </div>
                  <div
                    class="iconbox relative items-center justify-start text-start mb-2em"
                  >
                    <div class="iconbox-icon-wrap flex ml-30">
                      <span
                        class="iconbox-icon-container m-0 text-40 text-primary"
                      >
                        <svg
                          class="w-20 h-auto relative z-2"
                          xmlns="http://www.w3.org/2000/svg"
                          width="15.75"
                          height="16.099"
                          viewbox="0 0 15.75 16.099"
                        >
                          <path
                            d="M3.938-16.406a3.8,3.8,0,0,0-1.969.533A4.013,4.013,0,0,0,.533-14.437,3.8,3.8,0,0,0,0-12.469a3.366,3.366,0,0,0,.164.984,8.121,8.121,0,0,0,.41,1.066q.472,1.046,1.148,2.235Q2.563-6.747,3.4-5.537l.533.779L5-6.316Q5.64-7.28,6.152-8.183A20.572,20.572,0,0,0,7.3-10.418a8.121,8.121,0,0,0,.41-1.066,3.366,3.366,0,0,0,.164-.984,3.8,3.8,0,0,0-.533-1.969,4.013,4.013,0,0,0-1.436-1.436A3.8,3.8,0,0,0,3.938-16.406Zm-6.583,1.271L-7.875-12.9V-.308L-2.6-2.584,2.646-.615,7.875-2.851V-8.572q-.513.984-1.312,2.256v2.6L3.281-2.317V-3.384L1.969-5.291v3.035L-1.969-3.732v-9.762l.718.267A5.446,5.446,0,0,1-.9-14.5Zm6.583.041a2.6,2.6,0,0,1,1.323.349,2.554,2.554,0,0,1,.954.954,2.6,2.6,0,0,1,.349,1.323,2.49,2.49,0,0,1-.123.625,7.614,7.614,0,0,1-.328.892Q5.742-10.131,5-8.839q-.472.82-.964,1.538l-.1.164-.1-.164q-.492-.718-.964-1.538a22.116,22.116,0,0,1-1.107-2.112,7.614,7.614,0,0,1-.328-.892,2.49,2.49,0,0,1-.123-.625,2.6,2.6,0,0,1,.349-1.323,2.554,2.554,0,0,1,.954-.954A2.6,2.6,0,0,1,3.938-15.094Zm-7.219,1.641v9.741L-6.562-2.317v-9.721Z"
                            transform="translate(7.875 16.406)"
                            fill="#caa35c"
                          ></path>
                        </svg>
                      </span>
                    </div>
                    <div class="contents">
                      <h3 class="text-13 text-white-40 mb-0">
                        قم بزيارة مكتبنا المحلي
                      </h3>
                      <p>
                        <span class="text-16 text-white"
                          >
                          {{ $general_settings->getAddress() }}
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-4">
                <div class="container-fluid mb-35 p-0">
                  <div class="row">
                    <div class="col col-6">
                      <div class="ld-fancy-heading">
                        <h3 class="ld-fh-element mb-2em text-16 text-white">
                          روابط مفيدة
                        </h3>
                      </div>
                      <div
                        class="lqd-fancy-menu lqd-custom-menu lqd-menu-td-none ld_custom_menu_62ff6ae926ced"
                      >
                        <ul class="reset-ul link-white-70 link-14">
                          <li class="mb-10">
                            <a class="hover:text-white" href="{{route('home')}}"
                              >الصفحة الرئيسية</a
                            >
                          </li>
                          <li class="mb-10">
                            <a class="hover:text-white" href="./about.html"
                              >من نحن</a
                            >
                          </li>
                          <li class="mb-10">
                            <a class="hover:text-white" href="./services.html"
                              >خدماتنا</a
                            >
                          </li>
                          <li class="mb-10">
                            <a class="hover:text-white" href="./careers.html"
                              >الوظائف</a
                            >
                          </li>
                          <li class="mb-10">
                            <a class="hover:text-white" href="./contact-us.html"
                              >تواصل معنا</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col col-6">
                      <div class="ld-fancy-heading">
                        <h3 class="ld-fh-element mb-2em text-16 text-white">
                          شركاتنا
                        </h3>
                      </div>
                      <div
                        class="lqd-fancy-menu lqd-custom-menu lqd-menu-td-none ld_custom_menu_62ff6ae927f4b"
                      >
                        <ul class="reset-ul link-white-70 link-14">
                          <li class="mb-10">
                            <a class="hover:text-white" href="./brand.html"
                              >رووفا</a
                            >
                          </li>
                          <li class="mb-10">
                            <a
                              class="hover:text-white"
                              href="./real-estate.html"
                              >الاستثمار العقاري</a
                            >
                          </li>
                          <li class="mb-10">
                            <a class="hover:text-white" href="./products.html"
                              >نبضات</a
                            >
                          </li>
                          <li class="mb-10">
                            <a
                              class="hover:text-white"
                              href="./agrarian-reform.html"
                              >الاستصلاح الزراعي</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="lqd-section module-bottom pt-20 pb-35" dir="ltr">
          <div class="container">
            <div class="row">
              <div class="col col-12">
                <div
                  class="w-full relative border-top border-white-10 mb-30"
                ></div>
              </div>
              <div class="col col-12 col-md-5 text-start sm:text-center">
                <div class="ld-fancy-heading">
                  <p class="ld-fh-element mb-0/5em text-13 text-white-40">
                    {!! $general_settings->copyright !!}
                  </p>
                </div>
              </div>
              <!-- <div class="col col-12 col-sm-7 text-end sm:text-center">
                <div class="lqd-fancy-menu lqd-menu-td-none -mr-15 -ml-15">
                  <ul class="reset-ul inline-nav link-14">
                    <li class="w-auto relative inline-flex flex-wrap mx-15">
                      <a
                        class="text-white-70 hover:text-white"
                        href="#"
                        target="_blank"
                        >Privacy Policy</a
                      >
                    </li>
                    <li class="w-auto relative inline-flex flex-wrap mx-15">
                      <a
                        class="text-white-70 hover:text-white"
                        href="#"
                        target="_blank"
                        >Help Center</a
                      >
                    </li>
                    <li class="w-auto relative inline-flex flex-wrap mx-15">
                      <a
                        class="text-white-70 hover:text-white"
                        href="#"
                        target="_blank"
                        >Contact</a
                      >
                    </li>
                  </ul>
                </div>
              </div> -->
            </div>
          </div>
        </section>
      </footer>