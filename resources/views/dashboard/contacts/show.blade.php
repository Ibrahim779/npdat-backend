@extends('dashboard.layout.app')
@section('title',trans('main.contacts'))
@section('main_folder', trans('main.contacts'))
@section('sub_folder', $contact->name)
@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">{{ $contact->name }}</h6>
                    </div>
                    <div class="col-md-4 text-end">
                        @can('delete contact')
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal-delete_{{$contact->id}}">
                            <i class="fas fa-trash text-danger"></i>
                        </a>
                        @include('dashboard.components.delete-modal', ['action' =>
                        route('admin.web.contacts.destroy',
                        $contact->id), 'id' => $contact->id ])
                        @endcan
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                <p class="text-sm">
                    {{$contact->message}}
                </p>
                <hr class="horizontal gray-light my-4">
                <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                            class="text-dark">@lang('main.name'):</strong>
                        &nbsp;
                        {{ $contact->name }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">@lang('main.phone'):</strong>
                        &nbsp; {{$contact->phone}}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">@lang('main.email'):</strong>
                        &nbsp;
                        {{ $contact->email }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    
@endsection