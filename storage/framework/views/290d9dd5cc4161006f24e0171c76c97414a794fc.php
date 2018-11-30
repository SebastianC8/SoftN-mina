<?php $__env->startSection('contenido'); ?>

<div class="row  col-md-12">
    <form method="POST" action="<?php echo e(route('payroll.store')); ?>" class="form-group col-md-12">
        <?php echo csrf_field(); ?>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Gestión de Nómina <i class="fas fa-hand-holding-usd"></i></h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label">Número de documento</label>
                                <input type="text" class="form-control" name="txt_number_document" id="txt_number_document"
                                    style="width: 50%" onchange="get_val(this.value)" />
                                <button class="btn btn-icons btn-rounded btn-outline-info" style="margin-left: 369px;margin-top: -37px;height: 36px;"
                                    type="button" onclick="get_information_employee()"><i class="fas fa-search"></i></button>
                            </div>
                            <button id="btn_search_vinculations" type="button" class="btn btn-success btn-sm"
                                onclick="get_vinculations_employee()" style="display:none">Consultar vinculaciones</button>

                        </div>
                        <table id="table_response_query" class="table table-striped table-responsive" style="width: 50%; display:none">
                            <thead>
                                <tr>
                                    <th>Empleado</th>
                                    <th>Salario</th>
                                    <th>Días trabajados</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_table_query">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
            
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card" style="display:none" id="card_additions">
                            <div class="card-body">
                                <h4 class="card-title">Adiciones <i class="fas fa-plus-circle"></i></h4>
                                <p class="card-description">Añadir adiciones a la nómina.</p>
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Tipo de adición</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="commission_id" id="commission_id"
                                                    onchange="get_value_addition(this.value)">
                                                    <option value="0">Seleccione una opción</option>
                                                    <?php $__currentLoopData = $commission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($value->idCommissions); ?>"><?php echo e($value->nameCommission); ?></option>
                                                    <?php echo $errors->first('commission_id','<span class=error>:message</span>'); ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Valor</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="value" placeholder="Ingrese el valor de la adición"
                                                    value="<?php echo e(old('value')); ?>" readonly />
                                                <?php echo $errors->first('value','<span class=error>:message</span>'); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success" style="border-radius:20px; height:35px"
                                        onclick="add_additions()">Añadir
                                        <i class="fa fa-plus-circle"></i></button>
                                </div>
                                <table id="table_additions" class="table-striped table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tipo de adición</th>
                                            <th>Valor </th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <p><b>Total: </b><span id="value_total_addition" style="color:red"></span></p>
                                </table><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card" style="display:none" id="card_deductions">
                            <div class="card-body">
                                <h4 class="card-title">Deducciones <i class="fas fa-exclamation-circle"></i></h4>
                                <p class="card-description">Añadir deducciones a la nómina.</p>
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Tipo de deducción</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="deductions_id" id="deductions_id"
                                                    onchange="get_value_deduction(this.value)">
                                                    <option value="0">Seleccione una opción</option>
                                                    <?php $__currentLoopData = $deduction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($value->idDeductions); ?>"><?php echo e($value->nameDeduction); ?></option>
                                                    <?php echo $errors->first('deductions_id','<span class=error>:message</span>'); ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Valor</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="value_deduction"
                                                    placeholder="Ingrese el valor de la deducción" value="<?php echo e(old('value_deduction')); ?>"
                                                    readonly />
                                                <?php echo $errors->first('value_deduction','<span class=error>:message</span>'); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success" style="border-radius:20px; height:35px"
                                        onclick="add_deductions()">Añadir
                                        <i class="fa fa-plus-circle"></i></button>
                                </div>
                                <table id="table_deductions" class="table-striped table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tipo de deducción</th>
                                            <th>Valor </th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <p><b>Total: </b><span id="value_total_deduction" style="color:red"></span></p>
                                </table><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card" style="display:none" id="card_overtimes">
                            <div class="card-body">
                                <h4 class="card-title">Horas extra <i class="fas fa-clock"></i></h4>
                                <p class="card-description">Añadir horas extras a la nómina.</p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Hora extra</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="overtime_id" id="overtime_id"
                                                    onchange="get_value_overtime(this.value)">
                                                    <option value="0">Seleccione una opción</option>
                                                    <?php $__currentLoopData = $overtime; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($value->idOvertime); ?>"><?php echo e($value->descriptionOvertime); ?></option>
                                                    <?php echo $errors->first('overtime_id','<span class=error>:message</span>'); ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Valor</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="valueHour" placeholder="Valor de la hora extra"
                                                    value="<?php echo e(old('valueHour')); ?>" readonly />
                                                <?php echo $errors->first('valueHour','<span class=error>:message</span>'); ?>

                                            </div><br><br>
                                            <label class="col-sm-3 col-form-label">Cantidad</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="quantityHours"
                                                    placeholder="Ingrese la cantidad de horas" value="<?php echo e(old('quantityHours')); ?>" />
                                                <?php echo $errors->first('quantityHours','<span class=error>:message</span>'); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" style="border-radius:20px;height:35px;margin-top: 49px;"
                                        class="btn btn-success" style="border-radius:20px; height:35px" onclick="add_overtimes()">Añadir
                                        <i class="fa fa-plus-circle"></i></button>
                                </div>
                                <table id="table_overtimes" class="table-striped table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Hora extra</th>
                                            <th>Valor </th>
                                            <th>Cantidad</th>
                                            <th>Subtotal</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <input type="hidden" class="form-control" style="width:50%" id="value_total_overtime"
                                        name="value_total_overtime" readonly value>
                                    <p><b>Total: </b><span id="ttl_gnrl" style="color:red"></span></p>
                                    <br>
                                </table><br>
                                <button type="submit" class="btn btn-success pull-right">Enviar</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
</div>
<?php echo $__env->make('payroll.mdl_vinculations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<script>
    let value = 0;
    let prueba = 0;
    let salary = 0;
    let total = 0;

    function get_val(val) {
        value = val;
    }

    function get_information_employee() {
        let quantity_hours = 0;
        $.get("<?php echo e(url('payroll')); ?>" + '/' + value + '/get_employee', (data) => {
            if (data == 0) {
                swal("¡UPSS!", "No existe un empleado con este número de documento.", "info");
                $("#tbody_table_query").empty();
            }
            $.each(data, function (i, e) {
                prueba = e.payment_period;
                salary = e.ratesValue;
                $("#table_response_query").css("display", "inline-table");
                $("#card_additions").css("display", "flex");
                $("#card_deductions").css("display", "flex");
                $("#card_overtimes").css("display", "flex");
                $("#tbody_table_query").empty();
                $("#tbody_table_query").append(
                    "<tr><input type='hidden' name='employee_id' value='" + e.idemployees +
                    "'><td>" + e.nameEmployee + " " + e.lastName +
                    "</td><input type='hidden' name='salary_employee' value='" + e.ratesValue +
                    "'><td>" + e.ratesValue +
                    "</td><input type='hidden' name='days_worked' value='" + e.payment_period +
                    "'><td>" + e.payment_period +
                    "</td><td><button id='button_edit_values' class='btn btn-outline-success' type='button'>Editar</td></tr>"
                );
                $("#btn_search_vinculations").css("display", "flex");
                $("#button_edit_values").on("click", function () {
                    swal("Button", "This is a small button.", "info");
                });
            });
        });
    }

    function get_vinculations_employee() {
        let eps_employee = 0;
        $.get("<?php echo e(url('payroll')); ?>" + '/' + value + '/get_vinculations_employee', (response) => {
            if (response == 0) {
                swal('¡Upsss!',
                    'Antes de consultar las vinculaciones, debe ingresar el número de documento del empleado.',
                    'error');
            } else {
                $("#modal_employees_vinculations").modal();
                $.each(response, function (i, e) {
                    eps_employee = (salary * e.percentage) / 100;
                    $("#name_eps").val(e.nameEPS);
                    $("#value_eps").val(e.percentage + "%");
                    $("#total_eps").val(eps_employee);
                });
            }
        });
    }

    function get_value_addition(e) {
        $.get("<?php echo e(url('payroll')); ?>" + '/' + e + '/get_value_addition', (data) => {
            $("#value").val(data.value_commission);
        })
    }

    function get_value_deduction(e) {
        $.get("<?php echo e(url('payroll')); ?>" + '/' + e + '/get_value_deduction', (data) => {
            $("#value_deduction").val(data.value_deduction);
        })
    }

    function get_value_overtime(e) {
        $.get("<?php echo e(url('payroll')); ?>" + '/' + e + '/get_value_overtime', (data) => {
            $("#valueHour").val(data.value);
        })
    }

    function add_additions() {
        let id_addition = $("#commission_id").val();
        let text_addition = $("#commission_id option:selected").text();
        let value_addition = $("#value").val();
        let sum = 0;

        if ($("#commission_id").val() == 0) {
            swal("¡Error!", "No puede agregar esta opción.", "error");
        } else {
            $("#table_additions").append(
                "<tr id='tr_addition" + id_addition + "'><input type='hidden' name='commission_id[]' value='" +
                id_addition +
                "'><td>" + text_addition + "</td><input type='hidden' name='value_commission[]' value='" +
                value_addition + "'><td class='subTtotal_addition'>" + value_addition +
                "</td><td><button title='Eliminar de la lista' type='button' onclick='delete_addition(" +
                id_addition +
                ")' class='btn btn-icons btn-rounded btn-danger'><i class='fas fa-trash'></i></button></td></tr>"
            )
        };

        $(".subTtotal_addition").each(function () {
            sum += parseFloat($(this).text().replace(/,/g, ''), 10);
            $("#value_total_addition").text(sum);
        });
    }

    function delete_addition(id) {
        let resta_addition = 0;
        let positive_adition = 0;
        var number_rows = $("#table_additions tr").length - 2;

        $("#tr_addition" + id).remove();
        $(".subTtotal_addition").each(function () {
            resta_addition -= parseFloat($(this).text().replace(/,/g, ''), 10);
            positive_adition = (resta_addition) * (-1);
            $("#value_total_addition").text(positive_adition);
        });

        if (number_rows == 0) {
            $("#value_total_addition").text(0);
        }
    }

    function add_deductions() {
        let id_deduction = $("#deductions_id").val();
        let text_deduction = $("#deductions_id option:selected").text();
        let value_deduction = $("#value_deduction").val();
        let sum = 0;

        if ($("#deductions_id").val() == 0) {
            swal("¡Error!", "No puede agregar esta opción.", "error");
        } else {
            $("#table_deductions").append(
                "<tr id='tr_deduction" + id_deduction + "'><input type='hidden' name='deductions_id[]' value='" +
                id_deduction +
                "'><td>" + text_deduction + "</td><input type='hidden' name='value_deduction[]' value='" +
                value_deduction + "'><td class='subTotal_deduction'>" + value_deduction +
                "</td><td><button title='Eliminar de la lista' type='button' onclick='delete_deduction(" +
                id_deduction +
                ")' class='btn btn-icons btn-rounded btn-danger'><i class='fas fa-trash'></i></button></td></tr>"
            )
        };

        $(".subTotal_deduction").each(function () {
            sum += parseFloat($(this).text().replace(/,/g, ''), 10);
            $("#value_total_deduction").text(sum);
        });
    }

    function delete_deduction(id) {
        let resta_deduction = 0;
        let positive_deduction = 0;
        var number_rows = $("#table_deductions tr").length - 2;

        $("#tr_deduction" + id).remove();
        $(".subTotal_deduction").each(function () {
            resta_deduction -= parseFloat($(this).text().replace(/,/g, ''), 10);
            positive_deduction = (resta_deduction) * (-1);
            $("#value_total_deduction").text(positive_deduction);
        });

        if (number_rows == 0) {
            $("#value_total_deduction").text(0);
        }
    }

    function add_overtimes() {
        let id_overtime = $("#overtime_id").val();
        let text_overtime = $("#overtime_id option:selected").text();
        let value_overtime = $("#valueHour").val();
        let quantity_hours = $("#quantityHours").val();
        // let value_sub = parseFloat(value_overtime) * parseInt(quantity_hours);
        let value_sub = ((salary / 240) * quantity_hours) * value_overtime;
        let sum = 0;
        let acum = 0;
        var number_rows = $("#table_overtimes tr").length;
        let counter = 0;

        for (let i = 0; i <= number_rows-1 ; i++) {
            counter++;
        }

        if ($("#overtime_id").val() == 0) {
            swal("¡Error!", "No puede agregar esta opción.", "error");
        } else if ($("#quantityHours").val() === "") {
            swal("¡Error!", "La cantidad no puede estar vacía.", "error");
        } else {
            $("#table_overtimes").append(
                "<tr id='tr_overtime" + id_overtime + counter + "'><input type='hidden' name='overtime_id[]' value='" +
                id_overtime +
                "'><td>" + text_overtime + "</td><input type='hidden' name='valueHour[]' value='" + value_overtime +
                "'><td>" + value_overtime + "</td><input type='hidden' name='quantityHours[]' value='" +
                quantity_hours +
                "'><td>" + quantity_hours + "</td><td class='subTotal_overtime'>" + value_sub +
                "</td><td><button title='Eliminar de la lista' type='button' onclick='delete_overtime(" +
                id_overtime + counter +")' class='btn btn-icons btn-rounded btn-danger'><i class='fas fa-trash'></i></button></td></tr>"
            )
        };

        $(".subTotal_overtime").each(function () {
            sum += parseFloat($(this).text().replace(/,/g, ''), 10);
            $("#value_total_overtime").val(sum);
            $("#ttl_gnrl").text(sum);
            total = sum;
        });
    }

    function delete_overtime(id) {
        let value_overtime = $("#valueHour").val();
        let quantity_hours = $("#quantityHours").val();
        var number_rows = $("#table_overtimes tr").length - 2;
        let sum = ((salary / 240) * quantity_hours) * value_overtime;
        let resta = 0;
        let positive = 0;
        // total -= sum;
        // $("#ttl_gnrl").text(total);
        $("#tr_overtime" + id).remove();
        $(".subTotal_overtime").each(function () {
            resta -= parseFloat($(this).text().replace(/,/g, ''), 10);
            positive = (resta) * (-1);
            $("#value_total_overtime").val(positive);
            $("#ttl_gnrl").text(positive);
        });

        if (number_rows == 0) {
            $("#value_total_overtime").text(0);
            $("#ttl_gnrl").text(0);
        }
    }

</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>