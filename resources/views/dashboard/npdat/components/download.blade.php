<div class="card mt-4" id="download_section">
   <div class="card-header">
      <h5>@lang('main.download_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.npdat.updateDownload')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-12">
               <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="download_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$npdatSetting->download_title_en}}">
                        </div>
                        @error('download_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label class="form-label">@lang('main.link')</label>
                        <div class="input-group">
                           <input id="link" name="download_link" class="form-control" type="text"
                              placeholder="@lang('main.link')" required="required"
                              value="{{$npdatSetting->download_link}}">
                        </div>
                        @error('download_link')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="download_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$npdatSetting->download_title_ar}}">
                        </div>
                        @error('download_title_ar')
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