@extends('dashboard.layout.app')
@section('title',$rova_review->comment)
@section('main_folder', __('main.rova_reviews'))
@section('sub_folder', $rova_review->comment)
@section('content')
@can('delete rovareview')
@include('dashboard.components.delete-modal', ['action' => route('admin.rova-reviews.destroy',$rova_review->id), 'id' =>
$rova_review->id ])
@endcan
<form action="{{route('admin.rova-reviews.update',$rova_review->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')
   <div class="row">
      <div class="col-lg-12 text-right d-flex justify-end">
         @can('delete rovareview')
         <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete_{{ $rova_review->id }}"
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
                     <h5 class="mb-0">@lang('main.rova_review')</h5>
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
                                       style="background-image: url('{{$rova_review->img}}');">
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
                           <label>@lang('main.comment_en')</label>
                           <input class="form-control" name="comment[en]" type="text" value="{{old('comment.en', $rova_review->getTranslation('comment', 'en'))}}" />
                           @error('comment.en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.comment_ar')</label>
                           <input class="form-control" name="comment[ar]" type="text" value="{{old('comment.ar', $rova_review->getTranslation('comment', 'ar'))}}" />
                           @error('comment.ar')
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