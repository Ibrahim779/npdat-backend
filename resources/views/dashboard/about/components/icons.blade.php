<div class="card mt-4" id="icon_section">
   <div class="card-header">
      <h5>@lang('main.icon_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.about.updateCounters')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-12">
               <div class="row">
                  <div class="col-6">
                     @for($i = 1; $i <= 4; $i++) 
                     <div class="form-group">
                        <label class="form-label">@lang('main.icon_title_en', ['num' => $i])</label>
                        <div class="input-group">
                           <input id="title_en" name="icon_{{$i}}_title_en" class="form-control" type="text"
                              placeholder="@lang('main.icon_title_en', ['num' => $i])" required="required"
                              value="{{$aboutSetting->{'icon_'.$i.'_title_en'} }}">
                        </div>
                        @error('icon_{{$i}}_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.icon_description_en', ['num' => $i])</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_en" name="icon_{{$i}}_description_en" class="form-control" type="text"
                              placeholder="@lang('main.icon_description_en', ['num' => $i])"
                              required="required">{{$aboutSetting->{'icon_'.$i.'_description_en'} }}</textarea>
                        </div>
                        @error('icon_{{$i}}_description_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     @endfor
                  </div>
                  <div class="col-6">
                     @for($i = 1; $i <= 4; $i++) 
                     <div class="form-group">
                        <label class="form-label">@lang('main.icon_title_ar', ['num' => $i])</label>
                        <div class="input-group">
                           <input id="title_ar" name="icon_{{$i}}_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.icon_title_ar', ['num' => $i])" required="required"
                              value="{{$aboutSetting->{'icon_'.$i.'_title_ar'} }}">
                        </div>
                        @error('icon_{{$i}}_title_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.icon_description_ar', ['num' => $i])</label>
                        <div class="input-group">
                           <textarea rows="5" id="description_ar" name="icon_{{$i}}_description_ar" class="form-control" type="text"
                              placeholder="@lang('main.icon_description_ar', ['num' => $i])"
                              required="required">{{$aboutSetting->{'icon_'.$i.'_description_ar'} }}</textarea>
                        </div>
                        @error('icon_{{$i}}_description_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     @endfor
                  </div>
               </div>
            </div>
         </div>
         <button type="submit" class="btn bg-gradient-dark btn-sm rtl float-end mt-3 mb-0">@lang('main.update')</button>
      </form>
   </div>
</div>