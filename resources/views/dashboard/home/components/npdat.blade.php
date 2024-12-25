<div class="card mt-4" id="npdat_section">
   <div class="card-header">
      <h5>@lang('main.npdat_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.home.updateNpdat')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="npdat_image" accept=".png, .jpg, .jpeg" name="npdat_image" />
                        <label for="npdat_image"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="npdatImagePreview"
                           style="background-image: url('{{$homeSetting->getNpdatImage()}}');">
                        </div>
                     </div>
                  </div>
                  @error('npdat_image')
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
                           <input id="title_en" name="npdat_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$homeSetting->npdat_title_en}}">
                        </div>
                        @error('npdat_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.main_title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="npdat_main_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$homeSetting->npdat_main_title_en}}">
                        </div>
                        @error('npdat_main_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_en" name="npdat_description_en" class="form-control" type="text"
                              placeholder="@lang('main.description_en')"
                              required="required">{{$homeSetting->npdat_description_en}}</textarea>
                        </div>
                        @error('npdat_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="npdat_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$homeSetting->npdat_title_ar}}">
                        </div>
                        @error('npdat_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.main_title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="npdat_main_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$homeSetting->npdat_main_title_ar}}">
                        </div>
                        @error('npdat_main_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_ar" name="npdat_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.description_ar')"
                              required="required">{{$homeSetting->npdat_description_ar}}</textarea>
                        </div>
                        @error('npdat_description_ar')
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
   $("#npdat_image").change(function () {
    readURL(this, '#npdatImagePreview');
});
</script>
   
@endpush