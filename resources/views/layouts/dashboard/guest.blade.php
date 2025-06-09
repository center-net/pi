<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
    dir="{{ LaravelLocalization::setLocale() === 'ar' || LaravelLocalization::setLocale() === 'fr' ? 'rtl':'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$settings->name}} | المصادقة</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />


  @include('partials.dashboard._head')
  @livewireStyles
</head>

<body >
    <div class="wrapper">
        @yield('content')
    </div>
    @include('partials.dashboard._scripts')
    @livewireScripts
</body>

</html>
