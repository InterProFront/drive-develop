<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{1}}</title>
    @include('front.styles')
    @yield('styles')
</head>
<body>
    @include('front.header')
    @include('front.footer')
    @include('front.sponsors')
    <div class="wrapper">
        @yield('head')
        @yield('content')
        @yield('footer')
        @yield('sponsors')
    </div>
    @include('front.metricks')
    @include('front.scripts')
    @yield('metriks')
    @yield('scripts')
</body>
</html>