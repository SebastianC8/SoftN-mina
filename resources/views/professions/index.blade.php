@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addProfessions()" title="Añadir una profesión"> Añadir profesiones <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Listado de profesiones </h4>
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
                    @foreach ($professions as $item)
                    <tr>
                        <td>{{$item->nameProfession}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editProfessions({{$item->idProfession}})" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/professions/estado/{{$item->idProfession}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/professions/estado/{{$item->idProfession}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

@include('professions.ModalProfessions')
@include('professions.ModalProfessionsEdit')

</div>
@stop

<script>
    function addProfessions(){
        $("#modal_professions").modal();
    }
</script>

<script>
    function editProfessions(id){
        $.get("{{url('professions')}}" + '/' + id + '/show', (data)=>{
            $("#idProfession_edit").val(data.idProfession);
            $("#nameProfession_edit").val(data.nameProfession);
        })
        $("#modal_professions_edit").modal();
    }
</script>
