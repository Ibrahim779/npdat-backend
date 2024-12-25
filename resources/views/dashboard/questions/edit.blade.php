@extends('dashboard.layout.app')
@section('title',$question->name)
@section('main_folder', __('main.questions'))
@section('sub_folder', $question->name)
@section('content')
@can('delete question')
@include('dashboard.components.delete-modal', ['action' => route('admin.questions.destroy',$question->id), 'id' =>
$question->id ])
@endcan
<form action="{{route('admin.questions.update',$question->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')
   <div class="row">
      <div class="col-lg-12 text-right d-flex justify-end">
         @can('delete question')
         <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete_{{ $question->id }}"
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
                     <h5 class="mb-0">@lang('main.question')</h5>
                  </div>
                  <div>
                     <select class="form-control bg-primary text-white" name="category">
                        @foreach ($categories as $key=>$category)
                        <option value="{{ $key }}" @selected($question->category == $key)>
                           @lang('main.'.$category)
                        </option>
                        @endforeach
                     </select>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.question_en')</label>
                           <input class="form-control" name="question_en" type="text"
                              value="{{old('question_en', $question->getTranslation('question', 'en'))}}" />
                           @error('question_en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.question_ar')</label>
                           <input class="form-control" name="question_ar" type="text"
                              value="{{old('question_ar', $question->getTranslation('question', 'ar'))}}" />
                           @error('question_ar')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-6 form-group">
                           <label>@lang('main.answer_en')</label>
                           <textarea rows="5" class="form-control"
                              name="answer_en">{{old('answer_en', $question->getTranslation('answer', 'en'))}}</textarea>
                           @error('answer_en')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                        <div class="col-6 form-group">
                           <label>@lang('main.answer_ar')</label>
                           <textarea rows="5" class="form-control"
                              name="answer_ar">{{old('answer_ar', $question->getTranslation('answer', 'ar'))}}</textarea>
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