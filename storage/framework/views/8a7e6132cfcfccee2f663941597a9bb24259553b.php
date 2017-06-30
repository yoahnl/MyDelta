<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="content">
            <i class="fa fa-search" style="font-size:120px;color:#FF5959;margin-bottom:30px;"></i>
            <?php if(isset($record_name) && isset($record_id)): ?>
                <div class="title"><?php echo e($record_name); ?> with id <?php echo e($record_id); ?> not found</div>
            <?php else: ?>
                <div class="row">
                    <h1 class="center">
                        Page not found
                    </h1>
                    <hr>


            <?php endif; ?>

            <?php if(Auth::guest()): ?>
                <a href="<?php echo e(url('/')); ?>"><h4 class="center">Homepage </h4></a>
                        <hr>
                <a href="javascript:history.back()"><h4 class="center">Go Back</h4></a>
            <?php else: ?>
                <a href="<?php echo e(url(config('laraadmin.adminRoute'))); ?>">Dashboard.</a> |
                <a href="javascript:history.back()">Go Back</a>
            <?php endif; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>