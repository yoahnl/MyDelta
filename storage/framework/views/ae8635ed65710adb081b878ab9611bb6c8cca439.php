
<?php
$companys = \App\Company::all();
?>
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper">
        <a href="<?php echo e(URL::to('/')); ?>" class="brand-logo"><img src="<?php echo e(asset('images/logo/logo.png')); ?>" width="200" ></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo e(URL::to('association')); ?>">Associations</a></li>
            <li><a href="<?php echo e(URL::to('company')); ?>">Entreprises</a></li>

        <?php if(Auth::guest()): ?>
            <?php else: ?>
                <li><a href="<?php echo e(URL::to('admin')); ?>">Administration du site</a></li>
                <li>
                    <a href="<?php echo e(url('logout')); ?>"
                       onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form"
                          action="<?php echo e(url('logout')); ?>"
                          method="POST"
                          style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
            <?php endif; ?>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="<?php echo e(URL::to('association')); ?>">ASSOCIATIONS</a></li>
            <?php if(Auth::guest()): ?>
            <?php else: ?>
                <li>
                    <a href="<?php echo e(url('logout')); ?>"
                       onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form"
                          action="<?php echo e(url('logout')); ?>"
                          method="POST"
                          style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
</div>
