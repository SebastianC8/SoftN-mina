@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addRatesJob()" title="Añadir un cargo"> Añadir un cargo <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Listado de cargos </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ratesJob as $item)
                    <tr>
                        <td>{{$item->nameJob}}</td>
                        <td>{{$item->ratesValue}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editRatesJob({{$item->idRatesJob}})" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/rateJobs/estado/{{$item->idRatesJob}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/rateJobs/estado/{{$item->idRatesJob}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

@include('rateJobs.ModalRatesJob')
@include('rateJobs.ModalRatesJobEdit')

</div>
@stop

<script>
    function addRatesJob(){
        $("#modal_ratesJob").modal();
    }
</script>

<script>
    function editRatesJob(id){
        $.get("{{url('rateJobs')}}" + '/' + id + '/show', (data)=>{
            $("#idRatesJob").val(data.idRatesJob);
            $("#nameJob_edit").val(data.nameJob);
            $("#ratesValue_edit").val(data.ratesValue);
        })
        $("#modal_ratesJob_edit").modal();
    }
</script>
