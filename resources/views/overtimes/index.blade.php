@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addOvertimes()" title="Añadir una hora extra"> Añadir horas extras <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Listado de horas extras </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Porcentaje</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($overtimes as $item)
                    <tr>
                        <td>{{$item->descriptionOvertime}}</td>
                        <td>{{$item->value}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editOvertimes({{$item->idOvertime}})" title="Editar"><i
                                class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/overtimes/estado/{{$item->idOvertime}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/overtimes/estado/{{$item->idOvertime}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

@include('overtimes.ModalOvertimes')
@include('overtimes.ModalOvertimesEdit')

</div>
@stop

<script>
    function addOvertimes(){
        $("#modal_overtimes").modal();
    }
</script>

<script>
    function editOvertimes(id){
        $.get("{{url('overtimes')}}" + '/' + id + '/show', (data)=>{
            $("#idOvertime").val(data.idOvertime);
            $("#descriptionOvertime_edit").val(data.descriptionOvertime);
            $("#percent_edit").val(data.value);
        })
        $("#modal_overtimes_edit").modal();
    }
</script>
