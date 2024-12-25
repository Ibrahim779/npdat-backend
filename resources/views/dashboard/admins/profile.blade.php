@extends('dashboard.layout.app')
@section('title', trans('main.edit_admin'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('main.edit_admin'))
@section('content')

    <div class="container-fluid my-3 py-3">
        <div class="row mb-5">

            <div class="col-lg-12 mt-lg-0 mt-4">
                <!-- Card Profile -->
                <div class="card card-body" id="profile">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-auto col-4">

                        </div>
                        <div class="col-sm-auto col-8 my-auto">
                            <div class="h-100">
                                <h5 class="mb-1 font-weight-bolder">
                                    Alec Thompson
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                    CEO / Co-Founder
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                            <label class="form-check-label mb-0">
                                <small id="profileVisibility">
                                    Switch to invisible
                                </small>
                            </label>
                            <div class="form-check form-switch ms-2">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked
                                    onchange="visible()">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Basic Info -->
                <div class="card mt-4" id="basic-info">
                    <div class="card-header">
                        <h5>Basic Info</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Name</label>
                                <div class="input-group">
                                    <input id="firstName" name="firstName" class="form-control" type="text"
                                        placeholder="Alec" required="required">
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Email</label>
                                <div class="input-group">
                                    <input id="email" name="email" class="form-control" type="email"
                                        placeholder="example@email.com">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                <label class="form-label mt-4">Phone Number</label>
                                <div class="input-group">
                                    <input id="phone" name="phone" class="form-control" type="number"
                                        placeholder="+40 735 631 620">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Card Change Password -->
                <div class="card mt-4" id="password">
                    <div class="card-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body pt-0">
                        <label class="form-label">Current password</label>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Current password">
                        </div>
                        <label class="form-label">New password</label>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="New password">
                        </div>
                        <label class="form-label">Confirm new password</label>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Confirm password">
                        </div>
                        <h5 class="mt-5">Password requirements</h5>
                        <p class="text-muted mb-2">
                            Please follow this guide for a strong password:
                        </p>
                        <ul class="text-muted ps-4 mb-0 float-start">
                            <li>
                                <span class="text-sm">One special characters</span>
                            </li>
                            <li>
                                <span class="text-sm">Min 6 characters</span>
                            </li>
                            <li>
                                <span class="text-sm">One number (2 are recommended)</span>
                            </li>
                            <li>
                                <span class="text-sm">Change it often</span>
                            </li>
                        </ul>
                        <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Update password</button>
                    </div>
                </div>



            </div>
        </div>

    </div>


@endsection

@push('script')
@endpush
