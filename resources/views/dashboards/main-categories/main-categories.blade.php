@extends('layouts.dashboard.dashboard')
@section('title',__('views.main_categories') )
@section('content')
    @livewire('dashboards.main-categories.index')
@endsection