@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addCommissions()"> Añadir comisión <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de comisiones </h4>
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
                    @foreach ($commissions as $item)
                    <tr>
                        <td>{{$item->nameCommission}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="editCommissions({{$item->idCommissions}})"><i
                            class="fas fa-edit"></i></button>

                            @if($item->status == 1)
                            <a href="/commissions/estado/{{$item->idCommissions}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                                class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/commissions/estado/{{$item->idCommissions}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

@include('commission.ModalCommissions')
@include('commission.ModalCommissionEdit')

</div>
@stop

<script>
    function addCommissions(){
        $('#modal_commissions').modal();
    }
</script>

<script>
    function editCommissions(id)
    {
        $.get("{{url('commissions')}}" + '/' + id + '/show', (data)=>{
            $("#idCommission_mdl").val(data.idCommissions);
            $("#nameComissionMdl").val(data.nameCommission);
            $('#modal_commissionsEdit').modal();
        })
    }
</script>
