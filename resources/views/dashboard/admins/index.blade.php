@extends('dashboard.layout.app')
@section('title', trans('main.admins'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('main.admins'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header pb-0">
                    <div class="d-flex justify-between">
                        <div>
                            <h5 class="mb-0">@lang('main.admins')</h5>
                        </div>
                        <div class="mt-lg-0 mt-4">
                            <div class="ms-auto my-auto">
                                <a href="{{ route('admin.admins.create') }}" class="btn btn-primary btn-sm mb-0">+&nbsp;
                                    @lang('main.new_admin') </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class="table table-flush" id="products-list">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>
                                        @lang('main.name')
                                    </th>
                                    <th>
                                        @lang('main.email')
                                    </th>
                                    <th>
                                        @lang('main.action')
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($admins as $admin)
                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <h6 class="ms-3 my-auto">{{ $admin->name }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $admin->email }}
                                        </td>
                                        <td class="text-sm">
                                            <a href="{{ route('admin.admins.edit', $admin->id) }}" class="mx-3"
                                                data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                            <a href="javascript:;" data-bs-toggle="modal"
                                                data-bs-target="#modal-delete_{{ $admin->id }}">
                                                <i class="fas fa-trash text-secondary"></i>
                                            </a>
                                            @include('dashboard.components.delete-modal', [
                                                'action' => route('admin.admins.destroy', $admin->id),
                                                'id' => $admin->id,
                                            ])

                                        </td>
                                    </tr>
                                @empty
                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>@lang('main.name')</th>

                                    <th>@lang('main.action')</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
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
                perPage: 7
            });

            document.querySelectorAll(".export").forEach(function(el) {
                el.addEventListener("click", function(e) {
                    var type = el.dataset.type;

                    var data = {
                        type: type,
                        filename: "soft-ui-" + type,
                    };

                    if (type === "csv") {
                        data.columnDelimiter = "|";
                    }

                    dataTableSearch.export(data);
                });
            });
        };
    </script>
@endpush