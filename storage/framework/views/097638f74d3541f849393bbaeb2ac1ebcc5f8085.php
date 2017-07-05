<!DOCTYPE html>
<html lang="fr">

<!--/head-->
<?php echo $__env->make('layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('before-body'); ?>
<header>
    <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<body>


<!--Body of 'content' -->
    <?php echo $__env->yieldContent('content'); ?>

<!--End of Body of 'content' -->

<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
