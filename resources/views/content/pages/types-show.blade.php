@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Update Type')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Update Type</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pages.types.update') }}">

                    @csrf
                    <input type="hidden" name="type_id" value="{{ $type->id }}">

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Full Name</label>
                        <input type="text" name="name" value="{{ $type->name }}"class="form-control" id="basic-default-fullname" />
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                        <input type="text" name="description" value="{{ $type->description }}" class="form-control" id="basic-default-email" />
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Send</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
