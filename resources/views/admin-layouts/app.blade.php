<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.head')
</head>
<body>
@include('admin-layouts.navbar')
@yield('content')

@include('layouts.scripts')
</body>
</html>