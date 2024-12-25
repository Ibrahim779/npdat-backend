<!-- start download Nabdaat app  -->
<section
class="lqd-section testimonial py-100 bg-center bg-cover relative transition-all bg-gray-200"
>
<div class="container">
  <div class="row">
    <div
      class="col col-12 col-xl-8 relative sm:p-0"
      style="
        color: #101f2e;
        font-size: 2rem;
        line-height: 1.3;
        text-align: center;
        font-weight: 700;
      "
    >
      {{$npdatSetting->getDownloadTitle()}}
    </div>
    <div
      class="col col-12 col-xl-4 relative sm:p-0"
      style="
        display: flex;
        justify-content: center;
        align-items: center;
      "
    >
      <a
        class=""
        style="
          text-align: center;
          background: #101f2e;
          padding: 1rem 2rem;
          border-radius: 1rem;
          color: #fff;
          cursor: pointer;
          font-weight: 500;
          border: 2px solid #101f2e;
        "
        href="{{$npdatSetting->download_link}}"
      >
        App Store <br />
        Google Play
      </a>
    </div>
  </div>
</div>
</section>
<!-- end download nabdaat app  -->