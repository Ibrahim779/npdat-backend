@extends('dashboard.layout.app')
@section('title',__('main.privacy_policy'))
@section('main_folder', __('main.website'))
@section('sub_folder', __('main.privacy_policy'))
@section('content')
<form action="{{route('admin.privacy.update',$privacy->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')
   <div class="row">
      <div class="col-lg-12 text-right d-flex  justify-content-end">
         <button type="submit" class="btn btn-primary mb-0 mt-lg-0 mt-2">@lang('main.save')</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col-lg-12 mt-lg-0 mt-4">
         <div class="card">
            <div class="card-header">
               <div class="d-lg-flex">
                  <div>
                     <h5 class="mb-0">@lang('main.privacy_policy')</h5>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                     <label>@lang('main.body_en')</label>
                     @error('body_en')
                     <div class="text text-danger">{{$message}}</div>
                     @enderror
                     <textarea class="form-control text-editor" name="body_en"
                        style="overflow:hidden">{{old('body_en') ?? $privacy->body_en}}</textarea>
                  </div>
                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                     <label>@lang('main.body_ar')</label>
                     @error('body_ar')
                     <div class="text text-danger">{{$message}}</div>
                     @enderror
                     <textarea class="form-control text-editor" name="body_ar"
                        style="overflow:hidden">{{old('body_ar') ?? $privacy->body_ar}}</textarea>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>
@endsection
@push('script')
<script src="{{asset('dashboard/js/plugins/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('dashboard/js/plugins/tinymce/tinymce-init.js')}}"></script>
@endpush