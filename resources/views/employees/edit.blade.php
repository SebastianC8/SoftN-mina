@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <form action="{{route('employees.store')}}" method="POST">
                @csrf
                <h3>Editar empleado</h3><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tipo de Documento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="documentType_id_edit" id="documentType_id_edit">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">N° de documento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="document_edit" name="document_edit" placeholder="Ingrese el número de identificación"
                                    value="{{old('document_edit')}}" />
                                {!!$errors->first('document_edit','<span class=error>:message</span>')!!}
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
                                    value="{{old('nameEmployee_edit')}}" />
                                {!!$errors->first('nameEmployee_edit','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellidos</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lastName_edit" name="lastName_edit" placeholder="Ingrese el apellido de la persona"
                                    value="{{old('lastName_edit')}}" />
                                {!!$errors->first('lastName_edit','<span class=error>:message</span>')!!}
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
                                    value="{{old('birthDate_edit')}}" />
                                {!!$errors->first('birthDate_edit','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dirección</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="address_edit" name="address_edit" placeholder="Dirección del lugar de residencia"
                                    value="{{old('address_edit')}}" />
                                {!!$errors->first('address_edit','<span class=error>:message</span>')!!}
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
                                    name="email_edit" value="{{old('email_edit')}}" />
                                {!!$errors->first('email_edit','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Teléfono</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="Phone_edit" name="Phone_edit" placeholder="Ingrese el número de teléfono"
                                    value="{{old('Phone_edit')}}" />
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
                                    name="numberSons_edit" value="{{old('numberSons_edit')}}" />
                                {!!$errors->first('numberSons_edit','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de entrada</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="entryDate_edit" name="entryDate_edit" placeholder="Ingrese el número de teléfono"
                                    value="{{old('entryDate_edit')}}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nivel educativo <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="levelEducative_edit" placeholder="Nivel educativo del empleado"
                                    name="levelEducative_edit" value="{{old('levelEducative_edit')}}" />
                                {!!$errors->first('levelEducative_edit','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cesantías</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="layoffs_id_edit" id="layoffs_id_edit">

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
                                        <select class="form-control" name="pensions_id_edit" id="pensions_id_edit">

                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">EPS</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="EPS_id_edit" id="EPS_id_edit">

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
                                <select class="form-control" name="holidays_id_edit" id="holidays_id_edit">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fondo de Compensación</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="compenstionFound_id_edit" id="compenstionFound_id_edit">

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
                                <select class="form-control" name="areas_id_edit" id="areas_id_edit">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Estado Civil</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="maritalStatus_id_edit" id="maritalStatus_id_edit">

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
                                <select class="form-control" name="ARL_id_edit" id="ARL_id_edit">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Bonus</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="bonus_idBonus_edit" id="bonus_idBonus_edit">

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
@stop
