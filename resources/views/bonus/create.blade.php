@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="btnAdd" class="btn btn-success btn-fw" onclick="addBonuses()"> Añadir bonus <i class="fas fa-plus-circle"></i></button><br><br>
            <h4 class="card-title">Consultar bonus </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bonuses as $item)
                    <tr>
                        <td>{{$item->descriptionBonus}}</td>
                        <td>{{$item->valueBonus}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="editBonuses({{$item->idBonus}})"><i
                                    class="fas fa-edit"></i></button>
                            <button class="btn btn-icons btn-rounded btn-outline-danger" title="Eliminar" style="border-radius:20px"><i
                                    class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@include('bonus.ModalBonuses')

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

