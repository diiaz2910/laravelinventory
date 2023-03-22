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
            <h5 class="mb-0">Create New Users</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('users.store') }}">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @csrf

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Full Name</label>
                        <input type="text" name="name" class="form-control" id="basic-default-fullname" placeholder="Name" required />
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                        <input type="text" name="email" class="form-control" id="basic-default-email" placeholder="Email" required />
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                        <input type="password" name="password" class="form-control" id="basic-default-password" placeholder="Password" required />
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
