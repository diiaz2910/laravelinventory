@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Update Trail')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Update Trail</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pages.hikes.update') }}">

                    @csrf
                    <input type="hidden" name="type_id" value="{{ $hike->id }}">

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                        <input type="text" name="name" value="{{ $hike->name }}"class="form-control" id="basic-default-fullname" />
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Risk</label>
                        <input type="text" name="hike" value="{{ $hike->risk }}" class="form-control" id="basic-default-email" />
                    </div>

                    <div class="mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                        <input type="text" name="description" value="{{ $hike->description }}" class="form-control" id="basic-default-email" />
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Send</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
