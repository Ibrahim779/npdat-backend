@extends('dashboard.layout.app')
@section('title', trans('main.weOffers'))
@section('main_folder', __('main.web'))
@section('sub_folder', __('main.weOffers'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <div class="d-flex justify-between">
                        <div>
                            <h5 class="mb-0">@lang('main.weOffers')</h5>
                        </div>
                        <div class="my-auto mt-lg-0 mt-4">
                            @can('add service')
                                <a href="{{ route('admin.weOffers.create') }}" class="btn btn-primary btn-sm mb-0">+&nbsp;
                                    @lang('main.new_service')</a>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class="table table-flush" id="products-list">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>@lang('main.service')</th>
                                    <th>@lang('main.name')</th>
                                    <th style="text-align: center;">@lang('main.action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($weOffers as $key => $service)
                                    <tr>
                                        <td class=" text-sm" style="width: 80px">{{ $weOffers->firstItem() + $key }}</td>
                                        <td>
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <img class="avatar avatar-sm me-3"
                                                        src="{{ $service->img }}" alt="image">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm">{{ $service->name }}</td>
                                        <td class="text-sm">
                                            <div class=""
                                                style=" display: flex; justify-content: center;align-items: center; height:auto">
                                                @can('edit service')
                                                    <a href="{{ route('admin.weOffers.edit', $service->id) }}" class="mx-3"
                                                        data-bs-toggle="tooltip" data-bs-original-title="@lang('main.edit')">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                @endcan
                                                @can('delete service')
                                                    <a href="javascript:;" data-bs-toggle="modal"
                                                        data-bs-target="#modal-delete_{{ $service->id }}">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </a>
                                                    @include('dashboard.components.delete-modal', [
                                                        'action' => route(
                                                            'admin.weOffers.destroy',
                                                            $service->id
                                                        ),
                                                        'id' => $service->id,
                                                    ])
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
                    {{ $weOffers->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
@push('script')
    <script src="{{ asset('dashboard/js/plugins/datatables.js') }}"></script>
    <script>
        if (document.getElementById('products-list')) {
            const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
                searchable: true,
                fixedHeight: false,
                "paging": false
            });
        };
    </script>

    <script>
        function changeCategory(id, url) {

            let selectedVal = $('#category-' + id).val()
            console.log(selectedVal)
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    "_token": "{{ csrf_token() }}",
                    "category": selectedVal
                },
                success: function(response) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: '{{ app()->getLocale() == 'en' ? 'top-end' : 'top-start' }}',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: '{{ __('main.category_success') }}'
                    })
                }
            });

        }
    </script>
@endpush
