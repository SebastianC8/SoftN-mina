<?php $__env->startSection('contenido'); ?>

<div class="row">
    <form action="<?php echo e(route('payroll.store')); ?>" method="POST" class="form-group col-md-12" >
        <?php echo csrf_field(); ?>
        <div class="col-md-12 grid-margin">
            <div class="card" style="margin-left: 4px;width: 98%;">
                <div class="card-body table-responsive">
                    <h4 class="card-title" style="text-align:center">Gestión de Nómina <i class="fas fa-hand-holding-usd"></i></h4>
                    <div class="form-group row col-md-6">
                        <label for="" class="col-sm-3 col-form-label">Documento</label>&nbsp;
                        <div class="col-sm-9">
                            <input type="text" class="form-control col-md-6" id="document_employee" name="document_employee">
                            <button class="btn btn-icons btn-rounded btn-outline-info" type="button" style="
                            margin-left: 263px;margin-top: -40px;height: 38px;"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 row" style="display:flex">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h4 class="card-title">Adiciones <i class="fas fa-plus-circle"></i></h4>
                        <p class="card-description">Añadir adiciones a la nómina.</p>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Tipo de adición</label>
                            <div class="col-sm-9">
                                <select class="form-control col-md-8" name="commission_id" id="commission_id" onchange="get_value_addition(this.value)">
                                    <option value="0">Seleccione una opción</option>
                                    <?php $__currentLoopData = $additions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value->idCommissions); ?>"><?php echo e($value->nameCommission); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Valor</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control col-md-8" id="value_commission" name="value_commission" readonly>
                                <button type="button" style="margin-left: 367px;margin-top: -37px;" class="btn btn-success" onclick="add_additions()">Añadir
                                    <i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <table id="table_additions" class="table table-bordered" style="display:none">
                            <thead>
                                <tr>
                                    <th>Adición</th>
                                    <th>Valor</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_additions">
                            </tbody>
                            <p><b>Total: </b><span id="total_additions"></span></p>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h4 class="card-title">Deducciones <i class="fas fa-exclamation-triangle"></i></h4>
                        <p class="card-description">Añadir deducciones a la nómina.</p>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Tipo de deducción</label>
                            <div class="col-sm-9">
                                <select class="form-control col-md-8" id="deductions_id" name="deductions_id" onchange="get_value_deduction(this.value)">
                                    <option value="0">Seleccione una opción</option>
                                    <?php $__currentLoopData = $deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value->idDeductions); ?>"><?php echo e($value->nameDeduction); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Valor</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control col-md-8" id="value_deduction" name="value_deduction" readonly>
                                <button type="button" style="margin-left: 367px;margin-top: -37px;" class="btn btn-success" onclick="add_deductions()">Añadir
                                    <i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <table id="table_deductions" class="table table-bordered" style="display:none">
                            <thead>
                                <tr>
                                    <th>Adición</th>
                                    <th>Valor</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_deductions">
                            </tbody>
                            <p><b>Total: </b><span id="total_deductions"></span></p>
                        </table>
                    </div>
                </div>
            </div>
    <div class="col-md-12">
        <div class="col-md-6 myCard">
            <div class="card" style="margin-left: -15px;">
                <div class="card-body table-responsive">
                    <h4 class="card-title">Horas extras <i class="fas fa-clock"></i></h4>
                    <p class="card-description">Añadir horas extras a un empleado.</p>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Hora extra</label>
                        <div class="col-sm-9">
                            <select class="form-control col-md-8" id="overtime_id" name="overtime_id" onchange="get_value_overtime(this.value)">
                                <option value="0">Seleccione una opción</option>
                                <?php $__currentLoopData = $overtimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idOvertime); ?>"><?php echo e($value->descriptionOvertime); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control col-md-8" id="valueHour" name="valueHour" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Cantidad</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control col-md-8" id="quantityHours" name="quantityHours">
                            <button type="button" style="margin-left: 367px;margin-top: -36px;" class="btn btn-success" onclick="add_overtimes()">Añadir
                                <i class="fas fa-plus-circle"></i></button>
                        </div>
                    </div>
                    <table id="table_overtimes" class="table table-bordered" style="display:none">
                        <thead>
                            <tr>
                                <th>Adición</th>
                                <th>Valor</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_overtimes">
                        </tbody>
                        <p><b>Total: </b><span id="total_overtimes"></span></p>
                    </table><br><br>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<script>
    function get_value_addition(id){
        $.get("<?php echo e(url('payroll')); ?>" + '/' + id + '/get_value_addition', (response)=>{
            $("#value_commission").val(response.value_commission);
        });
    }

    function get_value_deduction(id){
        $.get("<?php echo e(url('payroll')); ?>" + '/' + id + '/get_value_deduction', (response)=>{
            $("#value_deduction").val(response.value_deduction);
        });
    }

    function get_value_overtime(id){
        $.get("<?php echo e(url('payroll')); ?>" + '/' + id + '/get_value_overtime', (response)=>{
            $("#valueHour").val(response.value);
        });
    }

    function add_additions(){
        let id_addition = $("#commission_id").val();
        let text_addition = $("#commission_id option:selected").text();
        let value_addition = $("#value_commission").val();
        if(id_addition == 0){
            swal("¡Error!","No puede agregar esta opción.","error");
        }else{
        $("#table_additions").css("display", "inline-table");
        $("#tbody_additions").append(
            "<tr id='tr_addition" + id_addition + "'><td>"+text_addition+"</td><td>"+value_addition+"</td><td><button type='button' class='btn btn-icons btn-rounded btn-danger' title='Eliminar de la lista'  onclick='delete_additions("+id_addition+")'><i class='fas fa-trash'></i></button></td></tr>"
        )};
    }

    function delete_additions(id){
        $("#tr_addition" + id).remove();
    }

    function add_deductions(){
        let id_deduction = $("#deductions_id").val();
        let text_deduction = $("#deductions_id option:selected").text();
        let value_deduction = $("#value_deduction").val();
        if(id_deduction == 0){
            swal("¡Error!","No puede agregar esta opción.","error");
        }else{
        $("#table_deductions").css("display", "inline-table");
        $("#tbody_deductions").append(
            "<tr id='tr_deduction" + id_deduction + "'><td>"+text_deduction+"</td><td>"+value_deduction+"</td><td><button type='button' class='btn btn-icons btn-rounded btn-danger' title='Eliminar de la lista' onclick='delete_deductions("+id_deduction+")'><i class='fas fa-trash'></i></button></td></tr>"
        )};
    }

    function delete_deductions(id){
        $("#tr_deduction" + id).remove();
    }

    function add_overtimes(){
        let id_overtime = $("#overtime_id").val();
        let text_overtime = $("#overtime_id option:selected").text();
        let value_overtime = $("#valueHour").val();
        let quantityHours = $("#quantityHours").val();
        if(id_overtime == 0){
            swal("¡Error!","No puede agregar esta opción.","error");
        }else{
        $("#table_overtimes").css("display", "inline-table");
        $("#tbody_overtimes").append(
            "<tr id='tr_overtime"+id_overtime+"'><td>"+text_overtime+"</td><td>"+value_overtime+"</td><td>"+quantityHours+"</td><td>"+1+"</td><td><button type='button' class='btn btn-icons btn-rounded btn-danger' title='Eliminar de la lista' onclick='delete_overtimes("+id_overtime+")'><i class='fas fa-trash'></i></button></td></tr>"
        )};
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>