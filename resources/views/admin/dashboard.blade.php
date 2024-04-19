
@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="container">
    <div class="sidebar-wrapper">
            @include('admin.sidebar')
        </div>
        <div id="content-container" class="ml-72 p-8">
        <livewire:create-rooms />
            <livewire:view-rooms />
        <!-- Add your dashboard content here -->
        
        </div>
        
    </div>
    
@endsection
