<div class="container">

    <?php if(Session::has('flash_message')): ?>
        <?php if(Session::get('type') == 'error'): ?>
            <div class="alert alert-danger col-lg-4 col-lg-offset-4">
                <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo e(Session::get('flash_message')); ?>

            </div>
        <?php endif; ?>
        <?php if(Session::get('type') == 'sucess'): ?>
            <div class="alert alert-success col-lg-4 col-lg-offset-4">
                <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo e(Session::get('flash_message')); ?>


            </div>
        <?php endif; ?>
        <hr>
    <?php endif; ?>
</div>