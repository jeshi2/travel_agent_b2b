
@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="container">
    <div class="sidebar-wrapper">
            @include('admin.sidebar')
        </div>
        <div>
        <h1 class="text-purple-500">Admin Dashboard</h1>
        <!-- Add your dashboard content here -->
        </div>
        
    </div>
@endsection