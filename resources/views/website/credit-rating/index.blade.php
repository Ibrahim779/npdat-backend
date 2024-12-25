@extends('website.layout.app')
@section('title', __('web.credit-rating'))
@section('content')

<!--Banner Section-->
<x-banner :title="__('web.credit-rating')" />


<div class="about-rakeez pb-85 pt-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 relative">
            <div class="content credit-content">
               <h3>التصنيف <span>الائتماني</span></h3>
               <p class="des">تمتلك شركة ركيز قاعدة بيانات تحتوي على أدوات تحليل لتصنيف الشركات من أجل التقييم الائتماني للمنشآت طالبة التمويل، ويتم إجراء دراسة شاملة للمنشأة طالبة التمويل من حيث سجلها الائتماني وسجل ملاكها الائتماني.</p>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="img-content" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
               <img src="{{ asset('website/images/credit/credit.png') }}" alt=" ">
            </div>
         </div>
      </div>
   </div>
</div>
<!--risk rating-->
<div class="risk-rate">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-12">
            <h2 class="risk-title text-center">تصنيف <span>المخاطر</span></h2>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-aos="zoom-in-up">
               <div class="card-header">
                  <h2 class="text-center">A</h2>
               </div>
               <div class="card-body">
                  <p class="d-flex justify-content-between align-items-center">الحجم والموقع فى الصناعة <span>مرضية للغاية</span></p>
                  <p class="d-flex justify-content-between align-items-center">الإدارة <span>جيدة جدا</span></p>
                  <p class="d-flex justify-content-between align-items-center">قدرة السداد <span>قوية</span></p>
                  <p class="d-flex justify-content-between align-items-center">المديونية <span>منخفضة</span></p>
                  <p class="d-flex justify-content-between align-items-center">إدارة رأس المال العامل <span>قوية</span>
                  </p>
                  <p class="d-flex justify-content-between align-items-center">إدارة جودة الأصول <span>قوية</span></p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-aos="zoom-in-up">
               <div class="card-header">
                  <h2 class="text-center">B</h2>
               </div>
               <div class="card-body">
                  <p class="d-flex justify-content-between align-items-center">الحجم والموقع فى الصناعة <span> مرضية</span></p>
                  <p class="d-flex justify-content-between align-items-center">الإدارة <span>قوية إلى حد ما</span></p>
                  <p class="d-flex justify-content-between align-items-center">قدرة السداد <span>	قوية إلى حد ما</span></p>
                  <p class="d-flex justify-content-between align-items-center">المديونية <span>مقبولة</span></p>
                  <p class="d-flex justify-content-between align-items-center">إدارة رأس المال العامل <span>قوية إلى حد ما	</span>
                  </p>
                  <p class="d-flex justify-content-between align-items-center">إدارة جودة الأصول <span>قوية إلى حد ما	</span></p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-aos="zoom-in-up">
               <div class="card-header">
                  <h2 class="text-center">C</h2>
               </div>
               <div class="card-body">
                  <p class="d-flex justify-content-between align-items-center">الحجم والموقع فى الصناعة <span>صغير</span></p>
                  <p class="d-flex justify-content-between align-items-center">الإدارة <span>جيد</span></p>
                  <p class="d-flex justify-content-between align-items-center">قدرة السداد <span>مرضية وضمن الحدود</span></p>
                  <p class="d-flex justify-content-between align-items-center">المديونية <span>معتدلة</span></p>
                  <p class="d-flex justify-content-between align-items-center">إدارة رأس المال العامل <span>مرضية</span>
                  </p>
                  <p class="d-flex justify-content-between align-items-center">إدارة جودة الأصول <span>مرضية</span></p>
               </div>
            </div>
         </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card" data-aos="zoom-in-up">
               <div class="card-header">
                  <h2 class="text-center">D</h2>
               </div>
               <div class="card-body">
                  <p class="d-flex justify-content-between align-items-center">الحجم والموقع فى الصناعة <span>صغير</span></p>
                  <p class="d-flex justify-content-between align-items-center">الإدارة <span></span></p>
                  <p class="d-flex justify-content-between align-items-center">قدرة السداد <span>متوسطة</span></p>
                  <p class="d-flex justify-content-between align-items-center">المديونية <span>	مرتفعة لحد ما</span></p>
                  <p class="d-flex justify-content-between align-items-center">إدارة رأس المال العامل <span>متوسطة</span>
                  </p>
                  <p class="d-flex justify-content-between align-items-center">إدارة جودة الأصول <span>متوسطة</span></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('website.home.notify')



@endsection