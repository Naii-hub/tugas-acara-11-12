@extends('layout')

@push('styles')
    <style>
        h1 {
            color: blue;
        }
    </style>
@endpush

@section('title', 'Home Page')

@section('content')

    <h1>Welcome to Home Page</h1>

@endsection

@push('scripts')
    <script>
        console.log('Home page loaded');
    </script>
@endpush