@extends('layout')

@section('contenido')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <ul class="nav nav-tabs" style="padding:11px">
            <li class="nav-item">
                <a class="nav-link" href="{{route('employees.index')}}" style="margin-left: 11px;">Lista de empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('employees.vinculations')}}">Afiliaciones</a>
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
            <h4 class="card-title">Lista de vinculaciones </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Empleado</th>
                        <th>ARL</th>
                        <th>EPS </th>
                        <th>Fondo de compensación</th>
                        <th>Pensión</th>
                        <th>Cesantías</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employee as $item)
                    <tr>
                        <td>{{$item->nameEmployee." ".$item->lastName}}</td>
                        <td>{{$item->nameARL}}</td>
                        <td>{{$item->nameEPS}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->namePensions}}</td>
                        <td>{{$item->descriptionLayoffs}}</td>
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
