<div class="modal fade" id="modal_pensions_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar pensiones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="pensions_update" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" name="idPensions" id="idPensions">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namePensions_edit" name="namePensions_edit" value="{{old('namePensions_edit')}}"
                                placeholder="Ingrese la descripción de la pensión" required>
                            {!!$errors->first('namePensions_edit','<span class=error>:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">% del empleado</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="percentagePension_Edit" name="percentagePension_Edit" value="{{old('percentagePension_Edit')}}"
                                placeholder="Ingrese el porcentaje de la pensión." required>
                            {!!$errors->first('percentagePension_Edit','<span class=error>:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">% del empleador</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="percentage_employer_edit" name="percentage_employer_edit" value="{{old('percentage_employer_edit')}}"
                                placeholder="Ingrese el porcentaje de la pensión." required>
                            {!!$errors->first('percentage_employer_edit','<span class=error>:message</span>')!!}
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
