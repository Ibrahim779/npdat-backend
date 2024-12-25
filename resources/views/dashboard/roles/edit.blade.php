@extends('dashboard.layout.app')
@section('title', trans('main.edit_role'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('main.edit_role'))
@section('content')

    <form method="post" action="{{ route('admin.roles.update', $role->id) }}">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-lg-12 text-right d-flex flex-column justify-content-center">
                <button type="submit"
                    class="btn btn-primary mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">@lang('main.save')</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bolder">@lang('main.edit_role')</h5>
                    <div class="row">
                        <div class="col-12 col-sm-6 m-2">
                            <label>@lang('main.name')</label>
                            <input value="{{ old('name', $role->name) }}" name="name" class="form-control" type="text"
                                placeholder="{{ __('main.enter_name') }}" />
                            @error('name')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($permissions as $permission)
                            <div class="col-3">
                                <div class="card m-2">
                                    <div class="card-body p-3">
                                        <div class="form-check ps-0">
                                            <input model="{{ $permission->first()->model }}"
                                                class="baseCheckbox form-check-input ms-auto" type="checkbox"
                                                id="baseCheck_{{ $permission->first()->model }}">
                                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                for="baseCheck_{{ $permission->first()->model }}">
                                                <h6>
                                                    @lang('main.' . $permission->first()->model)
                                                </h6>
                                            </label>
                                        </div>
                                        <ul style="margin-left:40px" class="list-group">
                                            @foreach ($permission as $modelPermission)
                                                <li class="list-group-item border-0 px-0">
                                                    <div class="form-check  ps-0">
                                                        <input name="permissions[]" @checked(in_array($modelPermission->name, old('permissions', $role->permissions->pluck('name')->toArray())))
                                                            model="{{ $permission->first()->model }}"
                                                            class="baseCheck_{{ $permission->first()->model }} checkInput
                                        form-check-input ms-auto"
                                                            type="checkbox" id="checkbox_{{ $modelPermission->id }}"
                                                            value="{{ $modelPermission->name }}">
                                                        @php
                                                            $name = explode(' ', $modelPermission->name);
                                                        @endphp
                                                        <label
                                                            class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                            for="checkbox_{{ $modelPermission->id }}">
                                                            @lang('main.' . $name[0])
                                                            @lang('main.' . $name[1])
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
    </form>


@endsection

@push('script')
    @include('dashboard.roles.parts.script')
@endpush
