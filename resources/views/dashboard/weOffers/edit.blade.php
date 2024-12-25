@extends('dashboard.layout.app')
@section('title',$weOffer->name)
@section('main_folder', __('main.weOffers'))
@section('sub_folder', $weOffer->name)
@section('content')
@can('delete weOffer')
@include('dashboard.components.delete-modal', ['action' => route('admin.weOffers.destroy',$weOffer->id), 'id' =>
$weOffer->id ])
@endcan
<form action="{{route('admin.weOffers.update',$weOffer->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')
   <div class="row">
      <div class="col-lg-12 text-right d-flex justify-end">
         @can('delete weOffer')
         <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete_{{ $weOffer->id }}"
            class="btn btn-outline-danger mb-0 mt-lg-0 mx-2 mt-2">@lang('main.delete')</button>
         @endcan
         <button type="submit" class="btn btn-primary mb-0 me-lg-0 mt-lg-0 mt-2">@lang('main.save')</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col-lg-12 mt-lg-0 mt-4">
         <div class="card">
            <div class="card-header">
               <div class="d-flex justify-content-between">
                  <div>
                     <h5 class="mb-0">@lang('main.weOffer')</h5>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                           <div class="form-group">
                              <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                                 <div class="avatar-edit ">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image" />
                                    <label for="imageUpload"><img
                                          src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                                 </div>
                                 <div class="avatar-preview" style="height: 340px;">
                                    <div id="imagePreview"
                                       style="background-image: url('{{$weOffer->img}}');">
                                    </div>
                                 </div>
                              </div>
                              @error('image')
                              <div class="text text-danger">{{$message}}</div>
                              @enderror
                           </div>
                  </div>
                  <div class="col-8 col-sm-8 mt-3 mt-sm-0">
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.name_en')</label>
                           <input class="form-control" name="name[en]" type="text" value="{{old('name.en', $weOffer->getTranslation('name', 'en'))}}" />
                           @error('name.en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.name_ar')</label>
                           <input class="form-control" name="name[ar]" type="text" value="{{old('name.ar', $weOffer->getTranslation('name', 'ar'))}}" />
                           @error('name.ar')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.title_en')</label>
                           <input class="form-control" name="title[en]" type="text" value="{{old('title.en', $weOffer->getTranslation('title', 'en'))}}" />
                           @error('title.en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.title_ar')</label>
                           <input class="form-control" name="title[ar]" type="text" value="{{old('title.ar', $weOffer->getTranslation('title', 'ar'))}}" />
                           @error('title.ar')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.description_en')</label>
                           <textarea rows="5" class="form-control" name="description[en]" type="text">{{old('description.en', $weOffer->getTranslation('description', 'en'))}}</textarea>
                           @error('description.en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.description_ar')</label>
                           <textarea rows="5" class="form-control" name="description[ar]" type="text">{{old('description.ar', $weOffer->getTranslation('description', 'ar'))}}</textarea>
                           @error('description.ar')
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