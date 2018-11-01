@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addTypeContracts()" title="Añadir un tipo de contrato"> Añadir tipo de contrato <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Tipos de contrato </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($typeContracts as $item)
                    <tr>
                        <td>{{$item->descriptionType}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editTypeContracts({{$item->idtypeContract}})" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/typeContract/estado/{{$item->idtypeContract}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/typeContract/estado/{{$item->idtypeContract}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @endif
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

@include('typeContract.mdl_typeContract')
@include('typeContract.mdl_typeContract_edit')

</div>
@stop

<script>
    function addTypeContracts(){
        $("#modal_typeContract").modal();
    }
</script>

<script>
    function editTypeContracts(id){
        $.get("{{url('typeContract')}}" + '/' + id + '/show', (data)=>{
            $("#idtypeContract").val(data.idtypeContract);
            $("#descriptionType_edit").val(data.descriptionType);
        })
        $("#modal_typeContract_edit").modal();
    }
</script>
