@extends('dashboard.layouts.main')

@section('container')
    <h1>Welcome back, {{ auth()->user()->name }}</h1>
@endsection