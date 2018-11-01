<div class="modal fade" id="modal_ratesJob_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar cargos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="rateJobs_update" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" name="idRatesJob" id="idRatesJob">
                        <label for="" class="col-sm-3 col-form-label">Cargo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameJob_edit" name="nameJob_edit" value="{{old('nameJob_edit')}}"
                                placeholder="Ingrese el nombre del cargo" required>
                            {!!$errors->first('nameJob_edit','<span class=error>:message</span>')!!}
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ratesValue_edit" name="ratesValue_edit" value="{{old('ratesValue_edit')}}"
                                placeholder="Ingrese el salario del cargo" required>
                            {!!$errors->first('ratesValue_edit','<span class=error>:message</span>')!!}
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


