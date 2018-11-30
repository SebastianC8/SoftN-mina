<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <form action="<?php echo e(route('contracts.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h3>Registrar contrato</h3><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">N° de documento del empleado</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="document" name="document" onchange="getEmployee()" placeholder="Número de documento del empleado"
                                value="<?php echo e(old('document')); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Empleado</label>
                                <div class="col-sm-9">
                                    <input type="text" readOnly class="form-control" id="name_empleado" name="name_empleado" placeholder="Nombre del empleado"
                                    value="" />
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Descripción <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="descriptionContract" name="descriptionContract" placeholder="Ingrese la descripción del contrato"
                                    value="<?php echo e(old('descriptionContract')); ?>" />
                                <?php echo $errors->first('descriptionContract','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tipo de contrato <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="typeContract_id" id="typeContract_id">
                                    <?php $__currentLoopData = $type_contract; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($index->idtypeContract); ?>"><?php echo e($index->descriptionType); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Fecha de inicio <span style="color:red">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="dateStart" name="dateStart" placeholder="Ingrese la descripción del contrato"
                                            value="<?php echo e(old('dateStart')); ?>" />
                                        <?php echo $errors->first('dateStart','<span class=error>:message</span>'); ?>

                                    </div>
                                </div>
                            </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha fin <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="dateEnd" name="dateEnd" placeholder="Ingrese la descripción del contrato"
                                    value="<?php echo e(old('dateEnd')); ?>" />
                                <?php echo $errors->first('dateEnd','<span class=error>:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Prima <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="bonus_id" id="bonus_id">
                                    <?php $__currentLoopData = $bonus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idBonus); ?>"><?php echo e($value->descriptionBonus); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Compañía</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="company_id" id="company_id">
                                     <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($index->idCompany); ?>"><?php echo e($index->companyName); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cargo</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="ratesJob_id" id="ratesJob_id">
                                     <?php $__currentLoopData = $rates_job; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($index->idRatesJob); ?>"><?php echo e($index->nameJob); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Horas diarias</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="hoursDaily" name="hoursDaily" placeholder="Horas diarias del empleado"
                                    value="<?php echo e(old('hoursDaily')); ?>" />
                                </div>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jornada laboral</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="workDay" name="workDay" placeholder="Ingrese la jornada del empleado"
                                    value="<?php echo e(old('workDay')); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <button class="btn btn-success pull-right" style="margin-left: -23px;" type="button">Añadir <i class="fas fa-plus-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Código contrato</th>
                                        <th>Empleado</th>
                                    </tr>
                                </thead>
                                <tbody id="contratoxempleado">
                                </tbody>
                            </table>
                        </div>
                </div>
                <br><button class="btn btn-success pull-right" type="submit">Registrar</button>
            </form>
        </div>
    </div>
</div>
</div>

</div>
<?php $__env->stopSection(); ?>

<script>
    function getEmployee(){
        var document = $("#document").val();
        $.get("<?php echo e(url('contracts')); ?>" + '/employee' + '/' + document, (data)=>{
            if(data == null){
                $("#name_empleado").text("Vacío");
            }else{
                $("#name_empleado").val(data.nameEmployee + " " + data.lastName);
            }
        })
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>