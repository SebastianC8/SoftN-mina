@extends('layout')
@section('contenido')

@include('layoffs.CreateLayoffs')
@include('layoffs.EditLayoffs')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addLayoffs()"> Añadir cesantías <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de cesantías </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableCesantias">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($layoffs as $item)
                    <tr>
                        <td>{{$item->descriptionLayoffs}}</td>
                        <td>{{$item->valueLayoffs}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="updateLayoffs({{$item->idLayoffs}})"><i
                            class="fas fa-edit"></i></button>

                            @if($item->status == 1)
                            <a href="/layoffs/cambiarEstado/{{$item->idLayoffs}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                                class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/layoffs/cambiarEstado/{{$item->idLayoffs}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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


</div>
@stop

<script>
    function addLayoffs(){
        $('#addLayoffst').modal();
    }
</script>

<script>
    function updateLayoffs(id){
        $.get("{{ url('layoffs') }}" + '/' + id + '/show', (data)=>{
            $("#idLayoffs_edit").val(data.idLayoffs);
            $("#descriptionLayoffsE").val(data.descriptionLayoffs);
            $("#valueLayoffsE").val(data.valueLayoffs);
        })
        $('#editLayoffs').modal();
    }
</script>