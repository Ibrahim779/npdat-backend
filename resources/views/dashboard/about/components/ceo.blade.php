<div class="card mt-4" id="ceo_section">
   <div class="card-header">
      <h5>@lang('main.ceo_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.about.updateCeo')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="ceo_image" accept=".png, .jpg, .jpeg" name="ceo_image" />
                        <label for="ceo_image"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 515px;">
                        <div id="ceoImage1Preview"
                           style="background-image: url('{{$aboutSetting->getCeoImage()}}');">
                        </div>
                     </div>
                  </div>
                  @error('ceo_image')
                  <div class="text text-danger">{{$message}}</div>
                  @enderror
               </div>
            </div>
            <div class="col-8">
               <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="ceo_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$aboutSetting->ceo_title_en}}">
                        </div>
                        @error('ceo_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.main_title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="ceo_main_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$aboutSetting->ceo_main_title_en}}">
                        </div>
                        @error('ceo_main_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.name_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="name_en" name="ceo_name_en" class="form-control" type="text"
                              placeholder="@lang('main.name_en')"
                              required="required">{{$aboutSetting->ceo_name_en}}</textarea>
                        </div>
                        @error('ceo_name_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.word_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="word_en" name="ceo_word_en" class="form-control" type="text"
                              placeholder="@lang('main.word_en')"
                              required="required">{{$aboutSetting->ceo_word_en}}</textarea>
                        </div>
                        @error('ceo_word_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="ceo_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$aboutSetting->ceo_title_ar}}">
                        </div>
                        @error('ceo_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.main_title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="ceo_main_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$aboutSetting->ceo_main_title_ar}}">
                        </div>
                        @error('ceo_main_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.name_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="name_ar" name="ceo_name_ar" class="form-control" type="text"
                              placeholder="@lang('main.name_ar')"
                              required="required">{{$aboutSetting->ceo_name_ar}}</textarea>
                        </div>
                        @error('ceo_name_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.word_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="word_ar" name="ceo_word_ar" class="form-control" type="text"
                              placeholder="@lang('main.word_ar')"
                              required="required">{{$aboutSetting->ceo_word_ar}}</textarea>
                        </div>
                        @error('ceo_word_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <button type="submit" class="btn bg-gradient-dark btn-sm rtl float-end mt-3 mb-0">@lang('main.update')</button>
      </form>
   </div>
</div>

@push('script')
<script>
   $("#ceo_image").change(function () {
    readURL(this, '#ceoImage1Preview');
});
$("#ceo_image_2").change(function () {
    readURL(this, '#ceoImage2Preview');
});
</script>
   
@endpush