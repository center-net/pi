@extends('layouts.dashboard.dashboard')
@section('title',__('views.stores'))
@section('content')
    @livewire('dashboards.stores.stores.index')
@endsection