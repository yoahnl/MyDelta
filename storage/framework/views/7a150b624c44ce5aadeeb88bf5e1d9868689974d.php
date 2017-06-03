<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="content">
            <i class="fa fa-search" style="font-size:120px;color:#FF5959;margin-bottom:30px;"></i>
                <div class="row">
                    <h1 class="center">
                        Page not found
                    </h1>
                    <hr>
                        <a href="<?php echo e(url('/')); ?>"><h4 class="center">Homepage </h4></a>
                        <hr>
                        <a href="javascript:history.back()"><h4 class="center">Go Back</h4></a>
                </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>