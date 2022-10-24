<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('layouts.partials.dashboard._head')
    @include('layouts.partials.dashboard._styles')
    @yield('insert-css')
</head>

<body id="page-top">
    @yield('content')
    @include('layouts.partials.dashboard._scripts')
    @yield('insert-js')
</body>

</html>
