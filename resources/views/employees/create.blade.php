@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <form action="{{route('employees.store')}}" method="POST">
                @csrf
                <h3>Registrar empleado</h3><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tipo de Documento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="documentType_id" id="documentType_id">
                                    @foreach ($documentTypes as $value)
                                    <option value="{{$value->idDocumentType}}">{{$value->descriptionDocument}}</option>
                                    {!!$errors->first('documentType_id','<span class=error>:message</span>')!!}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">N° de documento <span style="color:red">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="document" name="document" placeholder="Ingrese el número de identificación"
                                    value="{{old('document')}}" />
                                {!!$errors->first('document','<span class=error>:message</span>')!!}
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
                                    value="{{old('nameEmployee')}}" />
                                {!!$errors->first('nameEmployee','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellidos</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Ingrese el apellido de la persona"
                                    value="{{old('lastName')}}" />
                                {!!$errors->first('lastName','<span class=error>:message</span>')!!}
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
                                    value="{{old('birthDate')}}" />
                                {!!$errors->first('birthDate','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dirección</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Dirección del lugar de residencia"
                                    value="{{old('address')}}" />
                                {!!$errors->first('address','<span class=error>:message</span>')!!}
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
                                    name="email" value="{{old('email')}}" />
                                {!!$errors->first('email','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Teléfono</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="Phone" name="Phone" placeholder="Ingrese el número de teléfono"
                                    value="{{old('Phone')}}" />
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
                                    name="numberSons" value="{{old('numberSons')}}" />
                                {!!$errors->first('numberSons','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de entrada</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="entryDate" name="entryDate" placeholder="Ingrese el número de teléfono"
                                    value="{{old('entryDate')}}" />
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
                                    name="levelEducative" value="{{old('levelEducative')}}" />
                                {!!$errors->first('levelEducative','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cesantías</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="layoffs_id" id="layoffs_id">
                                    @foreach ($layoffs as $value)
                                    <option value="{{$value->idLayoffs}}">{{$value->descriptionLayoffs}}</option>
                                    {!!$errors->first('layoffs_id','<span class=error>:message</span>')!!}
                                    @endforeach
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
                                            @foreach ($pension as $value)
                                            <option value="{{$value->idPensions}}">{{$value->namePensions}}</option>
                                            {!!$errors->first('pensions_id','<span class=error>:message</span>')!!}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">EPS</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="EPS_id" id="EPS_id">
                                        @foreach ($eps as $value)
                                        <option value="{{$value->idEPS}}">{{$value->nameEPS}}</option>
                                        {!!$errors->first('EPS_id','<span class=error>:message</span>')!!}
                                        @endforeach
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
                                    @foreach ($holidays as $value)
                                    <option value="{{$value->idHolidays}}">{{$value->descriptionHolidays}}</option>
                                    {!!$errors->first('holidays_id','<span class=error>:message</span>')!!}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fondo de Compensación</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="compenstionFound_id" id="compenstionFound_id">
                                    @foreach ($cf as $value)
                                    <option value="{{$value->idCompensationFound}}">{{$value->description}}</option>
                                    {!!$errors->first('compenstionFound_id','<span class=error>:message</span>')!!}
                                    @endforeach
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
                                    @foreach ($area as $value)
                                    <option value="{{$value->idAreas}}">{{$value->nameArea}}</option>
                                    {!!$errors->first('areas_id','<span class=error>:message</span>')!!}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Estado Civil</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="maritalStatus_id" id="maritalStatus_id">
                                    @foreach ($marital_st as $value)
                                    <option value="{{$value->idMaritalStatus}}">{{$value->nameMaritalStatus}}</option>
                                    {!!$errors->first('maritalStatus_id','<span class=error>:message</span>')!!}
                                    @endforeach
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
                                    @foreach ($arl as $value)
                                    <option value="{{$value->idARL}}">{{$value->nameARL}}</option>
                                    {!!$errors->first('ARL_id','<span class=error>:message</span>')!!}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Bonus</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="bonus_idBonus" id="bonus_idBonus">
                                    @foreach ($bonus as $value)
                                    <option value="{{$value->idBonus}}">{{$value->descriptionBonus}}</option>
                                    {!!$errors->first('bonus_idBonus','<span class=error>:message</span>')!!}
                                    @endforeach
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
