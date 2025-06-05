@extends('layouts.dashboard.dashboard')
@section('title',__('views.merchants'))
@section('content')
    @livewire('dashboards.stores.users.index')
@endsection