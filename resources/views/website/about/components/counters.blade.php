<!-- Start Counters -->
<section
class="lqd-section counters bg-cover bg-top-center transition-all pt-110 pb-75"
style="
  background-image: url(./assets/images/demo/company/about/counters.jpg);
"
dir="ltr"
>
<div
  class="background-overlay bg-transparent transition-all opacity-100"
  style="
    background-image: linear-gradient(
      137deg,
      #184341 0%,
      #2d3544d4 100%
    );
  "
></div>
<div class="container">
  <div class="row">
    <div
      class="col col-6 col-md-3 flex flex-col items-center justify-center"
    >
      <div class="icon-wrapper text-center mb-20">
        <div
          class="inline-block transition-all border-white text-center text-50 leading-1em text-white"
        >
          <i
            aria-hidden="true"
            class="lqd-icn-ess icon-lqd-compass w-1em h-1em relative block"
          ></i>
        </div>
      </div>
      <div
        class="lqd-counter relative text-center lqd-counter-default text-white mb-30 transition-all"
      >
        <div
          class="lqd-counter-element relative mb-0/3em text-54 font-bold tracking-1/5"
          data-enable-counter="true"
          data-counter-options='{"targetNumber":"{{$aboutSetting->counter_1_num}}+"}'
        >
          <span class="block">{{$aboutSetting->counter_1_num}}+</span>
        </div>
        <span class="lqd-counter-text text-white-70">
          {{$aboutSetting->getCounter1Title()}}
        </span>
      </div>
    </div>
    <div
      class="col col-6 col-md-3 flex flex-col items-center justify-center"
    >
      <div class="icon-wrapper text-center mb-20">
        <div
          class="inline-block transition-all border-white text-center text-50 leading-1em text-white"
        >
          <i
            aria-hidden="true"
            class="lqd-icn-ess icon-speech-bubble w-1em h-1em relative block"
          ></i>
        </div>
      </div>
      <div
        class="lqd-counter relative text-center lqd-counter-default text-white mb-30 transition-all"
      >
        <div
          class="lqd-counter-element relative mb-0/3em text-54 font-bold tracking-1/5"
          data-enable-counter="true"
          data-counter-options='{"targetNumber":"{{$aboutSetting->counter_2_num}}"}'
        >
          <span class="block">{{ $aboutSetting->counter_2_num }}</span>
        </div>
        <span class="lqd-counter-text text-white-70">
          {{$aboutSetting->getCounter2Title()}}
        </span>
      </div>
    </div>
    <div
      class="col col-6 col-md-3 flex flex-col items-center justify-center"
    >
      <div class="icon-wrapper text-center mb-20">
        <div
          class="inline-block transition-all border-white text-center text-50 leading-1em text-white"
        >
          <i
            aria-hidden="true"
            class="lqd-icn-ess icon-lqd-user w-1em h-1em relative block"
          ></i>
        </div>
      </div>
      <div
        class="lqd-counter relative text-center lqd-counter-default text-white mb-30 transition-all"
      >
        <div
          class="lqd-counter-element relative mb-0/3em text-54 font-bold tracking-1/5"
          data-enable-counter="true"
          data-counter-options='{"targetNumber":"{{$aboutSetting->counter_3_num}}k+"}'
        >
          <span class="block">{{$aboutSetting->counter_3_num}}k+</span>
        </div>
        <span class="lqd-counter-text text-white-70">
          {{$aboutSetting->getCounter3Title()}}  
        </span
        >
      </div>
    </div>
    <div
      class="col col-6 col-md-3 flex flex-col items-center justify-center"
    >
      <div class="icon-wrapper text-center mb-20">
        <div
          class="inline-block transition-all border-white text-center text-50 leading-1em text-white"
        >
          <i
            aria-hidden="true"
            class="lqd-icn-ess icon-lqd-atom w-1em h-1em relative block"
          ></i>
        </div>
      </div>
      <div
        class="lqd-counter relative text-center lqd-counter-default text-white mb-30 transition-all"
      >
        <div
          class="lqd-counter-element relative mb-0/3em text-54 font-bold tracking-1/5"
          data-enable-counter="true"
          data-counter-options='{"targetNumber":"{{$aboutSetting->counter_4_num}}+"}'
        >
          <span class="block">{{$aboutSetting->counter_4_num}}+</span>
        </div>
        <span class="lqd-counter-text text-white-70"
          >
          {{$aboutSetting->getCounter4Title()}}
          </span
        >
      </div>
    </div>
  </div>
</div>
</section>
<!-- End Counters -->