@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Hiking Modes')

@section('content')
<h4>Hikes</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="table-responsive text-nowrap">
        <a href="{{ route('hikes.create') }}" type="button" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Risk</th>
                    <th>Active</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($hikes as $hike)
                    <tr>
                        <td>{{ $hike->id }}</td>
                        <td>{{ $hike->name }}</td>
                        <td>{{ $hike->risk }}</td>
                        <td>
                            @if ($hike->active)
                            <a href="{{ route('pages.hikes.switch', $hike->id) }}">
                                <span class="badge bg-primary">Active</span></a>
                            @else
                            <a href="{{ route('pages.hikes.switch', $hike->id) }}">
                                <span class="badge bg-danger">Inactive</span></a>
                            @endif
                        </td>
                        <td>{{ $hike->created_at }}</td>
                        <td><a href="{{ route('pages.hikes.show', $hike->id) }}">Edit</a> | <a href="{{ route('pages.hikes.destroy', $hike->id) }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection