@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
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
                        <td>
                            {{-- <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="editEmployee({{$item->idemployees}})"><i
                            class="fas fa-edit"></i></button> --}}

                            <a class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="editEmployee({{$item->idemployees}})" href="{{url('employees/edit')}}"><i
                            class="fas fa-edit"></i></a>

                            <button class="btn btn-icons btn-rounded btn-outline-primary" title="Ver detalle" style="border-radius:20px" onclick="getEmployee({{$item->idemployees}})"><i
                            class="fas fa-eye"></i></button>
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
            $("#body_table_employees").append("<tr><td>"+data.entryDate+"</td><td>"+data.numberSons+"</td><td>"+data.levelEducative+"</td><td>"+data.nameMaritalStatus+"</td><td>"+data.nameEPS+"</td><tr>");
        })
        $("#modal_employees").modal();
    }
</script>

<script>
    function editEmployee(val){
        $.get("{{url('employees')}}" + '/' + val + '/show', (data)=>{
            console.log(data);
            var x = $("#document_edit").val(data.document);
            console.log(x);
        })
    }
</script>
