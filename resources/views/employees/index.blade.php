@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <ul class="nav nav-tabs" style="padding:11px">
            <li class="nav-item">
            <a class="nav-link active" href="{{route('employees.index')}}" style="margin-left: 11px;">Lista de empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('employees.vinculations')}}">Afiliaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('employees.level_educative')}}">Nivel educativo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <div class="card-body">
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de Empleados </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Tipo de documento</th>
                        <th>N° de documento</th>
                        <th>Nombre </th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $item)
                    <tr>
                        <td>{{$item->descriptionDocument}}</td>
                        <td>{{$item->document}}</td>
                        <td>{{$item->nameEmployee." ".$item->lastName}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->Phone}}</td>
                        <td>{{$item->statusEmployee==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <a class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" href="{{url('employees/edit/'.$item->idemployees)}}"><i
                            class="fas fa-edit"></i></a>

                            <button class="btn btn-icons btn-rounded btn-outline-primary" title="Ver detalle" style="border-radius:20px" onclick="getEmployee({{$item->idemployees}})"><i
                            class="fas fa-eye"></i></button>

                            @if($item->statusEmployee == 1)
                            <a href="/employees/estado/{{$item->idemployees}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                                class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/employees/estado/{{$item->idemployees}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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
@include('employees.mdl_employees')
@include('employees.mdl_employees_edit')
</div>
@stop

<script>
    function getEmployee(id){
        $.get("{{url('employees')}}" + '/' + id + '/show', (data)=>{
            $("#body_table_employees").empty();
            $("#body_table_employees").append("<tr><td>"+data.entryDate+"</td><td>"+data.numberSons+"</td><td>"+data.levelEducative+"</td><td>"+data.nameMaritalStatus+"</td><tr>");
        })
        $("#modal_employees").modal();
    }
</script>


{{-- Pendiente. --}}
<script>
    function editEmployee(val){
        $.get("{{url('employees')}}" + '/' + val + '/show', (data)=>{
            console.log(data);
        })
    }
</script>
