<!DOCTYPE html>
<html>
<head>

    <title>Voyager - Welcome to Voyager. The Missing Admin for Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="UQIu1YvjzYPIowmoGrzVhMDaMgp3iLDias679QRK"/>
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|Lato:300,400,700,900' rel='stylesheet'
          type='text/css'>

    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/lib/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/js/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/js/datetimepicker/bootstrap-datetimepicker.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/animations.css')); ?>">

    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/css/themes/flat-blue.css">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/vendor/tcg/voyager/assets/images/logo-icon.png" type="image/x-icon">

    <!-- CSS Fonts -->
    <link rel="stylesheet" href="/vendor/tcg/voyager/assets/fonts/voyager/styles.css">
    <script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/vendor/tcg/voyager/assets/css/nestable.css">

    <!-- Voyager CSS -->
    <link rel="stylesheet" href="/vendor/tcg/voyager/assets/css/voyager.css">

    <!-- Few Dynamic Styles -->
    <style type="text/css">
        .flat-blue .side-menu .navbar-header, .widget .btn-primary, .widget .btn-primary:focus, .widget .btn-primary:hover, .widget .btn-primary:active, .widget .btn-primary.active, .widget .btn-primary:active:focus{
            background:#22A7F0;
            border-color:#22A7F0;
        }
        .breadcrumb a{
            color:#22A7F0;
        }
    </style>

</head>

<body class="flat-blue">

<div id="voyager-loader">
    <img src="/vendor/tcg/voyager/assets/images/logo-icon.png" alt="Voyager Loader">
</div>


<div class="app-container">
    <div class="fadetoblack visible-xs"></div>
    <div class="row content-container">
               <div class="side-menu sidebar-inverse">
            <nav class="navbar navbar-default" role="navigation">
                <div class="side-menu-container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="http://127.0.0.1:8000/admin">
                            <div class="logo-icon-container">
                                <img src="/vendor/tcg/voyager/assets/images/logo-icon-light.png" alt="Logo Icon">
                            </div>
                            <div class="title">Voyager</div>
                        </a>
                    </div><!-- .navbar-header -->

                    <div class="panel widget center bgimage"
                         style="background-image:url(/vendor/tcg/voyager/assets/images/bg.jpg);">
                        <div class="dimmer"></div>
                        <div class="panel-content">
                            <img src="http://localhost/storage/users/March2017/Adch1aNAc035Lad13XJy.png" class="avatar" alt="Admin avatar">
                            <h4>Admin</h4>
                            <p>admin@admin.com</p>

                            <a href="http://127.0.0.1:8000/admin/profile" class="btn btn-primary">Profile</a>
                            <div style="clear:both"></div>
                        </div>
                    </div>

                </div>

                <?php echo $__env->make('layout.nav-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </nav>
        </div>
        <!-- Main Content -->

        <?php echo $__env->yieldContent('content'); ?>

    </div>
</div>
<footer class="app-footer">
    <div class="site-footer-right">
        Made with <i class="voyager-heart"></i> by <a href="http://thecontrolgroup.com" target="_blank">The Control Group</a>
        - v0.11.7
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

<script>
    (function(){
        var appContainer = document.querySelector('.app-container'),
            sidebar = appContainer.querySelector('.side-menu'),
            navbar = appContainer.querySelector('nav.navbar.navbar-top'),
            loader = document.getElementById('voyager-loader'),
            anchor = document.getElementById('sidebar-anchor'),
            hamburgerMenu = document.querySelector('.hamburger'),
            sidebarTransition = sidebar.style.transition,
            navbarTransition = navbar.style.transition,
            containerTransition = appContainer.style.transition;

        sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition =
            appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition =
                navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = 'none';

        if (window.localStorage && window.localStorage['voyager.stickySidebar'] == 'true') {
            appContainer.className += ' expanded';
            loader.style.left = (sidebar.clientWidth/2)+'px';
            anchor.className += ' active';
            anchor.dataset.sticky = anchor.title;
            anchor.title = anchor.dataset.unstick;
            hamburgerMenu.className += ' is-active';
        }

        navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = navbarTransition;
        sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition = sidebarTransition;
        appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition = containerTransition;
    })();
</script>
<!-- Javascript Libs -->
<script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/toastr.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/lib/js/perfect-scrollbar.jquery.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/js/select2/select2.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/js/moment-with-locales.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<!-- Javascript -->
<script type="text/javascript" src="/vendor/tcg/voyager/assets/js/readmore.min.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/js/app.js"></script>
<script type="text/javascript" src="/vendor/tcg/voyager/assets/js/helpers.js"></script>

<script type="text/javascript" src="/vendor/tcg/voyager/assets/js/jquery.nestable.js"></script>



</body>
</html>