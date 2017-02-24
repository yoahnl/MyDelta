<!DOCTYPE html>
<html lang="en">
<!--/head-->
@include('layout.head')
<body>
@include('layout.header')

    @yield('content')

@include('layout.script')
    @yield('js')
@include('layout.footer')
</body>
</html>
