<!DOCTYPE html>
<html lang="fr">

<!--/head-->
@include('layout.head')
    @yield('before-body')
<body>
@include('layout.header')

<!--Body of 'content' -->
    @yield('content')

<!--End of Body of 'content' -->

@include('layout.script')
    @yield('js')
@include('layout.footer')
</body>
</html>
