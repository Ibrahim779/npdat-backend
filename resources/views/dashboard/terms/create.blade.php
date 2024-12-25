@extends('dashboard.layout.app')
@section('title',trans('main.create'))
@section('main_folder', __('web.terms_policy'))
@section('sub_folder', __('main.create'))
@section('content')
<form action="{{route('admin.terms.store')}}" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="row">
      <div class="col-lg-12 text-right d-flex justify-content-end">
         <button type="submit" class="btn btn-primary mb-0 mt-lg-0 mt-2">@lang('main.save')</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col-lg-12 mt-lg-0 mt-4">
         <div class="card">
            <div class="card-header">
               <div class="d-lg-flex">
                  <div>
                     <h5 class="mb-0">@lang('main.new_term')</h5>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.term_en')</label>
                           <input class="form-control" name="term_en" type="text" value="{{old('term_en')}}" />
                           @error('term_en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.term_ar')</label>
                           <input class="form-control" name="term_ar" type="text" value="{{old('term_ar')}}" />
                           @error('term_ar')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.body_en')</label>
                           <textarea rows="5" class="form-control" name="body_en">{{old('body_en')}}</textarea>
                           @error('body_en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.body_ar')</label>
                           <textarea rows="5" class="form-control" name="body_ar">{{old('body_ar')}}</textarea>
                           @error('body_ar')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('dashboard/js/plugins/imageUpload/upload.css')}}" type="text/css">
@endpush
@push('script')
<script src="{{asset('dashboard/js/plugins/imageUpload/upload.js')}}"></script>
@endpush