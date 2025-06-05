@extends('layouts.dashboard.dashboard')
@section('title',__('views.sub_categories'))
@section('content')
    @livewire('dashboards.subcategories.index')
@endsection