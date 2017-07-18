<?php $__env->startSection('content'); ?>


    <div class="row association-content-all">
        <h3 class="center-align">Nos association</h3>
        <div class="col m12">
            <div class="col m2">
                <ul class="selec-asso">
                    <li class="center-align titleli">Filtres :</li>
                    <?php $__currentLoopData = $typeAssociations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeAssociation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <a href="<?php echo e(URL::to('/association/'.$typeAssociation)); ?>"><li class="hoverli"><?php echo e($typeAssociation); ?></li></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php
            $i = 0;
            ?>
            <?php $__currentLoopData = $associations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $association): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($i == 4): ?>
                    <?php
                    echo '<br>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col s12">';
                    $i = 0;
                    ?>
                <?php endif; ?>
                <div class="col m2">
                    <div class="card card-size sticky-action" style="overflow: hidden;">
                        <div class="card-image waves-effect waves-block waves-light bg-img-card card-one">
                            <img class="activator" src="<?php echo e($association->logo); ?>">
                        </div>
                        <div class="card-content">
          <span class="card-title tilte-asso grey-text text-darken-4"><?php echo e($association->name); ?>

              <div class="separator"></div>
          </span>
                            <p>Qui cum venisset ob haec festinatis itineribus Antiochiam, praestrictis palatii ianuis, contempto Caesare</p>
                            <a href="<?php echo e(URL::to('give/'.$association->name)); ?>">
                                <span class="card-title activator footer-card-active grey-text text-darken-4"><span class="name-asso"></span><i class="btn waves-effect white grey-text darken-text-2 right more-info">en savoir plus</i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                if ($i == 4)
                {
                    echo '</div>';
                    echo '</div>';
                }
                $i++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>