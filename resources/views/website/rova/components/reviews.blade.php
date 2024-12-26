 <!-- Start Testimonials -->
 <section class="lqd-section testimonials bg-tarnsparent pb-50 pt-50 lg:pt-0" id="testimonials"
     style="
   background-image: linear-gradient(180deg, #ffeede 50%, #fff 100%);
 ">
     <div class="container module-slider">
         <div class="row">
             <div class="col col-12 text-center">
                 <div
                     class="carousel-container relative carousel-nav-center carousel-nav-lg carousel-nav-circle carousel-nav-center carousel-nav-floated carousel-nav-middle carousel-nav-middlecarousel-dots-mobile-outside carousel-dots-mobile-center">
                     <div class="carousel-items relative"
                         data-lqd-flickity='{"prevNextButtons": true, "wrapAround": true, "groupCells": true, "cellAlign": "left", "buttonsAppendTo": "self", "addSlideNumbersToArrows": false, "pageDots": false}'>
                         <div class="flickity-viewport relative w-full overflow-hidden">
                             <div class="flickity-slider flex w-full h-full relative items-start">
                              @foreach ($reviews as $review )
                                
                              <div class="carousel-item flex flex-col justify-center" style="width: 100%">
                                  <div class="carousel-item-inner relative w-full">
                                      <div
                                          class="text-20 font-medium leading-20 text-center carousel-item-content relative w-full">
                                          <img src="{{ $review->img }}" alt="testimonial"
                                              width="100" height="121" />
                                          <p class="mt-2em text-black">
                                              {{ $review->comment }}
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Testimonials -->
