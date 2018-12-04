<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <?php echo e(Form::model($employees, ['url' => 'employees_update'])); ?>

                <?php echo csrf_field(); ?>
                <h3>Editar empleado</h3><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <input type="hidden" name="idemployees" id="idemployees" value="<?php echo e($employees->idemployees); ?>">
                            <label class="col-sm-3 col-form-label">Tipo de Documento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <?php echo e(Form::select('documentType_id_edit', $documentTypes, null, ['class' => 'form-control'])); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">N° de documento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="document_edit" name="document_edit" placeholder="Ingrese el número de identificación"
                                    value="<?php echo e($employees->document); ?>" />
                                <?php echo $errors->first('document_edit','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nameEmployee_edit" name="nameEmployee_edit" placeholder="Ingrese el nombre de la persona"
                                    value="<?php echo e($employees->nameEmployee); ?>" />
                                <?php echo $errors->first('nameEmployee_edit','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellidos</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lastName_edit" name="lastName_edit" placeholder="Ingrese el apellido de la persona"
                                    value="<?php echo e($employees->lastName); ?>" />
                                <?php echo $errors->first('lastName_edit','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de Nacimiento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="birthDate_edit" name="birthDate_edit" placeholder="Ingrese el nombre de la persona"
                                    value="<?php echo e($employees->birthDate); ?>" />
                                <?php echo $errors->first('birthDate_edit','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dirección</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="address_edit" name="address_edit" placeholder="Dirección del lugar de residencia"
                                    value="<?php echo e($employees->address); ?>" />
                                <?php echo $errors->first('address_edit','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email_edit" placeholder="Ingrese el correo electrónico"
                                    name="email_edit" value="<?php echo e($employees->email); ?>" />
                                <?php echo $errors->first('email_edit','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Teléfono</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="Phone_edit" name="Phone_edit" placeholder="Ingrese el número de teléfono"
                                    value="<?php echo e($employees->Phone); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Número de hijos <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="numberSons_edit" name="numberSons_edit" placeholder="Número de hijos del empleado"
                                    name="numberSons_edit" value="<?php echo e($employees->numberSons); ?>" />
                                <?php echo $errors->first('numberSons_edit','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de entrada</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="entryDate_edit" name="entryDate_edit" placeholder="Ingrese el número de teléfono"
                                    value="<?php echo e($employees->entryDate); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Estado Civil</label>
                            <div class="col-sm-9">
                                <?php echo e(Form::select('maritalStatus_id_edit', $marital_st, null, ['class' => 'form-control'])); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Área de Trabajo</label>
                                <div class="col-sm-9">
                                    <?php echo e(Form::select('areas_id_edit', $area, null, ['class' => 'form-control'])); ?>

                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Vacaciones</label>
                            <div class="col-sm-9">
                                <?php echo e(Form::select('holidays_id_edit', $holidays, null, ['class' => 'form-control'])); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">

                    </div>
                </div>
                    <button class="btn btn-success pull-right" type="submit">Actualizar</button>
           <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>