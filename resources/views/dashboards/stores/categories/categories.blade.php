@extends('layouts.dashboard.dashboard')
@section('title',__('views.categories'))
@section('content')
    @livewire('dashboards.stores.categories.index')
@endsection