@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Users')

@section('content')
<h4>App's Users</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="table-responsive text-nowrap">
        <a href="{{ route('users.create') }}" type="button" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td><a href="{{ route('pages.users.show', $user->id) }}">Edit</a> | <a href="{{ route('pages.users.destroy', $user->id) }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection