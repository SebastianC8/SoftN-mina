@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addOvertimes()" title="Añadir una hora extra"> Añadir horas extras <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Listado de horas extras </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Porcentaje</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($marital_status as $item)
                    <tr>
                        <td>{{$item->nameMaritalStatus}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="edit_maritalStatus({{$item->idMaritalStatus}})" title="Editar"><i
                                class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/maritalStatus/estado/{{$item->idMaritalStatus}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/maritalStatus/estado/{{$item->idMaritalStatus}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @endif
                        </td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endif
@include('overtimes.ModalOvertimes')
</div>
@stop

<script>
    function addOvertimes(){
        $("#modal_overtimes").modal();
    }
</script>
