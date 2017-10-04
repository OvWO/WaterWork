<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('layouts.stylesheets')


</head>
<body>
    @include('partials.nav')

{{--     <div class="container"> id="app"
        @yield('content')
    </div> --}}


@yield('content')
{{-- @include('partials.footer') --}}
@include('layouts.scripts')


</body>
</html>
