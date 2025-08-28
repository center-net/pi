@extends('layouts.dashboard.dashboard')
@section('title',__('views.management'))

@section('content')

    @livewire('dashboards.users.index')

@endsection