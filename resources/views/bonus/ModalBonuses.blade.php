<div class="modal fade" id="modal_bonuses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar bonus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" class="" action="{{route('bonus.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="txt_idBonuses" id="txt_idBonuses">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descriptionBonus" name="descriptionBonus" value="{{old('descriptionBonus')}}"
                                placeholder="Ingrese la descripción del bonus">
                            {!!$errors->first('descriptionBonus','<span class=error>:message</span>')!!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="valueBonus" name="valueBonus" value="{{old('valueBonus')}}"
                                placeholder="Ingrese el $ valor del bonus">
                            {!!$errors->first('valueBonus','<span class=error>:message</span>')!!}
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success mr-2">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
