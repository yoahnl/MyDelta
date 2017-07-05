<!DOCTYPE html>
<html lang="fr">

<!--/head-->
@include('layout.head')
    @yield('before-body')
<header>
    @include('layout.header')
</header>
<body>


<!--Body of 'content' -->
    @yield('content')

<!--End of Body of 'content' -->

@include('layout.script')
    @yield('js')
@include('layout.footer')
</body>
</html>
