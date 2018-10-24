<div class="modal fade" id="modal_company" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="" method="POST">
                    @csrf
                    <input type="hidden" name="mdl_idCompany" id="mdl_idCompany">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Tipo de documento</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="mdl_documentType" id="mdl_documentType">
                                @foreach ($documentTypes as $value)
                                    <option value="{{$value->idDocumentType}}">{{$value->descriptionDocument}}</option>
                                    {!!$errors->first('mdl_documentType','<span class=error>:message</span>')!!}
                                    @endforeach
                            </select>
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Código de la empresa</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mdl_codCompany" name="mdl_codCompany"
                                placeholder="Ingrese el código de la empresa" required>
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mdl_nameCommission" name="mdl_nameCommission"
                                placeholder="Ingrese el nombre de la empresa" required>
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Imagen</label>
                        <div class="col-sm-9">
                            <input type="file" style="font-size: 12px;" id="mdl_imgCompany" name="mdl_imgCompany">
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Número de empleados</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mdl_numberEmployees" name="mdl_numberEmployees"
                                placeholder="Ingrese el número de empleados de la empresa" required>
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Tamaño de la empresa</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mdl_sizeCompany" name=""
                                placeholder="Tamaño de la empresa" readOnly required>
                            <input type="hidden" class="form-control" id="mdl_sizeCompanyDB" name="mdl_sizeCompanyDB"
                                placeholder="Tamaño de la empresa" readOnly required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success mr-2">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
