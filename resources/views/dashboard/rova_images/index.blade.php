@extends('dashboard.layout.app')
@section('title', trans('main.rova_images'))
@section('main_folder', __('main.web'))
@section('sub_folder', __('main.rova_images'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <div class="d-flex justify-between">
                        <div>
                            <h5 class="mb-0">@lang('main.rova_images')</h5>
                        </div>
                        <div class="my-auto mt-lg-0 mt-4">
                            @can('add rovaimage')
                                <a href="{{ route('admin.rova-images.create') }}" class="btn btn-primary btn-sm mb-0">+&nbsp;
                                    @lang('main.new_image')</a>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class="table table-flush" id="images-list">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>@lang('main.image')</th>
                                    <th style="text-align: center;">@lang('main.action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rova_images as $key => $image)
                                    <tr>
                                        <td class=" text-sm" style="width: 80px">{{ $rova_images->firstItem() + $key }}</td>
                                        <td>
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <img class="avatar avatar-sm me-3"
                                                        src="{{ $image->img }}" alt="image">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm">
                                            <div class=""
                                                style=" display: flex; justify-content: center;align-items: center; height:auto">
                                                @can('edit rovaimage')
                                                    <a href="{{ route('admin.rova-images.edit', $image->id) }}" class="mx-3"
                                                        data-bs-toggle="tooltip" data-bs-original-title="@lang('main.edit')">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                @endcan
                                                @can('delete rovaimage')
                                                    <a href="javascript:;" data-bs-toggle="modal"
                                                        data-bs-target="#modal-delete_{{ $image->id }}">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </a>
                                                    @include('dashboard.components.delete-modal', [
                                                        'action' => route(
                                                            'admin.rova-images.destroy',
                                                            $image->id
                                                        ),
                                                        'id' => $image->id,
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
                    {{ $rova_images->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
@push('script')
    <script src="{{ asset('dashboard/js/plugins/datatables.js') }}"></script>
    <script>
        if (document.getElementById('images-list')) {
            const dataTableSearch = new simpleDatatables.DataTable("#images-list", {
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
