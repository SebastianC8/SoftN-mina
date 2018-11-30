<?php $__env->startSection('contenido'); ?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="/css/wizard.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/js/wizardJS.js')); ?>"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="padding-top: 0;">
<div class="card">
<div class="card-body" style="padding: 0p;">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p><label class="control-label">Gestionar empleado</label></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p><label class="control-label">Información profesional</label></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p><label class="control-label">Gestionar contrato</label></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p><label class="control-label">Gestionar vinculaciones</label></p>
        </div>
    </div>
</div>
<form id="form_register_contract_employees" action="<?php echo e(route('employees.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row setup-content" id="step-1">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                <h3>Empleado</h3><br>
                <div class="form-group">
                    <label class="control-label">Tipo de documento</label>
                    <select class="form-control" name="documentType_id" id="documentType_id" required>
                        <option value="0">Seleccione una opción</option>
                        <?php $__currentLoopData = $documentTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->idDocumentType); ?>"><?php echo e($value->descriptionDocument); ?></option>
                        <?php echo $errors->first('documentType_id','<span class=error>:message</span>'); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label">Nombre</label>
                    <input type="text" class="form-control" id="nameEmployee" name="nameEmployee" placeholder="Ingrese el nombre de la persona"
                    value="<?php echo e(old('nameEmployee')); ?>" required />
                    <?php echo $errors->first('nameEmployee','<span class=error>:message</span>'); ?>

                </div>

                <div class="form-group">
                    <label class="control-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Ingrese el nombre de la persona"
                    value="<?php echo e(old('birthDate')); ?>" required />
                    <?php echo $errors->first('birthDate','<span class=error>:message</span>'); ?>

                </div>

                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Ingrese el correo electrónico"
                    name="email" value="<?php echo e(old('email')); ?>" required />
                    <?php echo $errors->first('email','<span class=error>:message</span>'); ?>

                </div>

                <div class="form-group">
                    <label class="control-label">Número de hijos</label>
                    <input type="text" class="form-control" id="numberSons" name="numberSons" placeholder="Número de hijos del empleado"
                    name="numberSons" value="<?php echo e(old('numberSons')); ?>" required />
                    <?php echo $errors->first('numberSons','<span class=error>:message</span>'); ?>

                </div>

                <div class="form-group">
                    <label class="control-label">Vacaciones</label>
                    <select class="form-control required" name="holidays_id" id="holidays_id" required>
                        <option value="0">Seleccione una opción</option>
                        <?php $__currentLoopData = $holidays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->idHolidays); ?>"><?php echo e($value->descriptionHolidays); ?></option>
                        <?php echo $errors->first('holidays_id','<span class=error>:message</span>'); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Área de trabajo</label>
                    <select class="form-control" name="area_id" id="area_id" required>
                        <option value="0">Seleccione una opción</option>
                        <?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->idAreas); ?>"><?php echo e($value->nameArea); ?></option>
                        <?php echo $errors->first('area_id','<span class=error>:message</span>'); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                </div>
                <div class="col-md-6">
                    <br><br><br><br>
                    <div class="form-group">
                        <label class="control-label">N° de documento</label>
                        <input type="text" class="form-control" id="document" name="document" placeholder="Ingrese el número de identificación"
                        value="<?php echo e(old('document')); ?>" required />
                        <?php echo $errors->first('document','<span class=error>:message</span>'); ?>

                    </div>

                    <div class="form-group">
                        <label class="control-label">Apellidos</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Ingrese el apellido de la persona"
                        value="<?php echo e(old('lastName')); ?>" required />
                        <?php echo $errors->first('lastName','<span class=error>:message</span>'); ?>

                    </div>

                    <div class="form-group">
                        <label class="control-label">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Dirección del lugar de residencia"
                        value="<?php echo e(old('address')); ?>" minlenght="5" maxlenght="45" required/>
                        <?php echo $errors->first('address','<span class=error>:message</span>'); ?>

                    </div>

                    <div class="form-group">
                        <label class="control-label">Teléfono</label>
                        <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Ingrese el número de teléfono"
                        value="<?php echo e(old('Phone')); ?>"/>
                        <?php echo $errors->first('Phone','<span class=error>:message</span>'); ?>

                    </div>

                    <div class="form-group">
                        <label class="control-label">Fecha de ingreso</label>
                        <input type="date" class="form-control" id="entryDate" name="entryDate" placeholder="Ingrese el número de teléfono"
                        value="<?php echo e(old('entryDate')); ?>" required/>
                        <?php echo $errors->first('entryDate','<span class=error>:message</span>'); ?>

                    </div>

                    <div class="form-group">
                        <label class="control-label">Estado civil</label>
                        <select class="form-control" name="maritalStatus_id" id="maritalStatus_id" required>
                            <option value="0">Seleccione una opción</option>
                            <?php $__currentLoopData = $marital_st; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->idMaritalStatus); ?>"><?php echo e($value->nameMaritalStatus); ?></option>
                            <?php echo $errors->first('maritalStatus_id','<span class=error>:message</span>'); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button" >Siguiente</button>
            </div>
        </div>
    </div>

    <div class="row setup-content" id="step-2">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="col-md-12">
                    <br>
                    <h3>Nivel educativo</h3>
                    <div class="form-group">
                        <label class="control-label">Niveles educativos</label>
                        <select class="form-control" name="level_educative_id" id="level_educative_id" required>
                            <option value="0">Seleccione una opción</option>
                            <?php $__currentLoopData = $level_educative; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->id_levelEducative); ?>"><?php echo e($value->description_levelEducative); ?></option>
                            <?php echo $errors->first('level_educative_id','<span class=error>:message</span>'); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Profesiones</label>
                            <select class="form-control" name="professions_id" id="professions_id" required>
                                <option value="0">Seleccione una opción</option>
                                <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->idProfession); ?>"><?php echo e($value->nameProfession); ?></option>
                                <?php echo $errors->first('professions_id','<span class=error>:message</span>'); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <button type="button" class="btn btn-success btn-mine" onclick="add_levelEducative_professions()">Añadir <i class="fas fa-plus-circle"></i></button>
                        <br>
                </div>
            </div>
            <div class="col-md-4">
                <br>
                <div class="form-group" style="margin-top: 54px;">
                    <label for="">Año de inicio</label>
                    <input type="date" id="1" class="form-control" id="yearStart" name="yearStart" required onchange="valueStart(this.value)" value="<?php echo e(old('yearStart')); ?>">
                </div>
            </div>
            <div class="col-md-4">
                <br>
                <div class="form-group" style="margin-top: 54px;">
                    <label for="">Año de terminación</label>
                    <input type="date" class="form-control" id="yearEnd" name="yearEnd" required onchange="valueEnd(this.value)" value="<?php echo e(old('yearEnd')); ?>">
                </div>
            </div>

        <button class="btn btn-success nextBtn btn-lg pull-right" type="button" style="position:absolute;right:0px; margin-top:240px;">Siguiente</button>

        </div>
        <div class="container">
             <table id="table_lvlEducative_Professions" class="table table-bordered" style="margin-top: 90px;">
                <thead>
                    <tr>
                        <th>Nivel educativo</th>
                        <th>Profesión</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha de fin</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                </tbody>

                </table>
        </div>
    </div>

    <div class="row setup-content" id="step-3">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                    <br><br>
                    <h3>Contrato</h3><br>
                    <div class="form-group">
                        <label class="control-label">Descripción</label>
                        <input type="text" class="form-control" id="descriptionContract" name="descriptionContract" placeholder="Ingrese una descripción para el contrato"
                        value="<?php echo e(old('descriptionContract')); ?>" required />
                        <?php echo $errors->first('descriptionContract','<span class=error>:message</span>'); ?>

                    </div>

                    <div class="form-group">
                        <label class="control-label">Fecha de inicio</label>
                        <input type="date" class="form-control" id="dateStart" name="dateStart" placeholder="Ingrese el nombre de la persona"
                        value="<?php echo e(old('dateStart')); ?>" required />
                        <?php echo $errors->first('dateStart','<span class=error>:message</span>'); ?>

                    </div>

                    <div class="form-group">
                        <label class="control-label">Prima</label>
                        <select class="form-control" name="bonus_id" id="bonus_id">
                            <option value="0">Seleccione una opción</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                            <?php echo $errors->first('bonus_id','<span class=error>:message</span>'); ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Cargo</label>
                        <select class="form-control" name="ratesJob_id" id="ratesJob_id">
                            <option value="0">Seleccione una opción</option>
                            <?php $__currentLoopData = $rates_job; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->idRatesJob); ?>"><?php echo e($value->nameJob); ?></option>
                            <?php echo $errors->first('ratesJob_id','<span class=error>:message</span>'); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Jornada laboral</label>
                        <input type="text" class="form-control" id="workDay" placeholder="Jornada laboral del empleado"
                        name="workDay" maxlength="45" value="<?php echo e(old('workDay')); ?>" required />
                        <?php echo $errors->first('workDay','<span class=error>:message</span>'); ?>

                    </div>

                    <div class="form-group">
                        <label class="control-label">Periodo de pago</label>
                        <input type="text" class="form-control" id="payment_period" name="payment_period" placeholder="Días de pago del salario"
                        name="payment_period" value="<?php echo e(old('payment_period')); ?>" required />
                    </div>

                    </div>

                    <div class="col-md-6">
                        <br><br><br><br>
                        <div class="form-group">
                            <br><br>
                            <label class="control-label">Tipo de contrato</label>
                            <select class="form-control" name="typeContract_id" id="typeContract_id" onchange="getTypeContract(this.value)" required>
                                <option value="0">Seleccione una opción</option>
                                <?php $__currentLoopData = $type_contract; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->idtypeContract); ?>"><?php echo e($value->descriptionType); ?></option>
                                <?php echo $errors->first('typeContract_id','<span class=error>:message</span>'); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Fecha fin</label>
                            <input type="date" class="form-control" id="dateEnd" name="dateEnd" placeholder="Ingrese el apellido de la persona"
                            value="<?php echo e(old('dateEnd')); ?>" required/>
                            <?php echo $errors->first('dateEnd','<span class=error>:message</span>'); ?>

                        </div>

                        <div class="form-group">
                            <label class="control-label">Compañía</label>
                            <select class="form-control" name="company_id" id="company_id" required>
                                <option value="0">Seleccione una opción</option>
                                <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->idCompany); ?>"><?php echo e($value->companyName); ?></option>
                                <?php echo $errors->first('company_id','<span class=error>:message</span>'); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Horas diarias</label>
                            <input type="number" class="form-control" id="hoursDaily" name="hoursDaily" placeholder="Horas diarias de trabajo"
                            value="<?php echo e(old('hoursDaily')); ?>" required/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Resolución</label>
                            <select class="form-control" name="resolution_idResolution" id="resolution_idResolution" required>
                                <option value="0">Seleccione una opción</option>
                                <?php $__currentLoopData = $resolution; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->idResolution); ?>"><?php echo e($value->nameResolution); ?></option>
                                <?php echo $errors->first('resolution_idResolution','<span class=error>:message</span>'); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Adjuntar contrato</label>
                            <input type="file" class="form-control" id="attachment_contract" name="attachment_contract" placeholder="Días de pago del salario"
                            name="attachment_contract" value="<?php echo e(old('attachment_contract')); ?>" required />
                        </div>

                    </div>
                </div>
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button" >Siguiente</button>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-4">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                    <h3>Vinculaciones</h3><br>
                    <div class="form-group">
                        <label class="control-label">EPS</label>
                        <select class="form-control" name="eps_id" id="eps_id" required>
                            <option value="0">Seleccione una opción</option>
                            <?php $__currentLoopData = $eps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->idEPS); ?>"><?php echo e($value->nameEPS); ?></option>
                            <?php echo $errors->first('eps_id','<span class=error>:message</span>'); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">ARL</label>
                        <select class="form-control" name="arl_id" id="arl_id" required>
                            <option value="0">Seleccione una opción</option>
                            <?php $__currentLoopData = $arl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->idARL); ?>"><?php echo e($value->nameARL); ?></option>
                            <?php echo $errors->first('arl_id','<span class=error>:message</span>'); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Pensión</label>
                        <select class="form-control" name="pensions_id" id="pensions_id" required>
                            <option value="0">Seleccione una opción</option>
                            <?php $__currentLoopData = $pension; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->idPensions); ?>"><?php echo e($value->namePensions); ?></option>
                            <?php echo $errors->first('pensions_id','<span class=error>:message</span>'); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Fondo de compensación</label>
                        <select class="form-control" name="compensationfound_id" id="compensationfound_id" required>
                            <option value="0">Seleccione una opción</option>
                            <?php $__currentLoopData = $cf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->idCompensationFound); ?>"><?php echo e($value->description); ?></option>
                            <?php echo $errors->first('compensationfound_id','<span class=error>:message</span>'); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Cesantías</label>
                        <select class="form-control" name="layoffs_id" id="layoffs_id" required>
                            <option value="0">Seleccione una opción</option>
                            <?php $__currentLoopData = $layoffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->idLayoffs); ?>"><?php echo e($value->descriptionLayoffs); ?></option>
                            <?php echo $errors->first('layoffs_id','<span class=error>:message</span>'); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    </div>

                    <div class="col-md-6">
                        <br><br><br><br>
                        <div class="form-group">
                            <label class="control-label">Fecha de afiliación EPS</label>
                            <input type="date" class="form-control" id="date_linking_eps" name="date_linking_eps"
                            value="<?php echo e(old('date_linking_eps')); ?>" />
                            <?php echo $errors->first('date_linking_eps','<span class=error>:message</span>'); ?>

                        </div>

                        <div class="form-group">
                            <label class="control-label">Fecha de afiliación ARL</label>
                            <input type="date" class="form-control" id="date_linking_arl" name="date_linking_arl"
                            value="<?php echo e(old('date_linking_arl')); ?>" />
                            <?php echo $errors->first('date_linking_arl','<span class=error>:message</span>'); ?>

                        </div>

                        <div class="form-group">
                            <label class="control-label">Fecha de afiliación a pensión</label>
                            <input type="date" class="form-control" id="date_linking_pension" name="date_linking_pension"
                            value="<?php echo e(old('date_linking_pension')); ?>" />
                            <?php echo $errors->first('date_linking_pension','<span class=error>:message</span>'); ?>

                        </div>

                        <div class="form-group">
                            <label class="control-label">Fecha de afiliación al fondo de compensación</label>
                            <input type="date" class="form-control" id="date_linking_foundCompensation" name="date_linking_foundCompensation"
                            value="<?php echo e(old('date_linking_foundCompensation')); ?>" />
                            <?php echo $errors->first('date_linking_foundCompensation','<span class=error>:message</span>'); ?>

                        </div>

                        <div class="form-group">
                            <label class="control-label">Fecha de afiliación a cesantías</label>
                            <input type="date" class="form-control" id="date_linking_layoffs" name="date_linking_layoffs"
                            value="<?php echo e(old('date_linking_layoffs')); ?>" />
                            <?php echo $errors->first('date_linking_layoffs','<span class=error>:message</span>'); ?>

                        </div>

                    </div>
                </div>
                <button class="btn btn-success btn-lg pull-right" type="submit">Enviar</button>
                </div>
            </div>
        </div>
</form>

</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<script>
    function getTypeContract(value){
        if(value==2){
            $("#dateEnd").attr("disabled", true);
        }else if(value==1){
            $("#dateEnd").attr("disabled", false);
        }
    }
</script>

<script>
    var getValueStart = 0;
    var getValueEnd = 0;

    function valueStart(date){
        getValueStart = date;
    }

    function valueEnd(date){
        getValueEnd = date;
    }

    function add_levelEducative_professions(){
        let id_levelEducative = $("#level_educative_id").val();
        let text_levelEducative = $("#level_educative_id option:selected").text();
        let id_Professions = $("#professions_id").val();
        let text_Professions = $("#professions_id option:selected").text();
        let yearStart = getValueStart;
        let yearEnd = getValueEnd;
        if($("#professions_id").val()==0)
        {
            swal("¡Error!","No puede agregar esta opción.","error");
        }
        else if($("#level_educative_id").val()==0){
            swal("¡Error!","No puede agregar esta opción.","error");
        }
        else if($("#yearStart").val() === ''){
            swal("¡LOL!", "La cagó.", "error");
        }
        else{
            $("#table_lvlEducative_Professions").append(
                "<tr id='tr"+id_levelEducative+"'><input type='hidden' name='level_educative_id[]' value='"+id_levelEducative+"'><td>"+text_levelEducative+"</td><input type='hidden' name='professions_id[]' value='"+id_Professions+"'><td>"+text_Professions+"</td><input type='hidden' name='yearStart_val[]' value='"+yearStart+"'><td>"+yearStart+"</td><input type='hidden' name='yearEnd_val[]' value='"+yearEnd+"'><td>"+yearEnd+"</td><td><button title='Eliminar de la lista' type='button' onclick='$("+'"'+"#tr"+id_levelEducative+'"'+").remove()' class='btn btn-icons btn-rounded btn-danger'><i class='fas fa-trash'></i></button></td></tr>"
            );
        }
    }
</script>



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>