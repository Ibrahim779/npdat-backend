 <!-- Start What We Do -->
 <section
 class="lqd-sectoin what-we-do-page py-100"
 id="lqd-site-content"
>
 <div class="container">
   <div class="row">
    @foreach ($services as $service)
    <div class="col col-12 col-md-6 col-xl-4 p-0">
      <div
        class="relative flex flex-col m-25 shadow-md service-card"
      >
        <a href="#">
          <img
            class="rounded-6 rounded-bottom-0"
            width="720"
            height="488"
            src="{{ $service->img }}"
            alt="company"
          />
        </a>
        <div
          class="w-full relative flex flex-col items-start justify-center py-20 pb-30 px-20"
        >
          <div
            class="ld-fancy-heading relative mb-10 bg-gray-100 rounded-100"
          >
            <h6
              class="ld-fh-element relative pb-5 pt-10 px-10 mb0/5em text-12 leading-0"
            >
              {{ $service->name }}
            </h6>
          </div>
          <h5 class="ld-fh-element relative mb0/5em text-18">
            {{ $service->title }}
          </h5>
          <p
            class="ld-fh-element relative mb-0/5em text-14 leading-22"
          >
            {{ $service->description }}
          </p>
        </div>
      </div>
    </div>
    @endforeach
     <!-- // -->
   </div>
 </div>
</section>
<!-- End What We Do -->