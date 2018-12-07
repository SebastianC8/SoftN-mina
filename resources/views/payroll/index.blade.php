@extends('layout')

@section('contenido')

<div class="row">
    <form action="{{route('payroll.store')}}" method="POST" class="form-group col-md-12">
        @csrf
        <div class="col-md-12 grid-margin">
            <div class="card" style="margin-left: 4px;width: 98%;">
                <div class="card-body table-responsive">
                    <h4 class="card-title " style="text-align:center">Gestión de Nómina <i class="fas fa-hand-holding-usd"></i></h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Documento</label>&nbsp;
                                <div class="col-sm-9">
                                    <input type="text" class="form-control col-md-6" id="document_employee" name="document_employee"
                                        onchange="get_value_salary(this.value)">
                                    <button class="btn btn-icons btn-rounded btn-outline-info" type="button" style="
                            margin-left: 280px;margin-top: -40px;height: 38px;"
                                        onclick="get_salary()"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <table id="table_information" class="table table-striped table-bordered col-md-6" style="display:none">
                                <thead>
                                    <tr>
                                        <th>Empleado</th>
                                        <th>Salario</th>
                                        <th>Días trabajados</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_table_information">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 row" style="display:flex">
            <div class="col-md-6 grid-margin stretch-card">
                <div id="card_additions" class="card">
                    <div class="card-body table-responsive">
                        <h4 class="card-title">Adiciones <i class="fas fa-plus-circle"></i></h4>
                        <p class="card-description">Añadir adiciones a la nómina.</p>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Tipo de adición</label>
                            <div class="col-sm-9">
                                <select class="form-control col-md-8" name="commission_id" id="commission_id" onchange="get_value_addition(this.value)"
                                    disabled>
                                    <option value="0">Seleccione una opción</option>
                                    @foreach ($additions as $value)
                                    <option value="{{$value->idCommissions}}">{{$value->nameCommission}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Valor</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control col-md-8" id="value_commission" name="value_commission"
                                    readonly>
                                <button type="button" style="margin-left: 367px;margin-top: -37px;" class="btn btn-success"
                                    onclick="add_additions()">Añadir
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
                            <p><b>Total: </b><span id="total_additions" style="color:red"></span></p>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div id="card_deductions" class="card">
                    <div class="card-body table-responsive">
                        <h4 class="card-title">Deducciones <i class="fas fa-exclamation-triangle"></i></h4>
                        <p class="card-description">Añadir deducciones a la nómina.</p>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Tipo de deducción</label>
                            <div class="col-sm-9">
                                <select class="form-control col-md-8" id="deductions_id" name="deductions_id" onchange="get_value_deduction(this.value)"
                                    disabled>
                                    <option value="0">Seleccione una opción</option>
                                    @foreach ($deductions as $value)
                                    <option value="{{$value->idDeductions}}">{{$value->nameDeduction}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Valor</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control col-md-8" id="value_deduction" name="value_deduction"
                                    readonly>
                                <button type="button" style="margin-left: 367px;margin-top: -37px;" class="btn btn-success"
                                    onclick="add_deductions()">Añadir
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
                            <p><b>Total: </b><span id="total_deductions" style="color:red"></span></p>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6 myCard">
                    <div id="card_overtimes" class="card" style="margin-left: -15px;">
                        <div class="card-body table-responsive">
                            <h4 class="card-title">Horas extras <i class="fas fa-clock"></i></h4>
                            <p class="card-description">Añadir horas extras a un empleado.</p>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Hora extra</label>
                                <div class="col-sm-9">
                                    <select class="form-control col-md-8" id="overtime_id" name="overtime_id" onchange="get_value_overtime(this.value)"
                                        disabled>
                                        <option value="0">Seleccione una opción</option>
                                        @foreach ($overtimes as $value)
                                        <option value="{{$value->idOvertime}}">{{$value->descriptionOvertime}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Valor</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control col-md-8" id="valueHour" name="valueHour"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Cantidad</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control col-md-8" id="quantityHours" name="quantityHours"
                                        disabled>
                                    <button type="button" style="margin-left: 367px;margin-top: -36px;" class="btn btn-success"
                                        onclick="add_overtimes()">Añadir
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
                                <p><b>Total: </b><span id="total_overtimes" style="color:red"></span></p>
                                <input type="hidden" id="input_total_overtimes" name="input_total_overtimes">
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
@stop

<script>
    let document_employee = 0;
    let salary = 0;

    function get_value_salary(value) {
        document_employee = value;
    }

    function get_salary() {
        $.get("{{url('payroll')}}" + '/' + document_employee + '/get_salary', (response) => {
            salary = response.ratesValue;
            if (JSON.stringify(response) == '{}') {
                swal('Error', 'No existe un empleado con este número de documento.', 'info');
            } else {
                $("#table_information").css("display", "inline-table");
                $("#tbody_table_information").empty();
                $("#tbody_table_information").append(
                    "<tr><input type='hidden' name='employee_id[]' value='" + response.employees_id +
                    "'><td>" + response.nameEmployee + " " + response.lastName +
                    "</td><input type='hidden' name='salary_employee[]' value='" + response.ratesValue +
                    "'><td>" + number_format(response.ratesValue) +
                    "</td><input type='hidden' name='days_worked[]' value='" + response.payment_period +
                    "'><td>" + response.payment_period +
                    "</td><td><button id='btn_edit_information' type='button' class='btn btn-success' title='Editar información'>Editar</td></tr>"
                );
                $("#commission_id").prop("disabled", false);
                $("#deductions_id").prop("disabled", false);
                $("#overtime_id").prop("disabled", false);
                $("#quantityHours").prop("disabled", false);

                $("#btn_edit_information").on("click", function () {
                    swal('Abrir modal.', 'Se abrirá el modal.', 'success');
                });
            }
        });
    }

    function get_value_addition(id) {
        $.get("{{url('payroll')}}" + '/' + id + '/get_value_addition', (response) => {
            $("#value_commission").val(response.value_commission);
        });
    }

    function get_value_deduction(id) {
        $.get("{{url('payroll')}}" + '/' + id + '/get_value_deduction', (response) => {
            $("#value_deduction").val(response.value_deduction);
        });
    }

    function get_value_overtime(id) {
        $.get("{{url('payroll')}}" + '/' + id + '/get_value_overtime', (response) => {
            $("#valueHour").val(response.value);
        });
    }

    function add_additions() {
        let id_addition = $("#commission_id").val();
        let text_addition = $("#commission_id option:selected").text();
        let value_addition = $("#value_commission").val();
        let sum = 0;
        if (id_addition == 0) {
            swal("¡Error!", "No puede agregar esta opción.", "error");
        } else {
            $("#table_additions").css("display", "inline-table");
            $("#tbody_additions").append(
                "<tr id='tr_addition" + id_addition + "'><input type='hidden' name='commission_id[]' value='" +
                id_addition + "'><td>" + text_addition +
                "</td><input type='hidden' name='value_addition[]' value='" + value_addition +
                "'><td class='subTotal_addition'>" + value_addition +
                "</td><td><button type='button' class='btn btn-icons btn-rounded btn-danger' title='Eliminar de la lista'  onclick='delete_additions(" +
                id_addition + ")'><i class='fas fa-trash'></i></button></td></tr>"
            )

            $(".subTotal_addition").each(function () {
                sum += parseFloat($(this).text());
                $("#total_additions").text(sum);
            });
        };
    }

    function delete_additions(id) {
        let number_rows = $("#table_additions tr").length - 2;
        let substract = 0;
        let positive = 0;
        $("#tr_addition" + id).remove();
        $(".subTotal_addition").each(function () {
            substract -= parseFloat($(this).text());
            positive = (substract * -1);
            $("#total_additions").text(positive);
        });
        if (number_rows == 0) {
            $("#total_additions").text(0);
        }
    }

    function add_deductions() {
        let id_deduction = $("#deductions_id").val();
        let text_deduction = $("#deductions_id option:selected").text();
        let value_deduction = $("#value_deduction").val();
        let sum = 0;
        if (id_deduction == 0) {
            swal("¡Error!", "No puede agregar esta opción.", "error");
        } else {
            $("#table_deductions").css("display", "inline-table");
            $("#tbody_deductions").append(
                "<tr id='tr_deduction" + id_deduction + "'><input type='hidden' name='deductions_id[]' value='" +
                id_deduction + "'><td>" + text_deduction +
                "</td><input type='hidden' name='value_deduction[]' value='" + value_deduction +
                "'><td class='subTotal_deduction'>" + value_deduction +
                "</td><td><button type='button' class='btn btn-icons btn-rounded btn-danger' title='Eliminar de la lista' onclick='delete_deductions(" +
                id_deduction + ")'><i class='fas fa-trash'></i></button></td></tr>"
            )

            $(".subTotal_deduction").each(function () {
                sum += parseFloat($(this).text());
                $("#total_deductions").text(sum);
            });
        };
    }

    function delete_deductions(id) {
        let number_rows = $("#table_deductions tr").length - 2;
        let substract = 0;
        let positive = 0;
        $("#tr_deduction" + id).remove();
        $(".subTotal_deduction").each(function () {
            substract -= parseFloat($(this).text());
            positive = (substract * -1);
            $("#total_deductions").text(positive);
        });
        if (number_rows == 0) {
            $("#total_deductions").text(0);
        }
    }

    function add_overtimes() {
        let id_overtime = $("#overtime_id").val();
        let text_overtime = $("#overtime_id option:selected").text();
        let value_overtime = $("#valueHour").val();
        let quantityHours = $("#quantityHours").val();
        let subTotal = ((salary / 240) * quantityHours) * value_overtime;
        // subTotal = number_format(subTotal);
        let sum = 0;
        let number_rows = $("#table_overtimes tr").length;
        let counter = 0;

        for (let i = 0; i <= number_rows - 1; i++) {
            counter++;
        }

        if (id_overtime == 0) {
            swal("¡Error!", "No puede agregar esta opción.", "error");
        } else if (quantityHours == '') {
            swal("¡Error!", "La cantidad no puede estar vacía.", "error");
        } else {
            $("#table_overtimes").css("display", "inline-table");
            $("#tbody_overtimes").append(
                "<tr id='tr_overtime" + id_overtime + counter +
                "'><input type='hidden' name='overtime_id[]' value='" + id_overtime + "'><td>" + text_overtime +
                "</td><input type='hidden' name='value_overtime[]' value='" + value_overtime + "'><td>" +
                value_overtime +
                "</td><input type='hidden' name='quantity_hours[]' value='" + quantityHours + "'><td>" +
                quantityHours + "</td><td class='subTotal_overtime'>" + subTotal.toFixed(2) +
                "</td><td><button type='button' class='btn btn-icons btn-rounded btn-danger' title='Eliminar de la lista' onclick='delete_overtimes(" +
                id_overtime + counter + ")'><i class='fas fa-trash'></i></button></td></tr>"
            )

            $(".subTotal_overtime").each(function () {
                // sum = number_format(sum);
                sum += parseFloat($(this).text());
                $("#total_overtimes").text(sum.toFixed(2));
                $("#input_total_overtimes").val(sum.toFixed(2));
            });
        };
    }

    function delete_overtimes(id) {
        let number_rows = $("#table_overtimes tr").length - 2;
        let substract = 0;
        let positive = 0;
        $("#tr_overtime" + id).remove();
        $(".subTotal_overtime").each(function () {
            substract -= parseFloat($(this).text());
            positive = (substract * -1);
            // positive = number_format(positive);
            $("#total_overtimes").text(positive);
            $("#input_total_overtimes").val(positive);
        });
        if (number_rows == 0) {
            $("#total_overtimes").text(0);
        }
    }

</script>
