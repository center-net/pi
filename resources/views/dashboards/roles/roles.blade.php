@extends('layouts.dashboard.dashboard')
@section('title',__('views.roles_management'))

@section('content')

    @livewire('dashboards.roles.index')

@endsection