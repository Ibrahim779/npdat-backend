@extends('dashboard.layout.app')
@section('title', trans('web.terms_policy'))
@section('main_folder', __('main.web'))
@section('sub_folder', __('web.terms_policy'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header pb-0">
                    <div class="d-flex justify-between">
                        <div>
                            <h5 class="mb-0">@lang('web.terms_policy')</h5>
                        </div>
                        <div class="my-auto mt-lg-0 mt-4">
                            <div class="ms-auto my-auto">
                                @can('add term')
                                    <a href="{{ route('admin.terms.create') }}" class="btn  btn-primary btn-sm mb-0">+&nbsp;
                                        @lang('main.new_term')</a>
                                @endcan
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
                                    <th>@lang('main.term')</th>
                                    <th>@lang('main.body')</th>
                                    <th style="text-align: center;">@lang('main.action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($terms as $key => $term)
                                    <tr>
                                        <td class=" text-sm" style="width: 80px">{{ $terms->firstItem() + $key }}</td>
                                        <td>
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $term->title }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm">{{ $term->trim() }}</td>
                                        <td class="text-sm">
                                            <div class=""
                                                style=" display: flex; justify-content: center;align-items: center; height:auto">
                                                @can('edit term')
                                                    <a href="{{ route('admin.terms.edit', $term->id) }}" class="mx-3"
                                                        data-bs-toggle="tooltip" data-bs-original-title="@lang('main.edit')">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                @endcan
                                                @can('delete term')
                                                    <a href="javascript:;" data-bs-toggle="modal"
                                                        data-bs-target="#modal-delete_{{ $term->id }}">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </a>
                                                    @include('dashboard.components.delete-modal', [
                                                        'action' => route('admin.terms.destroy', $term->id),
                                                        'id' => $term->id,
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
                    {{ $terms->links() }}
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
@endpush
