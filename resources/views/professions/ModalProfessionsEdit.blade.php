<div class="modal fade" id="modal_professions_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar profesiones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="professions_update" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" name="idProfession_edit" id="idProfession_edit">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameProfession_edit" name="nameProfession_edit" value="{{old('nameProfession_edit')}}"
                                placeholder="Ingrese el nombre de la profesión" required>
                            {!!$errors->first('nameProfession_edit','<span class=error>:message</span>')!!}
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
