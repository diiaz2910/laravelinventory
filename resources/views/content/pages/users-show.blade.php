@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Create Users')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Update Users</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pages.users.update') }}">

                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Full Name</label>
                        <input type="text" name="name" value="{{ $user->name }}"class="form-control" id="basic-default-fullname" placeholder="Name" />
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                        <input type="text" name="email" value="{{ $user->email }}" class="form-control" id="basic-default-email" placeholder="Email" />
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Old Password</label>
                        <input type="password" name="old_password" class="form-control" id="basic-default-password" placeholder="Password" />
                    </div>
                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">New Password</label>
                        <input type="password" name="new_password" class="form-control" id="basic-default-password" placeholder="Password" />
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Send</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
