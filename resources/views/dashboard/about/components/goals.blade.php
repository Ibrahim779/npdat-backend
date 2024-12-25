<div class="card mt-4" id="goals_section">
   <div class="card-header">
      <h5>@lang('main.goals_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.about.updateGoals')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-4">
               <div class="form-group">
                  <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                     <div class="avatar-edit ">
                        <input type='file' id="goals_image" accept=".png, .jpg, .jpeg" name="goals_image" />
                        <label for="goals_image"><img
                              src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                     </div>
                     <div class="avatar-preview" style="height: 350px;">
                        <div id="goalsImagePreview"
                           style="background-image: url('{{$aboutSetting->getGoalsImage()}}');">
                        </div>
                     </div>
                  </div>
                  @error('goals_image')
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
                              value="{{$aboutSetting->goals_title_en}}">
                        </div>
                        @error('goals_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.vision_title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="vision_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$aboutSetting->vision_title_en}}">
                        </div>
                        @error('vision_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.vision_description_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="vision_description_en" name="vision_description_en" class="form-control" type="text"
                              placeholder="@lang('main.vision_description_en')"
                              required="required">{{$aboutSetting->vision_description_en}}</textarea>
                        </div>
                        @error('vision_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.mission_title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="mission_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$aboutSetting->mission_title_en}}">
                        </div>
                        @error('mission_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.mission_description_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="mission_description_en" name="mission_description_en" class="form-control" type="text"
                              placeholder="@lang('main.mission_description_en')"
                              required="required">{{$aboutSetting->mission_description_en}}</textarea>
                        </div>
                        @error('mission_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.team_title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="team_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$aboutSetting->team_title_en}}">
                        </div>
                        @error('team_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.team_description_en')</label>
                        <div class="input-group">
                           <textarea rows="5" id="team_description_en" name="team_description_en" class="form-control" type="text"
                              placeholder="@lang('main.team_description_en')"
                              required="required">{{$aboutSetting->team_description_en}}</textarea>
                        </div>
                        @error('team_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="goals_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$aboutSetting->goals_title_ar}}">
                        </div>
                        @error('goals_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.vision_title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="vision_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$aboutSetting->vision_title_ar}}">
                        </div>
                        @error('vision_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.vision_description_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="vision_description_ar" name="vision_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.vision_description_ar')"
                              required="required">{{$aboutSetting->vision_description_ar}}</textarea>
                        </div>
                        @error('vision_description_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.mission_title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="mission_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$aboutSetting->mission_title_ar}}">
                        </div>
                        @error('mission_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.mission_description_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="mission_description_ar" name="mission_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.mission_description_ar')"
                              required="required">{{$aboutSetting->mission_description_ar}}</textarea>
                        </div>
                        @error('mission_description_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.team_title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="team_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$aboutSetting->team_title_ar}}">
                        </div>
                        @error('team_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.team_description_ar')</label>
                        <div class="input-group">
                           <textarea rows="5" id="team_description_ar" name="team_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.team_description_ar')"
                              required="required">{{$aboutSetting->team_description_ar}}</textarea>
                        </div>
                        @error('team_description_ar')
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
   $("#goals_image").change(function () {
    readURL(this, '#goalsImagePreview');
});
</script>
   
@endpush