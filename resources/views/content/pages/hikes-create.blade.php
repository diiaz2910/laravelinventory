@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Hikes')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Create a Trail</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('hikes.store') }}">

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
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                        <input type="text" name="name" class="form-control" id="basic-default-fullname" required />
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Risk</label>
                        <input type="text" name="risk" class="form-control" id="basic-default-fullname" required />
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                        <input type="text" name="description" class="form-control" id="basic-default-email" required />
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
