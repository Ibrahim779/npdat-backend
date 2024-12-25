@extends('website.layout.app')
@section('title',__('web.invest'))
@section('content')

<!--Banner Section-->
<x-banner title="نسعى لتطوير عمليات التمويل والاستثمار
من أجل بناء اقتصاد مزدهر" :bread="__('web.invest')" />

<!--Invest Page-->
<div class="invest">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12 relative">
                <div class="text-content">
                    <h2>لماذا تستثمر في <span>ركيز ؟</span></h2>
                    <ul>
                        <li>- عوائد منتظمة ويتم سداد القيمة الأسمية في تاريخ الاستحقاق.</li>
                        <li>- طرح صكوك منوعة مرنة لتلبية احتياجات المستثمرين </li>
                        <li>-ﺗﻮزﻳﻊ أرﺑﺎح دورﻳﺔ باجال مختلفة (رﺑﻌﻲ، ﻧﺼﻒ ﺳﻨﻮي، ﺳﻨﻮي).</li>
                        <li>-كسب ثقة عملائنا وشركائنا من خلال تطبيق القوانين والأنظمة والأحكام الواضحة.</li>
                        <li>-نسير على منهج شرعي في تعاملاتنا وفقاً للقيم والمبادئ الإسلامية.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 relative">
                <div class="img-content">
                    <img src="{{asset('website/images/invest/invest.png')}}" alt=" ">
                </div>
                <img class="investment-main-img" src="{{asset('website/images/invest/invest-img.png')}}" alt=" ">
            </div>
        </div>
    </div>
</div>
<!--Financial-->
<div class="fanancial relative pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <x-feature icon="{{asset('website/images/icon/7-icon.svg')}}" title="معاملات رقمية وإلكترونية"
                            desc="تتم جميع إجراءات التداول رقميًا، حيث يتم الربط إﻟﻜﺘﺮوﻧﻴﺎً ﻣﻊ اﻟﻌﺪﻳﺪ ﻣﻦ ﻣﻘﺪﻣﻲ اﻟﺒﻴﺎﻧﺎت واﻟﺨﺪﻣﺎت." />

                        <x-feature icon="{{asset('website/images/icon/8-icon.svg')}}" title="أرﺑﺎح دورﻳﺔ مستقرة"
                            desc="تتميز الصكوك بدفع معدل أرباح ثابت لا يتغير مع الوقت." />

                        <x-feature icon="{{asset('website/images/icon/6-icon.svg')}}" title="مطابقة لأحكام الشريعة"
                            desc="تمتثل جميع تعاملاتنا للقيم والمبادئ الإسلامية والأنظمة التشريعية" />

                        <x-feature icon="{{asset('website/images/icon/5-icon.svg')}}" title="منافع اﺳﺘﺜﻤﺎرﻳﺔ"
                            desc="ﺗﻌﺘﺒﺮ اﻟﺼﻜﻮك ذات منفعة عالية وﻋﺎﺋﺪ ﻣﺮﺗﻔﻊ ﻣﻘﺎرﻧﺔً ﻣﻊ ﻓﺌﺎت اﻟﺄﺻﻮل اﻟﺄﺧﺮى." />

                        <x-feature icon="{{asset('website/images/icon/8-icon.svg')}}" title="تنويع في الاستثمار"
                            desc="تنويع المحفظة الاستثمارية هو استراتيجية استثمار تستخدم لتوزيع المخاطر عبر عدد من فئات الأصول." />

                        <x-feature icon="{{asset('website/images/icon/6-icon.svg')}}" title="سوق صكوك متكامل"
                            desc="يتضمن سوق الصكوك قبولاً أوسع وفقاً لمعايير ومتطلبات الشريعة الإسلامية لضمان السيولة والطلب وزيادة نمو أسواق رأس المال الإسلامية في المملكة." />
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12">
                <div class="invest-now">
                    {{-- <form action="#footer"> --}}
                        <button type="button" onclick="location.href='#footer';"
                            class="hvr-shutter-out-horizontal">استثمر الآن</button>
                        {{--
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>


<!--Latest investment opportunities-->
{{-- <div class="latest-investment">
    <div class="container">
        <div class="main-title text-center">
            <h2>آخر الفرص الإستثمارية</h2>
            <img src="{{asset('website/images/icon/Lines.svg')}}" alt=" ">
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                <div class="content">
                    <span>15% عائد</span>
                    <div class="icon">
                        <img src="{{asset('website/images/icon/chance.svg')}}" alt=" ">
                    </div>
                    <h3>شركة التوريد</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <p class="title-money">المبلغ المستثمر</p>
                        <p class="money">80,000 ر.س</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                <div class="content">
                    <span>15% عائد</span>
                    <div class="icon">
                        <img src="{{asset('website/images/icon/chance.svg')}}" alt=" ">
                    </div>
                    <h3>شركة التوريد</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <p class="title-money">المبلغ المستثمر</p>
                        <p class="money">80,000 ر.س</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                <div class="content">
                    <span>15% عائد</span>
                    <div class="icon">
                        <img src="{{asset('website/images/icon/chance.svg')}}" alt=" ">
                    </div>
                    <h3>شركة التوريد</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <p class="title-money">المبلغ المستثمر</p>
                        <p class="money">80,000 ر.س</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                <div class="content">
                    <span>15% عائد</span>
                    <div class="icon">
                        <img src="{{asset('website/images/icon/chance.svg')}}" alt=" ">
                    </div>
                    <h3>شركة التوريد</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <p class="title-money">المبلغ المستثمر</p>
                        <p class="money">80,000 ر.س</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--Getting instant bill financing just got easier-->
{{-- <div class="get-financing bg-white" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
        <div class="main-title text-center">
            <h2> <span class="line-desplay"> كيف تستثمر في </span> ركيز ؟ </h2>
            <img src="{{asset('website/images/icon/Lines.svg')}}" alt=" ">
        </div>
        <div class="row gutter">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 col">
                <div class="item text-center">
                    <div class="img">
                        <img src="{{asset('website/images/icon/invest1.svg')}}" alt=" ">
                    </div>
                    <p>سجل في المنصة</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 col">
                <div class="item text-center">
                    <div class="img">
                        <img src="{{asset('website/images/icon/invest2.svg')}}" alt=" ">
                    </div>
                    <p>استعرض الفرص المتاحة</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 col">
                <div class="item text-center">
                    <div class="img">
                        <img src="{{asset('website/images/icon/invest3.svg')}}" alt=" ">
                    </div>
                    <p>استثمر بأي فرصة</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 col">
                <div class="item text-center last-item">
                    <div class="img">
                        <img src="{{asset('website/images/icon/invest4.svg')}}" alt=" ">
                    </div>
                    <p>احصل على الأرباح</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="get-financing" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
        <div class="main-title text-center">
            <h2><span>كيف تستثمر في </span> ركيز؟</h2>
            <img src="{{ asset('website/images/icon/Lines.svg') }}" alt=" ">
        </div>
        <div class="row financy-row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="svg-box-financy" data-aos="zoom-in">
                    <div class="svg-icon-financy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.116" height="48.24"
                            viewBox="0 0 44.116 48.24">
                            <g id="Group_36135" data-name="Group 36135" transform="translate(-2 -1)">
                                <g id="_30_Judicial_System_Law_Law_Court" data-name="30 Judicial System, Law, Law Court"
                                    transform="translate(2 1)">
                                    <path class="animatonetime" fill="none" stroke="#fff" stroke-width="6"
                                        stroke-miterlimit="10" id="Path_16892" data-name="Path 16892"
                                        d="M6.385,42.662v-30.7A2.193,2.193,0,0,1,8.578,9.771h2.587a6.578,6.578,0,0,0,6.183,4.385H26.12A6.578,6.578,0,0,0,32.3,9.771h2.587a2.193,2.193,0,0,1,2.193,2.193V22.927h4.385V11.964a6.578,6.578,0,0,0-6.578-6.578H32.3A6.578,6.578,0,0,0,26.12,1H17.349a6.578,6.578,0,0,0-6.183,4.385H8.578A6.578,6.578,0,0,0,2,11.964v30.7A6.578,6.578,0,0,0,8.578,49.24H19.542V44.855H8.578A2.193,2.193,0,0,1,6.385,42.662ZM17.349,5.385H26.12a2.193,2.193,0,0,1,0,4.385H17.349a2.193,2.193,0,0,1,0-4.385Zm26.773,23.66a7.017,7.017,0,0,0-9.692,0l-9.867,9.867a2.193,2.193,0,0,0-.636,1.557v6.578A2.193,2.193,0,0,0,26.12,49.24H32.7a2.193,2.193,0,0,0,1.557-.636l9.867-9.867a6.885,6.885,0,0,0,0-9.692Zm-3.114,6.578L31.8,44.855H28.313V41.368l9.231-9.209a2.478,2.478,0,0,1,3.465,0,2.434,2.434,0,0,1,0,3.465Zm-10.5-12.7H12.964V18.542H30.505ZM12.964,27.313H26.12V31.7H12.964Z"
                                        transform="translate(-2 -1)" fill="#a27a2b" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <p>التسجيل في المنصة</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="svg-box-financy" data-aos="zoom-in">
                    <div class="svg-icon-financy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="48.889" viewBox="0 0 40 48.889">
                            <g id="Group_36014" data-name="Group 36014" transform="translate(-3 -1)">
                                <g id="_10_Mark_List_Checklist_Document_" data-name="10 Mark List, Checklist, Document,"
                                    transform="translate(3 1)">
                                    <path class="second-svg animatonetime" fill="none" stroke="#fff" stroke-width="6"
                                        stroke-miterlimit="10" id="Path_16882" data-name="Path 16882"
                                        d="M36.333,49.889H9.667A6.667,6.667,0,0,1,3,43.222V7.667A6.667,6.667,0,0,1,9.667,1H36.333A6.667,6.667,0,0,1,43,7.667V43.222A6.667,6.667,0,0,1,36.333,49.889ZM9.667,5.444A2.222,2.222,0,0,0,7.444,7.667V43.222a2.222,2.222,0,0,0,2.222,2.222H36.333a2.222,2.222,0,0,0,2.222-2.222V7.667a2.222,2.222,0,0,0-2.222-2.222Zm6.822,17.778a2.222,2.222,0,0,0,1.622-.889l6.667-8.889-3.556-2.667-5.133,6.844-2.622-2.644-3.156,3.156,4.444,4.444a2.222,2.222,0,0,0,1.578.644ZM34.111,9.889H27.444v4.444h6.667Zm0,8.889H27.444v4.444h6.667Zm0,8.889H11.889v4.444H34.111Zm0,8.889H11.889V41H34.111Z"
                                        transform="translate(-3 -1)" fill="#a27a2b" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <p>التحقق من حالة الطلب</p>
                </div>

            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="svg-box-financy">
                    <div class="svg-icon-financy" data-aos="zoom-in">
                        <svg xmlns="http://www.w3.org/2000/svg" width="46.282" height="48" viewBox="0 0 46.282 48">
                            <g id="Group_36019" data-name="Group 36019" transform="translate(-2 -2)">
                                <g id="_x31_0" transform="translate(2 2)">
                                    <path class="third-svg animatonetime" fill="none" stroke="#fff" stroke-width="6"
                                        stroke-miterlimit="10" id="Path_16884" data-name="Path 16884"
                                        d="M40.217,36.078a1.712,1.712,0,0,0-2.424,0l-.509.509-2.76-2.774A18.821,18.821,0,0,0,38.852,15.2a1.714,1.714,0,1,0-3.271,1.025,15.423,15.423,0,0,1-2.724,14.3V22.571a1.714,1.714,0,0,0-1.714-1.714H24.286a1.714,1.714,0,0,0-1.714,1.714v1.714H17.429A1.714,1.714,0,0,0,15.714,26v1.714H10.571a1.714,1.714,0,0,0-1.714,1.714v1.1A15.425,15.425,0,0,1,27.034,6.714a1.714,1.714,0,0,0,1.375-3.141A18.843,18.843,0,0,0,9.339,35.754a1.731,1.731,0,0,0,.211.158,18.715,18.715,0,0,0,22.39.168l2.918,2.933-.494.494a1.712,1.712,0,0,0,0,2.424l6.857,6.857a4.139,4.139,0,0,0,5.853,0,4.147,4.147,0,0,0,0-5.853ZM26,24.286h3.429v9.391A15.437,15.437,0,0,1,26,35.386v-11.1ZM15.714,31.143v4.243a15.291,15.291,0,0,1-3.429-1.709V31.143Zm3.429,5.042v-8.47h3.429v8.47a14.578,14.578,0,0,1-3.429,0ZM44.65,46.362a.6.6,0,0,1-1,0L38,40.719l1-1,5.645,5.645a.711.711,0,0,1,0,1Z"
                                        transform="translate(-2 -2)" fill="#a27a2b" />
                                    <path class="third-svg animatonetime" fill="none" stroke="#fff" stroke-width="6"
                                        stroke-miterlimit="10" id="Path_16886" data-name="Path 16886"
                                        d="M6.714,17.714a1.714,1.714,0,0,0,0,3.429c12.3,0,18.187-3.53,25.839-11.378a1.709,1.709,0,0,0,3.3-.622V5.714A1.714,1.714,0,0,0,34.143,4H30.714a1.7,1.7,0,0,0-.555,3.317c-6.835,7.054-11.769,10.4-23.445,10.4Z"
                                        transform="translate(0.143 -0.571)" fill="#a27a2b" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <p>الدراسة الائتمانية</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="svg-box-financy lastitem">
                    <div class="svg-icon-financy" data-aos="zoom-in">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41.455" height="48" viewBox="0 0 41.455 48">
                            <g id="Group_36020" data-name="Group 36020" transform="translate(-1 -1)">
                                <g id="_06_bagde_award_law" data-name="06 bagde,award,law" transform="translate(1 1)">
                                    <path class="four-svg animatonetime" fill="none" stroke="#fff" stroke-width="6"
                                        stroke-miterlimit="10" id="Path_16887" data-name="Path 16887"
                                        d="M7.545,40.272H22.818v4.364H7.545A6.545,6.545,0,0,1,1,38.09V7.545A6.545,6.545,0,0,1,7.545,1H29.363a6.545,6.545,0,0,1,6.545,6.545V9.574H31.545V7.545a2.182,2.182,0,0,0-2.182-2.182H7.545A2.182,2.182,0,0,0,5.364,7.545V38.09A2.182,2.182,0,0,0,7.545,40.272ZM29.363,25h4.364V20.636H29.363ZM20.636,11.909H9.727v4.364H20.636ZM9.727,33.727H20.636V29.363H9.727Zm0-13.091V25h8.727V20.636ZM38.09,31.545V46.818a2.182,2.182,0,0,1-1.353,2.007,1.833,1.833,0,0,1-.829.175,2.182,2.182,0,0,1-1.549-.633L31.545,45.53l-2.815,2.836A2.2,2.2,0,0,1,25,46.818V31.545a10.909,10.909,0,1,1,13.091,0Zm-4.364,2.007a11.018,11.018,0,0,1-4.364,0V41.6L30,40.949a2.182,2.182,0,0,1,3.1,0l.633.655ZM38.09,22.818a6.545,6.545,0,1,0-6.545,6.545A6.545,6.545,0,0,0,38.09,22.818Z"
                                        transform="translate(-1 -1)" fill="#a27a2b" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <p>طرح الصكوك</p>
                </div>
            </div>

        </div>
        {{-- <div class="row">
            <div class="col-lg-12 col-md-12 col-12 relative">
                <div class="last-item">
                    <div class="img-content" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <img src="{{ asset('website/images/home/financi-img.png') }}" alt="">
                    </div>
                    <div class="text-content">
                        <h4>الحصول على تمويل فواتير فوري أصبح أسهل</h4>
                        <p>نحن لا نعتبر الأنظمة الشرعية مجرد إجراء أو مسؤولية قسم إداري منفصل، فنحن نهتم
                            بالامتثال للقيم والمبادئ الإسلامية في تعاملاتنا، كما نسعى إلى كسب ثقة عملائنا
                            وشركائنا من خلال تطبيق القوانين والأنظمة والأحكام</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!--Questions-->
<x-questions :questions="$questions" />
@endsection
@push('last-script')
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        rtl: true,
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