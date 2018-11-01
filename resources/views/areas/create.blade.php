@extends('layout')
@section('contenido')
@include('areas.ModalAreas')
@include('areas.EditarArea')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="btnAdd" class="btn btn-success btn-fw" onclick="addAreas()"> Añadir área <i class="fas fa-plus-circle"></i></button><br><br>
            <h4 class="card-title">Consultar áreas </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableArea">
                <thead>
                    <tr>
                        <td>Área</td>
                        <td>Encargado</td>
                        <td>Estado</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($areas as $area)
                    <tr>
                        <td>{{$area->nameArea}}</td>
                        <td>{{$area->bossArea}}</td>
                        <td>{{$area->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="updateAreass({{$area->idAreas}})"><i
                                class="fas fa-edit"></i></button>
                            
                            @if($area->status == 1)
                            <a href="/area/estado/{{ $area->idAreas }}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i class="fas fa-exchange-alt">
                                </i></a>
                            @else
                            <a href="/area/estado/{{ $area->idAreas }}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i class="fas fa-exchange-alt">
                                </i></a>
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
</div>
@stop

<script>
        function addAreas()
        {
            $('#modal_areas').modal();            
        }
</script>

<script>

function updateAreass(idArea)
{
    $.get("{{ url('area')}}" + '/' + idArea + '/show' ,(data)=>{
        console.log(data.nameArea)
     $("#txt_idareas").val(data.idAreas)
     $("#nameAre").val(data.nameArea);
     $("#bossAre").val(data.bossArea);
     $('#modal_editar').modal(idArea);
    })
    
}
</script>

