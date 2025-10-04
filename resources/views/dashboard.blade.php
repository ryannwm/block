@extends('components.layout')

@section('title', 'Dashboard')

@section('content')
    @include('components.partials.'.auth()->user()->userType)
@endsection