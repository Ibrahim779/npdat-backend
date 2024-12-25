<div class="card" id="website-info">
   <div class="card-header">
      <h5>@lang('main.general')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.settings.updateGeneral')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="logo" />
                        <label for="imageUpload"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="imagePreview"
                           style="background-image: url('{{$generalSettings->getLogo()}}');">
                        </div>
                     </div>
                  </div>
                  @error('image')
                  <div class="text text-danger">{{$message}}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="logo_2" />
                        <label for="imageUpload"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="imagePreview"
                           style="background-image: url('{{$generalSettings->getLogo2()}}');">
                        </div>
                     </div>
                  </div>
                  @error('image')
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
                           <input id="title_en" name="title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$generalSettings->title_en}}">
                        </div>
                        @error('title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_en" name="description_en" class="form-control" type="text"
                              placeholder="@lang('main.description_en')"
                              required="required">{{$generalSettings->description_en}}</textarea>
                        </div>
                        @error('description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.address_en')</label>
                        <div class="input-group">
                           <input id="address_en" name="address_en" class="form-control" type="text"
                              placeholder="@lang('main.address_en')" required="required"
                              value="{{$generalSettings->address_en}}">
                        </div>
                        @error('address_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$generalSettings->title_ar}}">
                        </div>
                        @error('title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_ar" name="description_ar" class="form-control" type="text"
                              placeholder="@lang('main.description_ar')"
                              required="required">{{$generalSettings->description_ar}}</textarea>
                        </div>
                        @error('description_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.address_ar')</label>
                        <div class="input-group">
                           <input id="address_ar" name="address_ar" class="form-control" type="text"
                              placeholder="@lang('main.address_ar')" required="required"
                              value="{{$generalSettings->address_ar}}">
                        </div>
                        @error('address_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <div class="form-group">
                           <label class="form-label">@lang('main.phone')</label>
                           <div class="input-group">
                              <input id="phone" name="phone" class="form-control" type="text"
                                 placeholder="@lang('main.phone')" required="required"
                                 value="{{$generalSettings->phone}}">
                           </div>
                           @error('phone')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label class="form-label">@lang('main.phone')</label>
                           <div class="input-group">
                              <input id="phone_2" name="phone_2" class="form-control" type="text"
                                 placeholder="@lang('main.phone')" required="required"
                                 value="{{$generalSettings->phone_2}}">
                           </div>
                           @error('phone_2')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label class="form-label">@lang('main.email')</label>
                           <div class="input-group">
                              <input id="email" name="email" class="form-control" type="text"
                                 placeholder="@lang('main.email')" required="required"
                                 value="{{$generalSettings->email}}">
                           </div>
                           @error('email')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label class="form-label">@lang('main.copyright')</label>
                           <div class="input-group">
                              <input id="copyright" name="copyright" class="form-control" type="text"
                                 placeholder="@lang('main.copyright')" required="required"
                                 value="{{$generalSettings->copyright}}">
                           </div>
                           @error('copyright')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         <button type="submit" class="btn bg-gradient-dark btn-sm rtl float-end mt-3 mb-0">@lang('main.update')</button>
      </form>
   </div>
</div>