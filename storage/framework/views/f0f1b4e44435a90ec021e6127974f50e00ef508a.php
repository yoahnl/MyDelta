<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-top: 2em">
        <div class="col s12">
            <div id="companymydelta1_hype_container" style="margin:auto;position:relative;width:450px;height:100px;overflow:hidden;" aria-live="polite">
                <script type="text/javascript" charset="utf-8" src="company_mydelta_1.hyperesources/companymydelta1_hype_generated_script.js?13543"></script>
            </div>
        </div>
    </div>




    <section class="enterprise">
        <div class="row">
            <div class="col s12">
                <div class="content">
                    <?php $__currentLoopData = $companys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col m3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?php echo e($company->logo); ?>" height="50">
                            </div>
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?php echo e($company->image); ?>" width="70">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator tilte-enterprise"><?php echo e($company->name); ?></span>
                                <p>Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus</p>
                                <div class="btn-info-card">
                                    <a href="<?php echo e(URL::to('company/'.$company->name)); ?>" class="waves-effect waves-light btn btn-align-center">Découvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>