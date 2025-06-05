@extends('layouts.dashboard.dashboard')
@section('title',__('views.site_settings'))
@section('content')
    @livewire('dashboards.settings.index')
@endsection