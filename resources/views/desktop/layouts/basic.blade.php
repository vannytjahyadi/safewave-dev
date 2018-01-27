<!DOCTYPE html>
<html lang="en">
    @yield('head')
    <body>
        @yield('header')

        <div id="app">
            @yield('content')
        </div>

        @yield('footer')

        <!-- add this script -->
        <script src="{{ mix('js/app.js') }}"></script>
        @stack('script')
    </body>
</html>