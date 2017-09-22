<!doctype html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
    @include('partials._header')
    @include('partials._flash')

    <main>
        @yield('content')
    </main>

    @include('partials._footer')
</body>
</html>