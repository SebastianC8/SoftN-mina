@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addEPS()" title="Añadir una nueva EPS"> Añadir una EPS <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de EPS </h4>
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
                    @foreach ($eps as $item)
                    <tr>
                        <td>{{$item->nameEPS}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editEPS({{$item->idEPS}})" title="Editar"><i
                                class="fas fa-edit"></i></button>

                            @if($item->status == 1)
                            <a href="/EPS/estado/{{$item->idEPS}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/EPS/estado/{{$item->idEPS}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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
@include('eps.mdl_eps')
@include('eps.mdl_eps_edit')
</div>
@stop

<script>
    function addEPS(){
        $("#modal_eps").modal();
    }
</script>

<script>
    function editEPS(id){
        $.get("{{url('EPS')}}" + '/' + id + '/show', (data)=>{
            $("#idEPS_edit").val(data.idEPS);
            $("#nameEPS_edit").val(data.nameEPS);
        })
        $("#modal_eps_edit").modal();
    }
</script>


