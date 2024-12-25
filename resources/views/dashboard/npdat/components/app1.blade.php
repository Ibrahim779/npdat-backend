<div class="card mt-4" id="app1_section">
   <div class="card-header">
      <h5>@lang('main.app1_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.npdat.updateApp1')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="app_1_image" accept=".png, .jpg, .jpeg" name="app_1_image" />
                        <label for="app_1_image"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="npdatImagePreview"
                           style="background-image: url('{{$npdatSetting->getApp1Image()}}');">
                        </div>
                     </div>
                  </div>
                  @error('app_1_image')
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
                           <input id="title_en" name="app_1_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$npdatSetting->app_1_title_en}}">
                        </div>
                        @error('app_1_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_en" name="app_1_description_en" class="form-control" type="text"
                              placeholder="@lang('main.description_en')"
                              required="required">{{$npdatSetting->app_1_description_en}}</textarea>
                        </div>
                        @error('app_1_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.app_1_link')</label>
                        <div class="input-group">
                           <input id="title_en" name="app_1_link" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$npdatSetting->app_1_link}}">
                        </div>
                        @error('app_1_link')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="app_1_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$npdatSetting->app_1_title_ar}}">
                        </div>
                        @error('app_1_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_ar" name="app_1_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.description_ar')"
                              required="required">{{$npdatSetting->app_1_description_ar}}</textarea>
                        </div>
                        @error('app_1_description_ar')
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