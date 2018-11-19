@extends('layout')
@section('contenido')

@include('nucleusfamily.addRelationships')
@include('nucleusfamily.editRelationships')

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            {{-- <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data"> --}}
                <form id="form_areas" class="" action="{{ route('nucleusfamily.store') }}" method="POST">                
                @csrf
                <h3>Registrar persona en núcleo familiar</h3><br>                
                <div class="input-group mb-5">
                        <input type="text" class="form-control" placeholder="Buscar por documento" aria-label="Recipient's username" aria-describedby="basic-addon2" onchange="searchDocument(this.value)" name="btnSearch" id="btnSearch">
                        <div class="input-group-append">
                        {{-- <button class="btn btn-secondary" onclick="searchDocument(this)">Buscar</button> --}}
                        </div>
                      </div>
                      
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tipo de Documento</label>                            
                            <div class="col-sm-9">
                                <select class="form-control" name="documentType_id" id="documentType_id">
                                    @foreach ($documentTypes as $value)
                                        <option value="{{$value->idDocumentType}}">{{$value->descriptionDocument}}</option>
                                        {!!$errors->first('documentType_id','<span class=error>:message</span>')!!}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Documento</label>
                            <div class="col-sm-9">
                                    <input type="text" class="form-control" id="document" name="document" value="{{old('document')}}" placeholder="Ingrese el documento" required>
                                   {!!$errors->first('document','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Ingrese el nombre" required>
                                    {!!$errors->first('name','<span class=error>:message</span>')!!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Apellido</label>
                                <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{old('lastName')}}" placeholder="Ingrese el apellido" required>
                                        {!!$errors->first('lastName','<span class=error>:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Edad </label>
                            <div class="col-sm-9">
                                 <input type="number" class="form-control" id="age" name="age" value="{{old('age')}}" placeholder="Ingrese la edad" required>
                                {!!$errors->first('age','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Teléfono</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" placeholder="Ingrese el teléfono" required>
                                {!!$errors->first('phone','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dirección</label>
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" placeholder="Ingrese la dirección" required>
                                {!!$errors->first('address','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">                                
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}" placeholder="Ingrese correo electrónico" required>
                                {!!$errors->first('','<span class=error>:message</span>')!!}
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Parentesco</label>
                                    <div class="col-sm-9">
                                            <select class="form-control" name="relationShip_id" id="relationShip_id">                                                    
                                                    @foreach ($relationships as $value)
                                                        <option value="{{$value->idRelationship}}">{{$value->nameRelationship}}</option>
                                                        {!!$errors->first('relationShip_id','<span class=error>:message</span>')!!}
                                                    @endforeach                                                    
                                            </select>                                           
                                    </div>                                    
                                </div>
                            </div>                                        
                        </div>
                    <button class="btn btn-success pull-right" type="submit">Registrar</button>
            </form>            
        </div>
    </div>
</div>
</div>
</div>

<div class="col-12 stretch-card">
        <div class="card" style="border-radius:20px">
            <div class="card-body">
                <button id="" class="btn btn-success btn-fw" onclick="addRelationShips()">Parentesco <i class="fas fa-plus-circle"></i></button><br><br>
                {{-- @if(session()->has('alert'))
                @else
                <h3>{{session('alert')}}</h3> --}}
                <h4 class="card-title">Lista de parentesco </h4>
                <h4></h4>
                <table class="table table-bordered" id="tableC">
                    <thead>
                        <tr>
                            <th>Descripción</th>                
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($relationships as $item)
                        <tr>
                            <td>{{$item->nameRelationship}}</td>                            
                            <td>
                                <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="editRelationShips({{$item->idRelationship}})"><i
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
@stop



<script>
    function searchDocument(document){
        var value=document.trim();
        $.get("{{ url('nucleusfamily')}}" + '/' + value + '/show', (data)=>{
            $("#documentType_id").val(data.documentType_id);
            $("#name").val(data.name);
            $("#age").val(data.age); 
            $("#address").val(data.address); 
            $("#phone").val(data.phone); 
            $("#email").val(data.email); 
            $("#relationShip_id").val(data.relationShip_id); 
            $("#lastName").val(data.lastName); 
            $("#document").val(data.document); 
     
        })
    }
</script>

<script>
        function addRelationShips(){
            $('#addRelationships').modal();
        }
    </script>

<script>
        function editRelationShips(id){
            $.get("{{ url('relationships') }}"+ '/' + id + '/show',(data)=>{            
            $("#idRelationship").val(data.idRelationship);                                              
            $("#nameRelationshipE").val(data.nameRelationship);                     
            })
             $('#editRelationships').modal();
        }
    </script>


    

{{-- <script>
    function calculateValue(value){
        var data=[];
        if(value < 10){
            data.push('Microempresa',0)
            $("#sizeCompany").val(data[0]);
            $("#sizeCompanyDB").val(data[1])
        }
        else if(value >= 10 && value < 50){
            data.push('Pequeña empresa',1)
            $("#sizeCompany").val(data[0]);
            $("#sizeCompanyDB").val(data[1])
        }
        else if(value >= 50 && value < 250){
            data.push('Mediana empresa',2)
            $("#sizeCompany").val(data[0]);
            $("#sizeCompanyDB").val(data[1])
        }
        else if(value >= 250){
            data.push('Macroempresa',3)
            $("#sizeCompany").val(data[0]);
            $("#sizeCompanyDB").val(data[1])
        }
    }
</script> --}}
