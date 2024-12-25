<div class="card" id="banner_section">
   <div class="card-header">
      <h5>@lang('main.banner_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.home.updateBanner')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="banner_image" />
                        <label for="imageUpload"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="imagePreview"
                           style="background-image: url('{{$homeSetting->getBannerImage()}}');">
                        </div>
                     </div>
                  </div>
                  @error('banner_image')
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
                           <input id="title_en" name="banner_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')"
                              value="{{$homeSetting->banner_title_en}}">
                        </div>
                        @error('banner_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_en" name="banner_description_en" class="form-control" type="text"
                              placeholder="@lang('main.description_en')"
                           >{{$homeSetting->banner_description_en}}</textarea>
                        </div>
                        @error('banner_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="banner_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')"
                              value="{{$homeSetting->banner_title_ar}}">
                        </div>
                        @error('banner_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_ar" name="banner_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.description_ar')"
                           >{{$homeSetting->banner_description_ar}}</textarea>
                        </div>
                        @error('banner_description_ar')
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