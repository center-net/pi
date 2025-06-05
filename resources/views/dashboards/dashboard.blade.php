@extends('layouts.dashboard.dashboard')
@section('title',__('views.home'))
@section('content')
    @livewire('dashboards.counter')
@endsection