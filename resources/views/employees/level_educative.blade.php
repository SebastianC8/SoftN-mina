@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <ul class="nav nav-tabs" style="padding:11px">
            <li class="nav-item">
                <a class="nav-link" href="{{route('employees.index')}}" style="margin-left: 11px;">Lista de empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('employees.vinculations')}}">Afiliaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('employees.level_educative')}}">Nivel educativo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <div class="card-body">
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Niveles educativos </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Tipo de documento</th>
                        <th>Documento</th>
                        <th>Empleado</th>
                        <th style="width: 139px;">Niveles educativos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employee as $item)
                    <tr>
                        <td>{{$item->descriptionDocument}}</td>
                        <td>{{$item->document}}</td>
                        <td>{{$item->nameEmployee." ".$item->lastName}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-primary" title="Ver detalle" style="border-radius:20px" onclick="get_lvl_educative({{$item->idemployees}})"><i
                            class="fas fa-eye"></i></button>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endif
@include('employees.mdl_employee_lvlEducative')
</div>
@stop

<script>
    function get_lvl_educative(id){
        $.get("{{url('employees')}}" + '/' + id + '/get_lvl', (data)=>{
            $("#tbl_employee_x_lvl").empty();
            $.each(data, function(index, value) {
                $("#tbl_employee_x_lvl").append(
                    "<tr><td>"+value['description_levelEducative']+"</td><td>"+value['nameProfession']+"</td><td>"+value['yearStart']+"</td><td>"+value['yearEnd']+"</td></tr>"
                );
            });
            $("#modal_employees_level_educative").modal();
        })
    }
</script>

