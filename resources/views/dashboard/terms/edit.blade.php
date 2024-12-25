@extends('dashboard.layout.app')
@section('title',$term->title)
@section('main_folder', __('web.terms_policy'))
@section('sub_folder', $term->title)
@section('content')
@can('delete term')
@include('dashboard.components.delete-modal', ['action' => route('admin.terms.destroy',$term->id), 'id' =>
$term->id ])
@endcan
<form action="{{route('admin.terms.update',$term->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')
   <div class="row">
      <div class="col-lg-12 text-right d-flex justify-end">
         @can('delete term')
         <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete_{{ $term->id }}"
            class="btn btn-outline-danger mb-0 mt-lg-0 mx-2 mt-2">@lang('main.delete')</button>
         @endcan
         <button type="submit" class="btn btn-primary mb-0 me-lg-0 mt-lg-0 mt-2">@lang('main.save')</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col-lg-12 mt-lg-0 mt-4">
         <div class="card">
            <div class="card-header">
               <div class="d-lg-flex">
                  <div>
                     <h5 class="mb-0">@lang('main.term')</h5>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.title_en')</label>
                           <input class="form-control" name="term_en" type="text"
                              value="{{old('term_en', $term->getTranslation('title', 'en'))}}" />
                           @error('term_en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.title_ar')</label>
                           <input class="form-control" name="term_ar" type="text"
                              value="{{old('term_ar', $term->getTranslation('title', 'ar'))}}" />
                           @error('term_ar')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.body_en')</label>
                           <textarea rows="5" class="form-control"
                              name="body_en">{{old('body_en', $term->getTranslation('body', 'en'))}}</textarea>
                           @error('body_en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.body_ar')</label>
                           <textarea rows="5" class="form-control"
                              name="body_ar">{{old('body_ar', $term->getTranslation('body', 'ar'))}}</textarea>
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