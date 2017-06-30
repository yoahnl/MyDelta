<?php $__env->startSection('content'); ?>
    <div style="padding-left: 50%; padding-top: 10%">

    </div>




    <?php if(Session::has('flash_message')): ?>
        <h3 class="text-center">Nouveaux coupons </h3>

        <hr>
        <div class="row">
            <div class="col s10 offset-s2">

                <div class="fixed-table-body">
                    <table id="grid" class="table table-striped table-hover" data-toolbar="#toolbargrid" data-pagination="true" data-search="true">
                        <thead>
                        <tr>
                            <th class="text-left" style="">
                                <div class="th-inner sortable">ID</div>
                                <div class="fht-cell"></div>
                            </th>
                            <th class="text-left" style="">
                                <div class="th-inner sortable">code</div>
                                <div class="fht-cell"></div>
                            </th>
                            <th class="text-left" style="">
                                <div class="th-inner sortable">Montant</div>
                                <div class="fht-cell"></div>
                            </th>
                            <th class="text-left" style="">
                                <div class="th-inner sortable">Société</div>
                                <div class="fht-cell"></div>
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $newcode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-index="0">
                                <td class="text-left" style=""><?php echo e($code->id); ?></td>
                                <td class="text-left" style=""><?php echo e($code->code); ?></td>
                                <td class="text-left" style=""><?php echo e($code->donation); ?></td>
                                <td class="text-left" style=""><?php echo e($code->linkedto); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
            <?php endif; ?>
            <br>
            <br>
            <div class="row">
                <div class="col s8 offset-s2">
                    <div>
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(URL::to('admin/create')); ?>">

                            <?php echo e(csrf_field()); ?>


                            <fieldset>

                                <!-- Form Name -->
                                <div class="row">
                                    <div class="col s1 offset-s2"></div>
                                    <h1 class="text-center">Générateur de code</h1>
                                </div>

                                <!-- Select Basic -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="valeur" name="valeur" type="text" class="validate">
                                        <label for="valeur">Nombre de code</label>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="input-field col s12">
                                    <select id="company_name" name="company_name" class="form-control">
                                        <option value="" disabled selected>Selectionner une entreprise</option>
                                        <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($companys->name); ?>"><?php echo e($companys->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                </div>

                                <!-- Select Basic -->

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="coupon" name="coupon" type="text" class="validate">
                                        <label for="coupon">Valeur des coupons</label>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton"></label>
                                    <div class="col-md-4">
                                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Générer</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>