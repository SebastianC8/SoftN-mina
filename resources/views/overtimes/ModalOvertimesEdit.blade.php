<div class="modal fade" id="modal_overtimes_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar horas extras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="overtimes_update" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" name="idOvertime" id="idOvertime">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descriptionOvertime_edit" name="descriptionOvertime_edit" value="{{old('descriptionOvertime_edit')}}"
                                placeholder="Ingrese la descripción de la hora extra" required>
                            {!!$errors->first('descriptionOvertime_edit','<span class=error>:message</span>')!!}
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Porcentaje</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="percent_edit" name="percent_edit" value="{{old('percent_edit')}}"
                                placeholder="Ingrese el porcentaje de valor de la hora extra" step="any">
                            {!!$errors->first('percent_edit','<span class=error>:message</span>')!!}
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
