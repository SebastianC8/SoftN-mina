@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="add_arl()" title="Añadir una ARL"> Añadir ARL <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de ARL</h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Porcentaje</th>
                        <th>Valor de ARL</th>
                        <th>Año de vigencia</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arl as $item)
                    <tr>
                        <td>{{$item->nameARL}}</td>
                        <td>{{$item->value_arl}}</td>
                        <td>{{substr($item->year_valid, 0, 4)}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="edit_arl({{$item->idARL}})" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/arl/estado/{{$item->idARL}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/arl/estado/{{$item->idARL}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

@include('arl.mdl_arl')
@include('arl.mdl_arl_edit')

</div>
@stop

<script>
    function add_arl(){
        $("#modal_arl").modal();
    }
</script>

<script>
    function edit_arl(id){
        $.get("{{url('arl')}}" + '/' + id + '/show', (data)=>{
            $("#idARL").val(data.idARL);
            $("#nameARL_edit").val(data.nameARL);
<<<<<<< HEAD
            $("#percentageARL_EDIT").val(data.value_arl);
=======
            $("#value_arl_edit").val(data.value_arl);
>>>>>>> master
        })
        $("#modal_arl_edit").modal();
    }
</script>
