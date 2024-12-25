@extends('dashboard.layout.app')
@section('title',trans('main.subscribes'))
@section('main_folder', __('main.website'))
@section('sub_folder', __('main.subscribes'))
@section('content')
<div class="row">
   <div class="col-12">
      <div class="card">
         <!-- Card header -->
         <div class="card-header pb-0">
            <h5 class="mb-0">@lang('main.subscribes')</h5>
         </div>

         <div class="card-body px-0 pb-0">
            <div class="table-responsive">
               <table class="table table-flush" id="products-list">
                  <thead class="thead-light">
                     <tr>
                        <th>#</th>
                        <th>@lang('main.email')</th>
                        <th style="text-align: center;">@lang('main.action')</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($subscribes as $key => $subscribe)
                     <tr>
                        <td class=" text-sm" style="width: 80px">{{ $subscribes->firstItem() + $key }}</td>
                        <td class="text-sm">
                           {{$subscribe->email}}
                        </td>
                        <td class="text-sm">
                           <div class=""
                              style=" display: flex; justify-content: center;align-items: center; height:auto">
                              @can('delete subscribe')
                              <a href="javascript:;" data-bs-toggle="modal"
                                 data-bs-target="#modal-delete_{{$subscribe->id}}">
                                 <i class="fas fa-trash text-danger"></i>
                              </a>
                              @include('dashboard.components.delete-modal', ['action' =>
                              route('admin.web.subscribes.destroy',
                              $subscribe->id), 'id' => $subscribe->id ])
                              @endcan
                           </div>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="card-footer">
            {{$subscribes->links()}}
         </div>
      </div>
   </div>
</div>

@endsection
@push('script')
<script src="{{asset('dashboard/js/plugins/datatables.js')}}"></script>
<script>
   if (document.getElementById('products-list')) {
      const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
         searchable: true,
         fixedHeight: false,
         "paging": false
      });
   };
</script>
@endpush