<div class="card mt-4" id="accounts">
   <div class="card-header">
      <h5>@lang('main.socialmedia_accounts')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.settings.updateSocial')}}" method="POST">
         @csrf
         <div class="d-flex justify-between">
            <div class="d-flex justify-between">
               <div class="my-auto">
                  <i class="fab fa-linkedin"></i>
               </div>
               <div class="my-auto mx-2">
                  <div class="h-100">
                     <h5 class="mb-0">@lang('main.linkedin')</h5>
                  </div>
               </div>
            </div>
            <input class="form-control form-control-sm mt-sm-0 mt-2 w-sm-30 w-40" type="url"
               value="{{$social->linkedin}}" data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('main.url')"
               name="linkedin">
         </div>
         <hr class="horizontal dark">
         <div class="d-flex justify-between">
            <div class="d-flex justify-between">
               <div class="my-auto">
                  <i class="fab fa-twitter"></i>
               </div>
               <div class="my-auto mx-2">
                  <div class="h-100">
                     <h5 class="mb-0">@lang('main.twitter')</h5>
                  </div>
               </div>
            </div>
            <input class="form-control form-control-sm mt-sm-0 mt-2 w-sm-30 w-40" type="url"
               value="{{$social->twitter}}" data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('main.url')"
               name="twitter">
         </div>

         <hr class="horizontal dark">
         <div class="d-flex justify-between">
            <div class="d-flex justify-between">
               <div class="my-auto">
                  <i class="fab fa-facebook"></i>
               </div>
               <div class="my-auto mx-2">
                  <div class="h-100">
                     <h5 class="mb-0">@lang('main.facebook')</h5>
                  </div>
               </div>
            </div>
            <input class="form-control form-control-sm mt-sm-0 mt-2 w-sm-30 w-40" type="url"
               value="{{$social->facebook}}" data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('main.url')"
               name="facebook">
         </div>

         <hr class="horizontal dark">
         <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-3 mb-0">@lang('main.update')</button>
      </form>
   </div>
</div>