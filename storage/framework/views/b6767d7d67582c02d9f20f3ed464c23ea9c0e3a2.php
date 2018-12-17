<div class="modal fade" id="modal_employees_addLvls" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width: 876px !important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form id="frm_mdl" action="<?php echo e(route('level_Educative.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nivel educativo </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="levelEducative_id_mdl" id="levelEducative_id_mdl">
                                            <option value="0">Seleccione una opción</option>
                                            <?php $__currentLoopData = $level_educative; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id_levelEducative); ?>"><?php echo e($item->description_levelEducative); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Profesiones </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="professions_id_mdl" id="professions_id_mdl">
                                            <option value="0">Seleccione una opción</option>
                                            <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->idProfession); ?>"><?php echo e($item->nameProfession); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fecha de inicio </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="yearStart_mdl" name="yearStart_mdl" placeholder="Ingrese el nombre de la empresa" value="<?php echo e(old('yearStart_mdl')); ?>" onchange="valueStart_mdl(this.value)" />
                                    <?php echo $errors->first('yearStart_mdl','<span class=error>:message</span>'); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fecha de fin</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" style="font-size: 15px;" name="yearEnd_mdl" id="yearEnd_mdl" value="<?php echo e(old('yearEnd_mdl')); ?>" onchange="valueEnd_mdl(this.value)">
                                     <?php echo $errors->first('yearEnd_mdl','<span class=error>:message</span>'); ?>


                                     <button type="button" class="btn btn-icons btn-rounded btn-success btn pull-right" style="border-radius:20px border-radius:20px;margin-left: 248px;margin-top: -38px;" title="Añadir a la tablaphp" onclick="edit_lvl_educative()"><i class="fas fa-plus-circle"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-md-12">
                <table class="table responsive" style="margin-top: 26px;">
                    <thead>
                        <tr>
                            <th>Nivel educativo</th>
                            <th>Profesión</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de fin</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody id="tbl_mdl_lvlEducative">
                    </tbody>

                    </table><br>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-lg pull-right" style="padding:10px;margin-left:766px;">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </form>
            </div>
        </div>
    </div>
</div>
