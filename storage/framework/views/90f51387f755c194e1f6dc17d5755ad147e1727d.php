<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <form action="<?php echo e(route('employees.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h3>Registrar empleado</h3><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tipo de Documento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="documentType_id" id="documentType_id">
                                    <?php $__currentLoopData = $documentTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idDocumentType); ?>"><?php echo e($value->descriptionDocument); ?></option>
                                    <?php echo $errors->first('documentType_id','<span class=error>:message</span>'); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">N° de documento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="document" name="document" placeholder="Ingrese el número de identificación"
                                    value="<?php echo e(old('document')); ?>" />
                                <?php echo $errors->first('document','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nameEmployee" name="nameEmployee" placeholder="Ingrese el nombre de la persona"
                                    value="<?php echo e(old('nameEmployee')); ?>" />
                                <?php echo $errors->first('nameEmployee','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellidos</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Ingrese el apellido de la persona"
                                    value="<?php echo e(old('lastName')); ?>" />
                                <?php echo $errors->first('lastName','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de Nacimiento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Ingrese el nombre de la persona"
                                    value="<?php echo e(old('birthDate')); ?>" />
                                <?php echo $errors->first('birthDate','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dirección</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Dirección del lugar de residencia"
                                    value="<?php echo e(old('address')); ?>" />
                                <?php echo $errors->first('address','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" placeholder="Ingrese el correo electrónico"
                                    name="email" value="<?php echo e(old('email')); ?>" />
                                <?php echo $errors->first('email','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Teléfono</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="Phone" name="Phone" placeholder="Ingrese el número de teléfono"
                                    value="<?php echo e(old('Phone')); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Número de hijos <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="numberSons" name="numberSons" placeholder="Número de hijos del empleado"
                                    name="numberSons" value="<?php echo e(old('numberSons')); ?>" />
                                <?php echo $errors->first('numberSons','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de entrada</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="entryDate" name="entryDate" placeholder="Ingrese el número de teléfono"
                                    value="<?php echo e(old('entryDate')); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nivel educativo <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="levelEducative" placeholder="Nivel educativo del empleado"
                                    name="levelEducative" value="<?php echo e(old('levelEducative')); ?>" />
                                <?php echo $errors->first('levelEducative','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cesantías</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="layoffs_id" id="layoffs_id">
                                    <?php $__currentLoopData = $layoffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idLayoffs); ?>"><?php echo e($value->descriptionLayoffs); ?></option>
                                    <?php echo $errors->first('layoffs_id','<span class=error>:message</span>'); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pensión</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="pensions_id" id="pensions_id">
                                            <?php $__currentLoopData = $pension; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($value->idPensions); ?>"><?php echo e($value->namePensions); ?></option>
                                            <?php echo $errors->first('pensions_id','<span class=error>:message</span>'); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">EPS</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="EPS_id" id="EPS_id">
                                        <?php $__currentLoopData = $eps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value->idEPS); ?>"><?php echo e($value->nameEPS); ?></option>
                                        <?php echo $errors->first('EPS_id','<span class=error>:message</span>'); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Vacaciones</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="holidays_id" id="holidays_id">
                                    <?php $__currentLoopData = $holidays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idHolidays); ?>"><?php echo e($value->descriptionHolidays); ?></option>
                                    <?php echo $errors->first('holidays_id','<span class=error>:message</span>'); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fondo de Compensación</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="compenstionFound_id" id="compenstionFound_id">
                                    <?php $__currentLoopData = $cf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idCompensationFound); ?>"><?php echo e($value->description); ?></option>
                                    <?php echo $errors->first('compenstionFound_id','<span class=error>:message</span>'); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Área de Trabajo</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="areas_id" id="areas_id">
                                    <?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idAreas); ?>"><?php echo e($value->nameArea); ?></option>
                                    <?php echo $errors->first('areas_id','<span class=error>:message</span>'); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Estado Civil</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="maritalStatus_id" id="maritalStatus_id">
                                    <?php $__currentLoopData = $marital_st; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idMaritalStatus); ?>"><?php echo e($value->nameMaritalStatus); ?></option>
                                    <?php echo $errors->first('maritalStatus_id','<span class=error>:message</span>'); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">ARL</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="ARL_id" id="ARL_id">
                                    <?php $__currentLoopData = $arl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idARL); ?>"><?php echo e($value->nameARL); ?></option>
                                    <?php echo $errors->first('ARL_id','<span class=error>:message</span>'); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Bonus</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="bonus_idBonus" id="bonus_idBonus">
                                    <?php $__currentLoopData = $bonus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idBonus); ?>"><?php echo e($value->descriptionBonus); ?></option>
                                    <?php echo $errors->first('bonus_idBonus','<span class=error>:message</span>'); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                    <button class="btn btn-success pull-right" type="submit">Registrar</button>
            </form>
        </div>
    </div>
</div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>