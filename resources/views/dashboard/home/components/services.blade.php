<div class="card mt-4" id="services_section">
   <div class="card-header">
      <h5>@lang('main.services_section')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.pages.home.updateServices')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-12">
               <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_en')</label>
                        <div class="input-group">
                           <input id="title_en" name="services_title_en" class="form-control" type="text"
                              placeholder="@lang('main.title_en')" required="required"
                              value="{{$homeSetting->services_title_en}}">
                        </div>
                        @error('services_title_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">@lang('main.title_ar')</label>
                        <div class="input-group">
                           <input id="title_ar" name="services_title_ar" class="form-control" type="text"
                              placeholder="@lang('main.title_ar')" required="required"
                              value="{{$homeSetting->services_title_ar}}">
                        </div>
                        @error('services_title_ar')
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