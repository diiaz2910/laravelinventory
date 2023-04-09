@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Hiking Types')

@section('content')
<h4>Hiking Types</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="table-responsive text-nowrap">
        <a href="{{ route('types.create') }}" type="button" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Active</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>
                        <td>
                            @if ($type->active)
                            <a href="{{ route('pages.types.switch', $type->id) }}">
                                <span class="badge bg-primary">Active</span></a>
                            @else
                            <a href="{{ route('pages.types.switch', $type->id) }}">
                                <span class="badge bg-danger">Inactive</span></a>
                            @endif
                        </td>
                        <td>{{ $type->created_at }}</td>
                        <td><a href="{{ route('pages.types.show', $type->id) }}">Edit</a> | <a href="{{ route('pages.types.destroy', $type->id) }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection