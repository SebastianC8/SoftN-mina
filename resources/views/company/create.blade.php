@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>Registrar empresa</h3><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tipo de Documento</label>
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
                            <label class="col-sm-3 col-form-label">Código de empresa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="codeCompany" name="codeCompany" placeholder="Ingrese el código de la empresa" value="{{old('codeCompany')}}" />
                                {!!$errors->first('codeCompany','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Ingrese el nombre de la empresa" value="{{old('companyName')}}" />
                                {!!$errors->first('companyName','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Imagen</label>
                            <div class="col-sm-9">
                                <input type="file" style="font-size: 15px;" name="imgCompany" id="imgCompany" value="{{old('imgCompany')}}">
                                {!!$errors->first('imgCompany','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Número de empleados</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="numberEmployees" onchange="calculateValue(this.value)" placeholder="Ingrese el número de empleados de la empresa" name="numberEmployees" value="{{old('numberEmployees')}}" />
                                {!!$errors->first('numberEmployees','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tamaño de la empresa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" readOnly id="sizeCompany" placeholder="Tamaño de empresa" value="{{old('sizeCompany')}}" />
                                <input type="hidden" class="form-control" readOnly id="sizeCompanyDB" name="sizeCompany" value="{{old('sizeCompany')}}" />
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success pull-right" type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

</div>
@stop

<script>
    function calculateValue(value){
        var data=[];
        if(value < 10){
            data.push('Microempresa',0)
            $("#sizeCompany").val(data[0]);
            $("#sizeCompanyDB").val(data[1])
        }
        else if(value >= 10 && value < 50){
            data.push('Pequeña empresa',1)
            $("#sizeCompany").val(data[0]);
            $("#sizeCompanyDB").val(data[1])
        }
        else if(value >= 50 && value < 250){
            data.push('Mediana empresa',2)
            $("#sizeCompany").val(data[0]);
            $("#sizeCompanyDB").val(data[1])
        }
        else if(value >= 250){
            data.push('Macroempresa',3)
            $("#sizeCompany").val(data[0]);
            $("#sizeCompanyDB").val(data[1])
        }
    }
</script>
