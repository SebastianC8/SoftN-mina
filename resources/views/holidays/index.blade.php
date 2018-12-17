 @extends('layout')

@section('contenido')
@include('holidays.mdl_holidays')
@include('holidays.mdl_holidays_edit')

<div class="col-md-12">
    <div class="card" style="border-radius:20px">
        <div class="card-body table-responsive">
            <button id="" class="btn btn-success btn-fw" onclick="addHolidays()" title="Añadir un nuevo tipo de documento">
                Añadir vacaciones <i class="fas fa-plus-circle"></i></button><br><br>
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
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editHolidays({{$item->idHolidays}})"
                                title="Editar"><i class="fas fa-edit"></i></button>

                            @if($item->status==1)
                            <a href="/holidays/estado/{{$item->idHolidays}}/0" class="btn btn-icons btn-rounded btn-outline-danger"
                                title="Inactivar" style="border-radius:20px"><i class="fas fa-exchange-alt"></i></a>

                            @else
                            <a href="/holidays/estado/{{$item->idHolidays}}/1" class="btn btn-icons btn-rounded btn-outline-success"
                                title="Activar" style="border-radius:20px"><i class="fas fa-exchange-alt"></i></a>

                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
</div>

<div class="col-md-12 pt-4">
    <div class="card" style="border-radius:20px">
        <div class="card-body table-responsive">
            <form action="{{ route('diasfestivos.vacaciones') }}" method="POST">
            @csrf
            <label for="l">Documento</label><br>
            <input type="text" id="btn_buscar" name="btn_buscar" style="border-radius:10px; border:1px solid #ccc" onchange="get_value_input(this.value)" placeholder="Documento"/>
            <button type="button" class="btn btn-icons btn-rounded btn-outline-info" onclick="get_date()"><i class="fa fa-search"></i></a></button>
        </div>        
        <div class="col-auto">
                <label for="l">Fecha inicio contrato</label>
                <input type="" class="form-control mb-2 col-md-3" id="fechaIngreso" name="fechaIngreso" placeholder="Fecha de ingreso" disabled>
              </div>
              <div class="col-auto">
                    <label for="l" >Inicio vacaciones</label>
                    <input type="text" class="form-control mb-2 col-md-3" id="fechaVacaciones" name="fechaIngreso" placeholder="Fecha de vacaciones" onchange="operacion(this.value)">
              </div>
              <div class="col-auto">
                    <label for="l" >Fin vacaciones</label>
                    <input type="text" class="form-control mb-2 col-md-3" id="fechaFinVacaciones" name="fechaFinVacaciones" placeholder="Fecha fín vacaciones" >
                    <div class="col-auto">
                        <label for="l">Descripción</label>
                        <input type="" class="form-control mb-2 col-md-3" id="descripcion"  name="descripcion" placeholder="Descripción (Opcional)" >
                      </div>
                  <button type="submit" id="" class="btn btn-success mr-2">Guardar</button>
                </form>
                </div>      
    </div>
</div>
@stop



<script>
    let document_employee = 0;

    function addHolidays() {
        $("#modal_holidays").modal();
    }

    function get_value_input(value){
        document_employee = value;
    }

    function get_date(){
        $.get("{{ url('HolidaysController') }}" + '/' + document_employee + '/show', (data)=>{
            var inicio= data.fechaInicio;
            var vacaciones=data.fechaVacaciones;
            sumarDias(vacaciones);
             document.getElementById("fechaIngreso").value=formato(inicio);
             document.getElementById("fechaVacaciones").value=formato(vacaciones);
        });
    }

    function formato(texto){
    return texto.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');
    }

    function editHolidays(id) {
        $.get("{{url('holidays')}}" + '/' + id + '/show', (data) => {
            $("#idHolidays").val(data.idHolidays);
            $("#descriptionHolidays_edit").val(data.descriptionHolidays);
            $("#dateStart_edit").val(data.dateStart);
            $("#dateEnd_edit").val(data.dateEnd);
        });
        $("#modal_holidays_edit").modal();
    }

    function validateDate(date) {
        var days = 15;
        var valueDate = $("#dateStart").val();
        var getDate = new Date(valueDate);
        new Date(getDate.setDate(getDate.getDate() + days));
        var formatDate = (getDate.getFullYear()) + '/' +(getDate.getMonth() + 1) + '/' + get
    }
    
    function sumarDias(valor){
        console.log(valor);
        var val = new Date(valor);
        val.setDate(val.getDate() + 15);
        console.log(val);
        //val = new Date(val.getTime());
        //console.log(val.toLocaleDateString());
        console.log(val.getDate() + '/' + (val.getMonth() + 1) + '/' + val.getFullYear());
        var l = val.getDate() + '/' + (val.getMonth() + 1) + '/' + val.getFullYear();
        document.getElementById("fechaFinVacaciones").value = l;
    }

    function parseo(fecha){
        fecha=fecha.split("/");
        fecha[0]="0"+fecha[0];
        fecha[1]="0"+fecha[1];
        return `${fecha[0].substr(-2)}/${fecha[1].substr(-2)}/${fecha[2]}`;
    }

    function operacion(fechas){
        fechas=fechas.split('/');
        fechas=new Date(
            (
            new Date(`${fechas[2]}/${fechas[1]}/${fechas[0]}`).getTime()
            )+(86400000*15));
        document.getElementById("fechaFinVacaciones").value=parseo(fechas.toLocaleDateString());
        // var month = ("0" + (getDate.getMonth() + 2)).slice(-2);
        getDate.setDate(getDate.getDate() + days);

        var formatDate = (getDate.getFullYear()) + '/' + (getDate.getMonth() + 1) +  '/' + getDate.getDate();
        $("#dateEnd").val(formatDate);
    }

</script>