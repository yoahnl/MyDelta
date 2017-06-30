<?php $__env->startSection('content'); ?>
    <div class="row">
        <div style="padding-top: 10%">
            <?php echo $__env->make('layout.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    </div>
    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(URL::to('admin/setcompany')); ?>" style="padding-left: 10%">
        <?php echo e(csrf_field()); ?>

        <section id="blog" class="container">
            <div class="row">
                <aside class="col-sm-4 col-sm-push-8">

                    <!--/.ads-->

                    <div class="widget tags">
                </aside>


                <div class="col-sm-8 col-sm-pull-4">

                    <?php $__currentLoopData = $companys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="blog">
                            <div class="blog-item">
                                <div class="blog-content">

                                    <a href="<?php echo e(URL::to('company/'.$company->name)); ?>"><h3><?php echo e($company->name); ?></h3></a>
                                    <hr>

                                    <?php $__currentLoopData = $associations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $association): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        $companys_association_array;
                                        $companys_association_array = json_decode($company->association);
                                        var_dump($companys_association_array);
                                        if ($companys_association_array == NULL)
                                            {
                                                $companys_association_array = array("", "", "", "");
                                            }
                                        ?>


                                        <?php if(in_array($association->name, $companys_association_array)): ?>

                                            <div class="switch">
                                                <label>
                                                    <h5>
                                                        <?php echo e($association->name); ?>

                                                    </h5>
                                                    <br>
                                                    <input id="association_<?php echo e($company->name); ?>[]" name="association_<?php echo e($company->name); ?>[]" type="checkbox" value="<?php echo e($association->name); ?>" checked>
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        <?php elseif(!in_array($association->name, $companys_association_array)): ?>
                                            <div class="switch">
                                                <label>
                                                    <?php echo e($association->name); ?> <br>
                                                    <input id="association_<?php echo e($company->name); ?>[]" name="association_<?php echo e($company->name); ?>[]" type="checkbox" value="<?php echo e($association->name); ?>">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div><!--/.blog-item-->
                            <br>
                            <br>
                            <hr>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div><!--/.row-->
                <div class="col m3 push-m5">
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Générer</button>
                        </div>
                    </div>
                </div>

        </section><!--/#blog-->
    </form>
    </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.master-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>