<div class="card mt-4" id="invest_section">
   <div class="card-header">
      <h5>@lang('main.invest_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.home.updateInvest')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="invest_image_1" accept=".png, .jpg, .jpeg" name="invest_image_1" />
                        <label for="invest_image_1"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="investImage1Preview"
                           style="background-image: url('{{$homeSetting->getInvestImage1()}}');">
                        </div>
                     </div>
                  </div>
                  @error('invest_image_1')
                  <div class="text text-danger">{{$message}}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="invest_image_2" accept=".png, .jpg, .jpeg" name="invest_image_2" />
                        <label for="invest_image_2"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 250px;">
                        <div id="investImage2Preview"
                           style="background-image: url('{{$homeSetting->getInvestImage2()}}');">
                        </div>
                     </div>
                  </div>
                  @error('invest_image_2')
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
                           <input id="title_en" name="invest_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$homeSetting->invest_title_en}}">
                        </div>
                        @error('invest_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.main_title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="invest_main_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$homeSetting->invest_main_title_en}}">
                        </div>
                        @error('invest_main_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_en" name="invest_description_en" class="form-control" type="text"
                              placeholder="@lang('main.description_en')"
                              required="required">{{$homeSetting->invest_description_en}}</textarea>
                        </div>
                        @error('invest_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.invest_list_1_en')</label>
                        <div class="input-group">
                           <input id="invest_list_1_en" name="invest_list_1_en" class="form-control" type="text"
                              placeholder="@lang('main.invest_list_1_en')" required="required"
                              value="{{$homeSetting->invest_list_1_en}}">
                        </div>
                        @error('invest_list_1_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.invest_list_2_en')</label>
                        <div class="input-group">
                           <input id="invest_list_2_en" name="invest_list_2_en" class="form-control" type="text"
                              placeholder="@lang('main.invest_list_2_en')" required="required"
                              value="{{$homeSetting->invest_list_2_en}}">
                        </div>
                        @error('invest_list_2_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="invest_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$homeSetting->invest_title_ar}}">
                        </div>
                        @error('invest_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.main_title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="invest_main_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$homeSetting->invest_main_title_ar}}">
                        </div>
                        @error('invest_main_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.description_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_ar" name="invest_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.description_ar')"
                              required="required">{{$homeSetting->invest_description_ar}}</textarea>
                        </div>
                        @error('invest_description_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.invest_list_1_ar')</label>
                        <div class="input-group">
                           <input id="invest_list_1_ar" name="invest_list_1_ar" class="form-control" type="text"
                              placeholder="@lang('main.invest_list_1_ar')" required="required"
                              value="{{$homeSetting->invest_list_1_ar}}">
                        </div>
                        @error('invest_list_1_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.invest_list_2_ar')</label>
                        <div class="input-group">
                           <input id="invest_list_2_ar" name="invest_list_2_ar" class="form-control" type="text"
                              placeholder="@lang('main.invest_list_2_ar')" required="required"
                              value="{{$homeSetting->invest_list_2_ar}}">
                        </div>
                        @error('invest_list_2_ar')
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
   $("#invest_image_1").change(function () {
    readURL(this, '#investImage1Preview');
});
$("#invest_image_2").change(function () {
    readURL(this, '#investImage2Preview');
});
</script>
   
@endpush