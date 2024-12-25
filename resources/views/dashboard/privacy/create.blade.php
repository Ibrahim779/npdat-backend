@extends('dashboard.layout.app')
@section('title',trans('main.create'))
@section('main_folder', __('main.questions'))
@section('sub_folder', __('main.create'))
@section('content')
<form action="{{route('admin.questions.store')}}" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="row">
      <div class="col-lg-12 text-right d-flex flex-column justify-content-center">
         <button type="submit"
            class="btn btn-primary mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">@lang('main.save')</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col-lg-12 mt-lg-0 mt-4">
         <div class="card">
            <div class="card-header">
               <div class="d-lg-flex">
                  <div>
                     <h5 class="mb-0">@lang('main.question')</h5>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.question_en')</label>
                           <input class="form-control" name="question_en" type="text" value="{{old('question_en')}}" />
                           @error('question_en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.question_ar')</label>
                           <input class="form-control" name="question_ar" type="text" value="{{old('question_ar')}}" />
                           @error('question_ar')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.answer_en')</label>
                           <textarea rows="5" class="form-control" name="answer_en">{{old('answer_en')}}</textarea>
                           @error('answer_en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.answer_ar')</label>
                           <textarea rows="5" class="form-control" name="answer_ar">{{old('answer_ar')}}</textarea>
                           @error('answer_ar')
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