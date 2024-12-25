<div class="card mt-4" id="accounts">
   <div class="card-header">
      <h5>@lang('main.mobile_app_links')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.settings.updateAppLinks')}}" method="POST">
         @csrf
         <div class="d-flex justify-between">
            <div class="d-flex justify-between">
               <div class="my-auto">
                  <i class="fab fa-android"></i>
               </div>
               <div class="my-auto mx-2">
                  <div class="h-100">
                     <h5 class="mb-0">@lang('main.android')</h5>
                  </div>
               </div>
            </div>
            <input class="form-control form-control-sm mt-sm-0 mt-2 w-sm-30 w-40" type="url" value="{{$app->android}}"
               data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('main.url')" name="android">
         </div>
         <hr class="horizontal dark">
         <div class="d-flex justify-between">
            <div class="d-flex justify-between">
               <div class="my-auto">
                  <i class="fab fa-apple"></i>
               </div>
               <div class="my-auto mx-2">
                  <div class="h-100">
                     <h5 class="mb-0">@lang('main.ios')</h5>
                  </div>
               </div>
            </div>
            <input class="form-control form-control-sm mt-sm-0 mt-2 w-sm-30 w-40" type="url" value="{{$app->ios}}"
               data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('main.url')" name="ios">
         </div>
         <hr class="horizontal dark">
         <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-3 mb-0">@lang('main.update')</button>
      </form>
   </div>
</div>