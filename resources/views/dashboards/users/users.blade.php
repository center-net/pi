@extends('layouts.dashboard.dashboard')
@section('title',__('views.management'))

@section('headerbtn')
<x-button-component title="{{ __('views.add_user') }}" modalid="addUserModal" />
@endsection

@section('content')

    @livewire('dashboards.users.index')
    @livewire('dashboards.users.add')
@endsection