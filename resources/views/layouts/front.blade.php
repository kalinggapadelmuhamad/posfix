<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('layouts.partials.front._head')
    @include('layouts.partials.front._styles')
    @yield('insert-css')
</head>

<body>
    @yield('content')
    @include('layouts.partials.front._scripts')
    @yield('insert-js')
</body>

</html>
