@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="btnAdd" class="btn btn-success btn-fw" onclick="addBonuses()"> Añadir bonus <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de bonus </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bonuses as $item)
                    <tr>
                        <td>{{$item->descriptionBonus}}</td>
                        <td>$ {{$item->valueBonus}}</td>
                        <td>{{ $item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="editBonuses({{$item->idBonus}})"><i
                                    class="fas fa-edit"></i></button>

                            @if($item->status == 1)
                            <a href="/bonus/estado/{{$item->idBonus}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                                class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/bonus/estado/{{$item->idBonus}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

@include('bonus.mdl_bonuses')

</div>
@stop

<script>
    function addBonuses()
    {
        $('#modal_bonuses').modal();
        $('#form_bonuses')[0].reset();
    }
</script>

<script>
    function editBonuses(id)
    {
        $.get("{{url('bonus')}}" + '/' + id + '/show', (data)=>{
            $("#txt_idBonuses").val(data.idBonus)
            $("#descriptionBonus").val(data.descriptionBonus);
            $("#valueBonus").val(data.valueBonus);
            $('#modal_bonuses').modal()
        })
    }
</script>



