@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="add_compensationFound()" title="Añadir un fondo de compensación"> Añadir fondo de compensación <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Fondo de compensación </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($compensationFound as $item)
                    <tr>
                        <td>{{$item->description}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="edit_compensationFound({{$item->idCompensationFound}})" title="Editar"><i
                            class="fas fa-edit"></i></button>
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

@include('compensationFound.mdl_compensationFound')
@include('compensationFound.mdl_compensationFound_edit')

</div>
@stop

<script>
    function add_compensationFound(){
        $("#modal_compensationFound").modal();
    }
</script>

<script>
    function edit_compensationFound(id){
        $.get("{{url('compensationFound')}}" + '/' + id + '/show', (data)=>{
            $("#idCompensationFound").val(data.idCompensationFound);
            $("#description_edit").val(data.description);
        })
        $("#modal_compensationFound_edit").modal();
    }
</script>
