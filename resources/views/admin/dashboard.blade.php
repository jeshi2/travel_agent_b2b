@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container">
    <div class="sidebar-wrapper">
        @include('admin.sidebar')
    </div>
    <div id="content-container" class="ml-72 p-8">
        <h1 class="justify-center mx-auto">Welcome to the Admin Dashboard</h1>
        
        <livewire:dashboard-content />
        
        <!-- Repeat this for each component -->
        
        <!-- Add your dashboard content here -->

    </div>

</div>

@endsection