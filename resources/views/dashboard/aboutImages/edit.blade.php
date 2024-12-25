@extends('dashboard.layout.app')
@section('title',$aboutImage->name)
@section('main_folder', __('main.aboutImages'))
@section('sub_folder', $aboutImage->name)
@section('content')
{{-- @can('delete aboutImage')
@include('dashboard.components.delete-modal', ['action' => route('admin.aboutImages.destroy',$aboutImage->id), 'id' =>
$aboutImage->id ])
@endcan --}}
<form action="{{route('admin.aboutImages.update',$aboutImage->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')
   <div class="row">
      <div class="col-lg-12 text-right d-flex justify-end">
         {{-- @can('delete aboutImage')
         <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete_{{ $aboutImage->id }}"
            class="btn btn-outline-danger mb-0 mt-lg-0 mx-2 mt-2">@lang('main.delete')</button>
         @endcan --}}
         <button type="submit" class="btn btn-primary mb-0 me-lg-0 mt-lg-0 mt-2">@lang('main.save')</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col-lg-12 mt-lg-0 mt-4">
         <div class="card">
            <div class="card-header">
               <div class="d-flex justify-content-between">
                  <div>
                     <h5 class="mb-0">@lang('main.aboutImage')</h5>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-3 col-sm-3 mt-3 mt-sm-0">
                           <div class="form-group">
                              <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                                 <div class="avatar-edit ">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image" />
                                    <label for="imageUpload"><img
                                          src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                                 </div>
                                 <div class="avatar-preview" style="height: 180px;">
                                    <div id="imagePreview"
                                       style="background-image: url('{{$aboutImage->img}}');">
                                    </div>
                                 </div>
                              </div>
                              @error('image')
                              <div class="text text-danger">{{$message}}</div>
                              @enderror
                           </div>
                  </div>
                  <div class="col-9 col-sm-9 mt-3 mt-sm-0">
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.title_en')</label>
                           <input class="form-control" name="title[en]" type="text" value="{{old('title.en', $aboutImage->getTranslation('title', 'en'))}}" />
                           @error('title.en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.title_ar')</label>
                           <input class="form-control" name="title[ar]" type="text" value="{{old('title.ar', $aboutImage->getTranslation('title', 'ar'))}}" />
                           @error('title.ar')
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