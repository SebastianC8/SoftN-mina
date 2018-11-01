@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addDeductions()" title="Añadir una deducción"> Añadir deducción <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de deducciones </h4>
            <h4></h4>
            <table class="table table-bordered" id="">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deductions as $item)
                    <tr>
                        <td>{{$item->nameDeduction}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editDeductions({{$item->idDeductions}})" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/deductions/estado/{{$item->idDeductions}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/deductions/estado/{{$item->idDeductions}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

@include('deductions.mdl_deductions')
@include('deductions.mdl_deductions_edit')

</div>
@stop

<script>
    function addDeductions(){
        $("#modal_deductions").modal();
    }
</script>

<script>
    function editDeductions(id){
        $.get("{{url('deductions')}}" + '/' + id + '/show', (data)=>{
            $("#idDeductions").val(data.idDeductions);
            $("#nameDeduction_edit").val(data.nameDeduction);
        })
        $("#modal_deductions_edit").modal();
    }
</script>
