<?php $__env->startSection('content'); ?>
    <br>
    <div class="row">
        <div class="col s12">
            <div id="associationmydelta1_hype_container" style="margin:auto;position:relative;width:450px;height:100px;overflow:hidden;" aria-live="polite">
                <script type="text/javascript" charset="utf-8" src="association_mydelta_1.hyperesources/associationmydelta1_hype_generated_script.js?37685"></script>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
            <ul class="arrow">
                <a href="<?php echo e(URL::to('/association')); ?>"><h4 class="grey-black_delta">Catégories</h4></a>
                <?php $__currentLoopData = $typeAssociations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeAssociation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h6> <li><a href="<?php echo e(URL::to('/association/'.$typeAssociation)); ?>" class="grey-text text-darken-2"> > <?php echo e($typeAssociation); ?></a></li> </h6>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
            <?php $__currentLoopData = $associations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $association): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col s10">
                    <div class="card-panel hoverable">
                        <a href="<?php echo e(URL::to('give/'.$association->name)); ?>" class="grey_delta">
                            <img src="<?php echo e($association->logo); ?>" alt="<?php echo e($association->name); ?>" width="100">
                            <h5 class="center grey-black_delta"><?php echo e($association->name); ?></h5>
                            <h6>Catégorie: <?php echo e($association->type); ?></h6>
                            <p class="light"><?php echo e($association->small_description); ?></p>
                            <hr>
                            <?php
                            $url = "http://".$association->url;
                            ?>
                            <a href=<?php echo e(url($url)); ?> >
                                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">En savoir plus</button>
                            </a>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>