@extends('layouts.dashboard.dashboard')
@section('title',__('views.permissions_management'))

@section('content')

    @livewire('dashboards.permissions.index')

@endsection