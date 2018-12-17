<div class="modal fade" id="modal_commissionsEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar comisión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modal_commissionsEdits" action="commissionsUpdate" method="POST">
                    @csrf
                    <input type="hidden" name="idCommission_mdl" id="idCommission_mdl">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameComissionMdl" name="nameComissionMdl" value="{{old('nameComissionMdl')}}"
                                placeholder="Ingrese el nombre de la comisión" required>
                            {!!$errors->first('nameComissionMdl','<span class=error>:message</span>')!!}
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
