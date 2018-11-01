@extends('layout')

@section('contenido')


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addDocumentType()" title="Añadir un nuevo tipo de documento"> Añadir tipo de documento <i class="fas fa-plus-circle"></i></button><br><br>
            @if(session()->has('alert'))
            @else
            <h3>{{session('alert')}}</h3>
            <h4 class="card-title">Lista de tipos de documento </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Dirigido a</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documentTypes as $item)
                    <tr>
                        <td>{{$item->descriptionDocument}}</td>
                        <td>{{$item->codeDiferent==0?"Persona natural":"Empresas"}}</td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editDocumentType({{$item->idDocumentType}})" title="Editar"><i
                                class="fas fa-edit"></i></button>
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

@include('documentType.mdlDocumentTypeEdit')
@include('documentType.mdlDocumentType')


</div>
@stop

<script>
    function addDocumentType(){
        $("#modal_documentType").modal();
    }
</script>

<script>
    function editDocumentType(id){
        $.get("{{url('documentType')}}" + '/' + id + '/show', (data)=>{
            var value = data.codeDiferent;
            console.log(data)
            $("#idDocumentType_edit").val(data.idDocumentType);
            $("#descriptionDocument_edit").val(data.descriptionDocument);
            if(data.codeDiferent==0){
                document.getElementById("codeDiferent_edit").checked = true;
            }
            else if(data.codeDiferent==1){
                document.getElementById("codeDiferent_editE").checked = true;
            }
        })
        $("#modal_documentType_edit").modal();
    }
</script>
