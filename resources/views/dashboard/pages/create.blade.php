@extends('dashboard.layout.app')
@section('title',trans('main.create'))
@section('main_folder', __('main.pages'))
@section('sub_folder', __('main.create'))
@section('content')
<form action="{{route('admin.web.pages.store')}}" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="row">
      <div class="col-lg-12 text-right d-flex justify-content-end">
         <button type="submit" class="btn btn-primary mb-0 mt-lg-0 mt-2">@lang('main.save')</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col-lg-12 mt-lg-0 mt-4">
         <div class="card">
            <div class="card-img-top">
               <div class="avatar-upload mb-0">
                  <div class="avatar-edit">
                     <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image" />
                     <label for="imageUpload"><img
                           src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                  </div>
                  <div class="avatar-preview" style="height: 400px">
                     <div id="imagePreview" style="background-image: url('{{asset('dashboard/images/page.svg')}}');">
                     </div>
                  </div>
               </div>
               @error('image')
               <div class="text text-danger">{{$message}}</div>
               @enderror
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12 d-flex justify-content-end">
                     <p class="text-md text-primary me-3 my-auto">@lang('main.published')</p>
                     <div class="form-check form-switch my-auto">
                        <input class="form-check-input" name="status" value="1" type="checkbox"
                           id="flexSwitchCheckDefault2">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                     <div class="form-group">
                        <label>@lang('main.title_en')</label>
                        <input class="form-control" name="title_en" type="text" value="{{old('title_en')}}" />
                        @error('title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                     <div class="form-group">
                        <label>@lang('main.title_ar')</label>
                        <input class="form-control" name="title_ar" type="text" value="{{old('title_ar')}}" />
                        @error('title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                     @error('body_en')
                     <div class="text text-danger">{{$message}}</div>
                     @enderror
                     <textarea class="form-control text-editor" name="body_en"
                        style="overflow:hidden">{{old('body_en')}}</textarea>
                  </div>

                  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                     @error('body_ar')
                     <div class="text text-danger">{{$message}}</div>
                     @enderror
                     <textarea class="form-control text-editor" name="body_ar"
                        style="overflow:hidden">{{old('body_ar')}}</textarea>
                  </div>
               </div>
               <div class="row mt-4">
                  <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                     <label>@lang('main.description')</label>
                     <input class="form-control" name="description" type="text" value="{{old('description')}}" />
                     @error('description')
                     <div class="text text-danger">{{$message}}</div>
                     @enderror
                  </div>
                  <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                     <div class="form-group">
                        <label>@lang('main.keywords')</label>
                        <input class="form-control" name="keywords" type="text" value="{{old('keywords')}}" />
                        @error('keywords')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                     <div class="form-group">
                        <label>@lang('main.position')</label>
                        <select class="form-control" name="position" id="choices-position">
                           <option value="{{null}}">@lang('main.select_position')</option>
                           @forelse ($positions as $key => $position)
                           <option @selected(old('position')===$key) value="{{ $key }}">{{ $position }}</option>
                           @empty
                           <option value="">@lang('main.no_position')</option>
                           @endforelse
                        </select>
                        @error('position')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-footer text-center">
               <button type="submit" class="btn btn-primary mb-0 ms-lg-auto me-lg-0 me-auto">@lang('main.save')</button>
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
<script src="{{asset('dashboard/js/plugins/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('dashboard/js/plugins/tinymce/tinymce-init.js')}}"></script>
@endpush