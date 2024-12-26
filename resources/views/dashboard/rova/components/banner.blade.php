<div class="card mt-4" id="banner_section">
   <div class="card-header">
      <h5>@lang('main.banner_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.rova.updateBanner')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-12">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="banner_image" />
                        <label for="imageUpload"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="imagePreview"
                           style="background-image: url('{{$rovaSetting->getBannerImage()}}');">
                        </div>
                     </div>
                  </div>
                  @error('banner_image')
                  <div class="text text-danger">{{$message}}</div>
                  @enderror
               </div>
            </div>
         </div>
         <button type="submit" class="btn bg-gradient-dark btn-sm rtl float-end mt-3 mb-0">@lang('main.update')</button>
      </form>
   </div>
</div>