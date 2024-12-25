@extends('dashboard.layout.app')
@section('title',trans('main.pages'))
@section('main_folder', __('main.website'))
@section('sub_folder', __('main.pages'))
@section('content')
<div class="row">
   @foreach ($pages as $page)
   <div class="col-lg-3 col-sm-6 mt-lg-0 mt-lg-6">
      <div class="card">
         <img class="card-img-top" style="max-height: 165px;" src="{{$page->img}}">
         <div class="position-relative"
            style="height: 50px;overflow: hidden;margin-top: -50px;z-index:2;position: relative;">
            <div class="position-absolute w-100 top-0" style="z-index: 1;">
               <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                  <defs>
                     <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                     </path>
                  </defs>
                  <g class="moving-waves">
                     <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                     <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                     <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                     <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                     <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                     <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                  </g>
               </svg>
            </div>
         </div>
         <div class="card-body">
            <div class="d-flex justify-between">
               <h4>
                  {{$page->title}}
               </h4>
               <div class="form-check form-switch">
                  <input @checked($page->status) class="form-check-input" type="checkbox" id="flexSwitchCheckHumidity"
                  onclick="handleStatus('{{route('admin.web.pages.changeStatus',$page->id)}}')">
               </div>
            </div>
            <a href="{{route('admin.web.pages.edit',$page->id)}}"
               class="text-primary icon-move-right">@lang('main.edit')
               <i class="fas fa-arrow-right text-xs mx-1 flip-horizontally" aria-hidden="true"></i>
            </a>
         </div>
      </div>
   </div>
   @endforeach
   <div class="col-lg-3 col-sm-6 mt-lg-0 mt-lg-6">
      <div class="card h-100">
         <div class="card-body d-flex flex-column justify-content-center text-center">
            <a href="{{route('admin.web.pages.create')}}">
               <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
               <h5 class="text-secondary">@lang('main.new_page')</h5>
            </a>
         </div>
      </div>
   </div>
</div>
@endsection
@push('script')
<script src="{{asset('dashboard/js/plugins/datatables.js')}}"></script>
<script>
   if (document.getElementById('products-list')) {
     const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
       searchable: true,
       fixedHeight: false,
      "paging": false
     });
   };
</script>
<script>
   function handleStatus(url){
      $.ajax({
         type: "POST",
         url: url,
         data: {
        "_token": "{{ csrf_token() }}",
        },
         success: function (response) {
            alert('Saved Successfully')
         }
      });
   }
</script>
@endpush