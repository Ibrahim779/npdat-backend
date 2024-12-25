@extends('dashboard.layout.app')
@section('title',trans('main.contacts'))
@section('main_folder', __('main.website'))
@section('sub_folder', __('main.contacts'))
@section('content')
<div class="row">
   <div class="col-12">
      <div class="card">
         <!-- Card header -->
         <div class="card-header pb-0">
            <h5 class="mb-0">@lang('main.contacts')</h5>
         </div>

         <div class="card-body px-0 pb-0">
            <div class="table-responsive">
               <table class="table table-flush" id="products-list">
                  <thead class="thead-light">
                     <tr>
                        <th>#</th>
                        <th>@lang('main.name')</th>
                        <th>@lang('main.email')</th>
                        <th>@lang('main.phone')</th>
                        <th>@lang('main.message')</th>
                        <th style="text-align: center;">@lang('main.action')</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($contacts as $key => $contact)
                     <tr>
                        <td class=" text-sm" style="width: 80px">{{ $contacts->firstItem() + $key }}</td>
                        <td>
                           <h6 class="mb-0 text-sm">{{ $contact->name }}</h6>
                        </td>
                        <td class="text-sm">
                           {{$contact->email}}
                        </td>
                        <td class="text-sm">
                           {{$contact->phone}}
                        </td>
                        <td class="text-sm">
                           {{$contact->trim}}
                        </td>
                        <td class="text-sm">
                           <div class=""
                              style=" display: flex; justify-content: center;align-items: center; height:auto">
                              @can('edit contact')
                              <a href="{{route('admin.web.contacts.show',$contact->id)}}" class="mx-3"
                                 data-bs-toggle="tooltip" data-bs-original-title="@lang('main.preview')">
                                 <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                              </a>
                              @endcan
                              @can('delete contact')
                              <a href="javascript:;" data-bs-toggle="modal"
                                 data-bs-target="#modal-delete_{{$contact->id}}">
                                 <i class="fas fa-trash text-danger"></i>
                              </a>
                              @include('dashboard.components.delete-modal', ['action' =>
                              route('admin.web.contacts.destroy',
                              $contact->id), 'id' => $contact->id ])
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
            {{$contacts->links()}}
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