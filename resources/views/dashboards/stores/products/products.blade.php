@extends('layouts.dashboard.dashboard')
@section('title',__('views.products'))
@section('content')
    @livewire('dashboards.stores.products.index')
@endsection