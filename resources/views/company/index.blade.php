@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de Empresas </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Documento de Identificación</th>
                        <th>Código</th>
                        <th>Imagen</th>
                        <th>N° de Empleados</th>
                        <th>Tamaño de la compañía</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $item)
                    <tr>
                        <td>{{$item->companyName}}</td>
                        <td>{{$item->descriptionDocument}}</td>
                        <td>{{$item->codeCompany}}</td>
                        <td><img src="{{Storage::url($item->imgCompany)}}"></td>
                        <td>{{$item->numberEmployees}}</td>
                        <td>@if($item->sizeCompany == 0)
                            Microempresa
                            @endif
                            @if($item->sizeCompany == 1)
                            Pequeña empresa
                            @endif
                            @if($item->sizeCompany == 2)
                            Mediana empresa
                            @endif
                            @if($item->sizeCompany == 3)
                            Macroempresa
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="editCompany({{$item->idCompany}})"><i
                            class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endif

@include('company.ModalCompany')

</div>
@stop

<script>
    function editCompany(id){
        $.get("{{url('company')}}" + '/' + id + '/show', (data)=>{
            console.log(data);
            $("#mdl_documentType").val(data.documentType_id);
            $("#mdl_codCompany").val(data.codeCompany);
            $("#mdl_nameCommission").val(data.companyName);
            // $("#mdl_imgCompany").val(data.imgCompany);
            $("#mdl_numberEmployees").val(data.numberEmployees);
            if(data.sizeCompany==0){}
            $("#mdl_sizeCompany").val(data.sizeCompany);
        })
        $('#modal_company').modal();
    }
</script>
