@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addResolutions()" title="Añadir una resolución"> Añadir resolución <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Listado de resoluciones </h4>
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
                    @foreach ($resolutions as $item)
                    <tr>
                        <td>{{$item->nameResolution}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editResolutions({{$item->idResolution}})" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/resolutions/estado/{{$item->idResolution}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/resolutions/estado/{{$item->idResolution}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

@include('resolutions.mdl_resolutions')
@include('resolutions.mdl_resolutions_edit')

</div>
@stop

<script>
    function addResolutions(){
        $("#modal_resolutions").modal();
    }
</script>

<script>
    function editResolutions(id){
        $.get("{{url('resolutions')}}" + '/' + id + '/show', (data)=>{
            $("#idResolution").val(data.idResolution);
            $("#nameResolution_edit").val(data.nameResolution);
        })
        $("#modal_resolutions_edit").modal();
    }
</script>

