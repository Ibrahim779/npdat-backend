<section class="lqd-section clients pt-40 pb-35 bg-gray-100">
    <div class="container">
      <div class="row">
        <div class="col col-lg-12">
          <div class="w-full block">
            <div
              class="carousel-container relative carousel-nav-shaped"
            >
              <div
                class="carousel-items relative lqd-fade-sides"
                data-lqd-flickity='{"marquee": true, "equalHeightCells": true, "middleAlignContent": true, "pauseAutoPlayOnHover": true}'
              >
                <div
                  class="flickity-viewport relative w-full overflow-hidden"
                >
                  <div
                    class="flickity-slider text-center flex w-full h-full relative"
                  >
                  @foreach ($partners as $partner)
                  <div
                    class="col col-4 col-md-3 w-20percent carousel-item flex flex-col justify-center items-center"
                  >
                    <img
                      src="{{ $partner->img }}"
                      alt="Apper"
                      width="80"
                      height="64"
                    />
                  </div>
                  @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>