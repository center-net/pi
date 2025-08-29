@extends('layouts.dashboard.dashboard')
@section('title',__('views.main_categories_management'))

@section('content')

    @livewire('dashboards.main-categories.index')

@endsection