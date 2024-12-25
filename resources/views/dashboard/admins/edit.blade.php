@extends('dashboard.layout.app')
@section('title', trans('main.edit_admin'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('main.edit_admin'))
@section('content')

    <form method="post" action="{{ route('admin.admins.update', $admin->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-lg-12 text-right d-flex  justify-content-end">
                <button type="submit" class="btn btn-primary mb-0 mt-lg-0 mt-2">@lang('main.save')</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bolder">@lang('main.edit_admin')</h5>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>@lang('main.name')</label>
                            <input value="{{ old('name', $admin->name) }}" name="name" class="form-control"
                                type="text" placeholder="{{ __('main.enter_name') }}" />
                            @error('name')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>@lang('main.email')</label>
                            <input value="{{ old('email', $admin->email) }}" name="email" class="form-control"
                                type="email" placeholder="{{ __('main.enter_email') }}" />
                            @error('email')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-sm-4">
                            <label>@lang('main.password')</label>
                            <input value="{{ old('password') }}" name="password" class="form-control" type="password"
                                placeholder="{{ __('main.enter_password') }}" />
                            @error('password')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span>@lang('main.change_password_message')</span>
                        </div>
                        <div class="col-12 col-sm-4">
                            <label>@lang('main.password_confirmation')</label>
                            <input name="password_confirmation" class="form-control" type="password"
                                placeholder="{{ __('main.enter_password') }}" />
                            @error('password_confirmation')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-sm-4">
                            <label for="#choices-roles">@lang('main.roles')</label>
                            <select class="form-control" name="roles[]" id="choices-roles" multiple>
                                <option value="{{ null }}">@lang('main.roles')</option>
                                @foreach ($roles as $role)
                                    <option @selected(in_array($role->name, old('roles', $admin->roles->pluck('name')->toArray()))) value="{{ $role->name }}">
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>


@endsection

@push('script')
    <script>
        if (document.getElementById("choices-roles")) {
            var tags = document.getElementById("choices-roles");
            const examples = new Choices(tags, {
                removeItemButton: true,
            });
        }
    </script>
@endpush
