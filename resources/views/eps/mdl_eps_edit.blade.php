<div class="modal fade" id="modal_eps_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar EPS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modal_eps_editt" action="EPS_update" method="POST">
                    @csrf
                    <input type="hidden" name="idEPS_edit" id="idEPS_edit">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameEPS_edit" name="nameEPS_edit" value="{{old('nameEPS_edit')}}"
                                placeholder="Ingrese el nombre de la EPS" required>
                            {!!$errors->first('nameEPS_edit','<span class=error>:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group row"> 
                        <label for="" class="col-sm-3 col-form-label">Porcentaje</label>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">% del empleado</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="percentageEPSEdit" name="percentageEPSEdit" value="{{old('percentageEPSEdit')}}"
                                placeholder="Ingrese el porcentaje de la eps" required>
                            {!!$errors->first('percentageEPS','<span class=error>:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">% del empleador</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="percentage_employeer_edit" name="percentage_employeer_edit" value="{{old('percentage_employeer_edit')}}"
                                placeholder="Ingrese el porcentaje de la eps" required>
                            {!!$errors->first('percentageEPS','<span class=error>:message</span>')!!}
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
