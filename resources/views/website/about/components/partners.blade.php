<section
            class="lqd-section clients transition-all border-y-1 border-black-10 py-25"
          >
            <div class="container">
              <div class="row items-center">
                <div class="col col-12 col-xl-3 lg:text-center">
                  <h6
                    class="ld-fh-element relative mb-0/5em text-13 uppercase tracking-1 text-black"
                  >
                    {{$aboutSetting->getPartnerTitle()}}
                  </h6>
                </div>
                <div class="col col-12 col-xl-9">
                  <div
                    class="w-full relative flex flex-wrap items-center justify-start"
                  >
                    @foreach ($partners as $partner)
                    <div
                      class="w-20percent flex items-center justify-center sm:w-50percent"
                    >
                      <div
                        class="lqd-imggrp-single block relative w-full p-15 text-center"
                      >
                        <div
                          class="lqd-imggrp-img-container relative inline-flex items-center justify-center"
                        >
                          <figure class="w-full relative">
                            <img
                              src="{{ $partner->img }}"
                              alt="client"
                            />
                          </figure>
                        </div>
                      </div>
                    </div>
                      
                    @endforeach
                    
                  </div>
                </div>
              </div>
            </div>
          </section>