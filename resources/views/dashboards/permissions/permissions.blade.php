@extends('layouts.dashboard.dashboard')
@section('title',__('views.permissions'))
@section('content')
    @livewire('dashboards.permissions.index')
@endsection