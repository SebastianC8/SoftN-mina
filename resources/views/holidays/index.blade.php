 @extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addHolidays()" title="Añadir un nuevo tipo de documento"> Añadir vacaciones <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de vacaciones </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha fin</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($holidays as $item)
                    <tr>
                        <td>{{$item->descriptionHolidays}}</td>
                        <td>{{$item->dateStart}}</td>
                        <td>{{$item->dateEnd}}</td>
                        <td>{{$item->status==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editHolidays({{$item->idHolidays}})" title="Editar"><i
                                class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/holidays/estado/{{$item->idHolidays}}/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/holidays/estado/{{$item->idHolidays}}/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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
@include('holidays.mdl_holidays')
@include('holidays.mdl_holidays_edit')
</div>
@stop

<script>
    function addHolidays(){
        $("#modal_holidays").modal();
    }
</script>

<script>
    function editHolidays(id){
        $.get("{{url('holidays')}}" + '/' + id + '/show', (data)=>{
            $("#idHolidays").val(data.idHolidays);
            $("#descriptionHolidays_edit").val(data.descriptionHolidays);
            $("#dateStart_edit").val(data.dateStart);
            $("#dateEnd_edit").val(data.dateEnd);
        })
        $("#modal_holidays_edit").modal();
    }
</script>

<script>
    function validateDate(date){
        var days = 16;
        var valueDate = $("#dateStart").val();
        var getDate = new Date(valueDate);
        // var month = ("0" + (getDate.getMonth() + 2)).slice(-2);
        getDate.setDate(getDate.getDate() + days);

        var formatDate = (getDate.getFullYear()) + '/' + (getDate.getMonth() + 1) +  '/' + getDate.getDate();
        $("#dateEnd").val(formatDate);
    }
</script>

