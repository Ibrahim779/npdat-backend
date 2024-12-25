<div class="card mt-4" id="rova_section">
   <div class="card-header">
      <h5>@lang('main.rova_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.home.updateRova')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="rova_image_1" accept=".png, .jpg, .jpeg" name="rova_image_1" />
                        <label for="rova_image_1"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="rovaImage1Preview"
                           style="background-image: url('{{$homeSetting->getRovaImage1()}}');">
                        </div>
                     </div>
                  </div>
                  @error('rova_image_1')
                  <div class="text text-danger">{{$message}}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="rova_image_2" accept=".png, .jpg, .jpeg" name="rova_image_2" />
                        <label for="rova_image_2"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="rovaImage2Preview"
                           style="background-image: url('{{$homeSetting->getRovaImage2()}}');">
                        </div>
                     </div>
                  </div>
                  @error('rova_image_2')
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
                           <input id="title_en" name="rova_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$homeSetting->rova_title_en}}">
                        </div>
                        @error('rova_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.main_title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="rova_main_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$homeSetting->rova_main_title_en}}">
                        </div>
                        @error('rova_main_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_en" name="rova_description_en" class="form-control" type="text"
                              placeholder="@lang('main.description_en')"
                              required="required">{{$homeSetting->rova_description_en}}</textarea>
                        </div>
                        @error('rova_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="rova_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$homeSetting->rova_title_ar}}">
                        </div>
                        @error('rova_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.main_title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="rova_main_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$homeSetting->rova_main_title_ar}}">
                        </div>
                        @error('rova_main_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_ar" name="rova_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.description_ar')"
                              required="required">{{$homeSetting->rova_description_ar}}</textarea>
                        </div>
                        @error('rova_description_ar')
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
   $("#rova_image_1").change(function () {
    readURL(this, '#rovaImage1Preview');
});
$("#rova_image_2").change(function () {
    readURL(this, '#rovaImage2Preview');
});
</script>
   
@endpush