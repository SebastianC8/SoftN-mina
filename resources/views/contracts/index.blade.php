@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">

        <div class="card-body">
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de contratos</h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Tipo de contrato</th>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                        <th>Empresa</th>
                        <th>Archivo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contract as $item)
                    <tr>
                        <td>{{$item->descriptionContract}}</td>
                        <td>{{$item->descriptionType}}</td>
                        <td>{{$item->dateStart}}</td>
                        <td>{{$item->dateEnd}}</td>
                        <td>{{$item->companyName}}</td>
                        <td>
                            @if($item->attachment_contract != "")
                            <a href="{{Storage::url($item->attachment_contract)}}" title="Descargar contrato" download="contract"><i class="fas fa-file-word fa-2x fa-lg"></i>
                            @else
                            <span style="color:red">Este contrato no posee un archivo adjunto.</span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-primary" title="Ver detalle" style="border-radius:20px" onclick="getContract({{$item->idcontracts}})"><i
                            class="fas fa-eye"></i></button>

                            {{-- @if($item->statusEmployee == 1)
                            <a href="/employees/estado/{{$item->idemployees}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                                class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/employees/estado/{{$item->idemployees}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
                                class="fas fa-exchange-alt"></i></a>

                            @endif --}}
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
@include('contracts.mdl_contract')
@include('contracts.mdl_contract_edit')
</div>
@stop
<script>
    function getContract(id){
        $.get("{{url('contracts')}}" + '/' + id + '/show', (data)=>{
            $("#body_table_employees").empty();
            $("#body_table_employees").append("<tr><td>"+data.workDay+"</td><td>"+data.hoursDaily+" horas</td><td>"+data.nameJob+"</td><td>$"+data.ratesValue+"</td></tr>");
        })
        $("#modal_contracts").modal();
    }
</script>

<script>
    function editContract(){
        $("#modal_contract_edit").modal();
    }
</script>
