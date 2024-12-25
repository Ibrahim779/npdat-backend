@extends('website.layout.app')
@section('title', __('web.finance'))
@section('content')

<!--Banner Section-->
<x-banner title="تمويل للمنشآت سهل، سريع، وفوري.." :bread="__('web.finance')" />


<!--Get your finance-->
<div class="get-your-finance">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="right-side">
                    <span>احصل على تمويلك</span>
                    <h3>ما هو تمويل الفواتير؟</h3>
                    <img src="{{asset('website/images/icon/Lines.svg')}}" alt=" ">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="left-side">
                    <p>يعتبر تمويل الفواتير أحد خيارات تمويل الأنشطة والشركات التي لا تحصل على مستحقاتها بشكل فوري، بل
                        ينوي عملائها دفعها في وقت آجل.
                        حيث يساعد هذا النوع من التمويل في الحصول على سيولة نقدية من قيمة الفواتير قبل استحقاقها، وحسن
                        إدارة التدفقات النقدية وإعادة الاستثمار في العمليات، والنمو بوقت أسرع مقارنة بانتظار العملاء حتى
                        يدفعوا التزاماتهم بالكامل.</p>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!--Finance sec-->
<div class="get-finance">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="img-content">
                    <img src="{{asset('website/images/finance/finance.jpg')}}" alt=" ">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-12">
                <div class="right-part" data-aos="zoom-in">
                    <h3>الحصول على تمويل منشآت فوري أصبح أسهل..</h3>
                    <p>تسعى ركيز لتوفير وتسهيل عملية تمويل المنشآت في المملكة، مما يسهم في تعزيز الاقتصاد الوطني
                        والتنمية المستدامة، ودعم الحركة الاقتصادية والتجارية.</p>
                    <p>
                        حيث تسهم ركيز المالية عبر منصتها في التمويل عبر إصدار أدوات الدين، وذلك لتلبية احتياج المنشات
                        الصغيرة والمتوسطة ومساعدتهم في الحصول على التمويل خلال فترة وجيزة.
                    </p>
                    {{-- <ul>
                        <li>الوصول الفوري للأموال</li>
                        <li>الوصول الفوري للأموال</li>
                        <li>الوصول الفوري للأموال</li>
                        <li>الوصول الفوري للأموال</li>
                        <li>الوصول الفوري للأموال</li>
                        <li>الوصول الفوري للأموال</li>
                    </ul> --}}
                    <div class="button-div">
                        <button class="hvr-shutter-out-horizontal">احصل على تمويل الآن</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-12">
                <div class="horizontal-text">
                    <p>لماذا التمويل من خلال ركيز ؟</p>
                </div>
            </div>


        </div>
    </div>
</div>
<!--Getting instant bill financing just got easier-->
<div class="bill-financing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7 col-md-10 col-sm-12 col-12">
                <div class="item text-center">
                    <h2 class="main-title">اطلب تمويل منشآتك<span> بكل سهولة..</span>
                    </h2>
                    <img src="{{asset('website/images/icon/Lines.svg')}}" alt=" ">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content first">
                                <img src="{{asset('website/images/icon/finance1.svg')}}" alt="Icon">
                                <h4>1- التسجيل في المنصة</h4>
                                <p>خطوات تسجيل بسيطة تمكنك من طلب التمويل أو الاستثمار بكل سهولة.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content">
                                <img src="{{asset('website/images/icon/finance2.svg')}}" alt="Icon">
                                <h4>2- إرفاق المستندات </h4>
                                <p>قم بإرفاق مستندات مهمة مثل: اﻟﺴﺠﻞ اﻟﺘﺠﺎري، ﻋﻘﺪ اﻟﺘﺄﺳﻴﺲ، اﻟﻘﻮاﺋﻢ اﻟﻤﺎﻟﻴﺔ.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content">
                                <img src="{{asset('website/images/icon/finance3.svg')}}" alt="Icon">
                                <h4>3- الدراسة الائتمانية</h4>
                                <p>ﻳﻘﻮم ﻓﺮﻳﻖ متخصص وذو خبرة ﺑﺪراﺳﺔ طلبات التمويل ﺑﺸﻜﻞ مفصل، وﺑﺎﺳﺘﺨﺪام ﻧﻈﺎم اﺋﺘﻤﺎﻧﻲ دقيق.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content">
                                <img src="{{asset('website/images/icon/finance4.svg')}}" alt="Icon">
                                <h4>4- تقديم اﻟﻌﺮض اﻟﺘﻤﻮﻳﻠﻲ</h4>
                                <p>عرض تمويل واضح يحتوي معلومات عن حجم اﻟﺘﻤﻮﻳﻞ وﺗﻜﻠﻔﺘﻪ واﻟﺮﺳﻮم وﺟﺪول اﻟﺼﺮف واﻟﺴﺪاد.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content">
                                <img src="{{asset('website/images/icon/finance4.svg')}}" alt="Icon">
                                <h4>5- اصدار الصكوك </h4>
                                <p>يتم اصدار الصكوك لطرحها في المنصة للاستثمار بها</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content">
                                <img src="{{asset('website/images/icon/finance4.svg')}}" alt="Icon">
                                <h4>6- ﺻﺮف اﻟﺘﻤﻮﻳﻞ</h4>
                                <p>يصرف التمويل بعد اكتمال مبلغ الطرح واقفال الفرصة.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            {{-- <div class="col-lg-12 col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4> (بانتظار الموافقة) LN000180 <span>: تفاصيل التمويل</span></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h4>مدة سداد مبالغ التمويل</h4>
                                            <p>1 Months</p>
                                        </td>
                                        <td>
                                            <h4>مبلغ التمويل</h4>
                                            <p>SAR100,000</p>
                                        </td>
                                        <td>
                                            <h4>فاتورة صادرة الى</h4>
                                            <p>العثيم</p>
                                        </td>
                                        <td>
                                            <h4>رقم التمويل</h4>
                                            <p>LN000180</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>نسبة هامش الربح السنوي</h4>
                                            <p>N/A</p>
                                        </td>
                                        <td>
                                            <h4>رقم IP</h4>
                                            <p>77.31.237.211</p>
                                        </td>
                                        <td>
                                            <h4>تاريخ قبول الشروط</h4>
                                            <p>19/04/2020</p>
                                        </td>
                                        <td>
                                            <h4>تحديد منتج التمويل</h4>
                                            <p>Invoice Financing</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>تمت الموافقة على العقد من قبل</h4>
                                            <p>N/A</p>
                                        </td>
                                        <td>
                                            <h4>تاريخ الصرف</h4>
                                            <p>N/A</p>
                                        </td>
                                        <td>
                                            <h4>رسوم الترتيب</h4>
                                            <p>SAR0.00</p>
                                        </td>
                                        <td>
                                            <h4>اجمالي مبلغ هامش الربح</h4>
                                            <p>SAR0.00</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!--Questions-->
<x-questions class="pt-120" :questions="$questions" />

@endsection

@push('last-script')
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      loop:true,
      rtl:true,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        "@0.00": {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        "@0.75": {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        "@1.00": {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        "@1.50": {
          slidesPerView: 4,
          spaceBetween: 15,
        },
      },
    });
 
</script>
@endpush