@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addPensions()" title="Añadir una pensión"> Añadir pensiones <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Listado de pensiones </h4>
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
                    @foreach ($pensions as $item)
                    <tr>
                        <td>{{$item->namePensions}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editPensions({{$item->idPensions}})" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/pensions/estado/{{$item->idPensions}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/pensions/estado/{{$item->idPensions}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

@include('pensions.ModalPensions')
@include('pensions.ModalPensionsEdit')

</div>
@stop

<script>
    function addPensions(){
        $("#modal_pensions").modal();
    }
</script>

<script>
    function editPensions(id){
        $.get("{{url('pensions')}}" + '/' + id + '/show', (data)=>{
            $("#idPensions").val(data.idPensions);
            $("#namePensions_edit").val(data.namePensions);
        })
        $("#modal_pensions_edit").modal();
    }
</script>
