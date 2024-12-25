<div class="card mt-4" id="goals_section">
   <div class="card-header">
      <h5>@lang('main.goals_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.rova.updateGoals')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="goals_first_image" accept=".png, .jpg, .jpeg" name="goals_first_image" />
                        <label for="goals_first_image"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 350px;">
                        <div id="goalsImagePreview"
                           style="background-image: url('{{$rovaSetting->getGoalsFirstImage()}}');">
                        </div>
                     </div>
                  </div>
                  @error('goals_first_image')
                  <div class="text text-danger">{{$message}}</div>
                  @enderror
               </div>
                <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="goals_second_image" accept=".png, .jpg, .jpeg" name="goals_second_image" />
                        <label for="goals_second_image"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 350px;">
                        <div id="goalsImagePreview2"
                           style="background-image: url('{{$rovaSetting->getGoalsSecImage()}}');">
                        </div>
                     </div>
                  </div>
                  @error('goals_second_image')
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
                           <input id="title_en" name="goals_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$rovaSetting->goals_title_en}}">
                        </div>
                        @error('goals_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                      <div class="form-group">
                        <label class="form-label">@lang('main.description_en')</label>
                        <div class="input-group">
                           <input id="description_en" name="goals_description_en" class="form-control" type="text"
                              placeholder="@lang('main.description_en')" required="required"
                              value="{{$rovaSetting->goals_description_en}}">
                        </div>
                        @error('goals_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.goals_list_item_en')</label>
                        <div class="input-group">
                           <input id="goals_list_item_en" name="goals_list_item_en" class="form-control" type="text"
                              placeholder="@lang('main.goals_list_item_en')" required="required"
                              value="{{$rovaSetting->goals_description_en}}">
                        </div>
                        @error('goals_list_item_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.goals_list_item1_en')</label>
                        <div class="input-group">
                           <input id="goals_list_item1_en" name="goals_list_item1_en" class="form-control" type="text"
                              placeholder="@lang('main.goals_list_item1_en')" required="required"
                              value="{{$rovaSetting->goals_list_item1_en}}">
                        </div>
                        @error('goals_list_item1_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_en" name="goals_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$rovaSetting->goals_title_ar}}">
                        </div>
                        @error('goals_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                      <div class="form-group">
                        <label class="form-label">@lang('main.description_ar')</label>
                        <div class="input-group">
                           <input id="description_ar" name="goals_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.description_ar')" required="required"
                              value="{{$rovaSetting->goals_description_ar}}">
                        </div>
                        @error('goals_description_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                                          <div class="form-group">
                        <label class="form-label">@lang('main.goals_list_item_ar')</label>
                        <div class="input-group">
                           <input id="goals_list_item_ar" name="goals_list_item_ar" class="form-control" type="text"
                              placeholder="@lang('main.goals_list_item_ar')" required="required"
                              value="{{$rovaSetting->goals_description_ar}}">
                        </div>
                        @error('goals_list_item_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.goals_list_item1_ar')</label>
                        <div class="input-group">
                           <input id="goals_list_item1_ar" name="goals_list_item1_ar" class="form-control" type="text"
                              placeholder="@lang('main.goals_list_item1_ar')" required="required"
                              value="{{$rovaSetting->goals_list_item1_ar}}">
                        </div>
                        @error('goals_list_item1_ar')
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
   $("#goals_first_image").change(function () {
    readURL(this, '#goalsImagePreview');
});
  $("#goals_second_image").change(function () {
    readURL(this, '#goalsImagePreview2');
});
</script>
   
@endpush