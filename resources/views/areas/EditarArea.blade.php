
<div class="modal fade" id="modal_editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar área</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form_areas" class="" action="{{route('areas.update')}}" method="POST">
                @csrf
                <input type="hidden" name="txt_idareas" id="txt_idareas">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Descripción</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nameAre" name="nameArea" value="{{old('nameArea')}}"
                            placeholder="Ingrese la descripción del área">
                        {!!$errors->first('nameArea','<span class=error>:message</span>')!!}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Encargado</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="bossAre" name="bossArea" value="{{old('bossArea')}}"
                            placeholder="Ingrese el encargado del área">
                        {!!$errors->first('bossArea','<span class=error>:message</span>')!!}
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
