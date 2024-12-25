@extends('dashboard.layout.app')
@section('title', trans('main.rova_products'))
@section('main_folder', __('main.web'))
@section('sub_folder', __('main.rova_products'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <div class="d-flex justify-between">
                        <div>
                            <h5 class="mb-0">@lang('main.rova_products')</h5>
                        </div>
                        <div class="my-auto mt-lg-0 mt-4">
                            @can('add product')
                                <a href="{{ route('admin.rova-products.create') }}" class="btn btn-primary btn-sm mb-0">+&nbsp;
                                    @lang('main.new_product')</a>
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
                                    <th>@lang('main.image')</th>
                                    <th>@lang('main.name')</th>
                                    <th style="text-align: center;">@lang('main.action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rova_products as $key => $product)
                                    <tr>
                                        <td class=" text-sm" style="width: 80px">{{ $rova_products->firstItem() + $key }}</td>
                                        <td>
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <img class="avatar avatar-sm me-3"
                                                        src="{{ $product->img }}" alt="image">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm">{{ $product->name }}</td>
                                        <td class="text-sm">
                                            <div class=""
                                                style=" display: flex; justify-content: center;align-items: center; height:auto">
                                                @can('edit rovaproduct')
                                                    <a href="{{ route('admin.rova-products.edit', $product->id) }}" class="mx-3"
                                                        data-bs-toggle="tooltip" data-bs-original-title="@lang('main.edit')">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                @endcan
                                                @can('delete rovaproduct')
                                                    <a href="javascript:;" data-bs-toggle="modal"
                                                        data-bs-target="#modal-delete_{{ $product->id }}">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </a>
                                                    @include('dashboard.components.delete-modal', [
                                                        'action' => route(
                                                            'admin.rova-products.destroy',
                                                            $product->id
                                                        ),
                                                        'id' => $product->id,
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
                    {{ $rova_products->links() }}
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
