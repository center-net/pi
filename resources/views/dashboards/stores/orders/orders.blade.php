@extends('layouts.dashboard.dashboard')
@section('title',__('views.orders'))
@section('content')
    @livewire('dashboards.stores.orders.index')
@endsection