<div class="modal fade" id="modal_holidays_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar vacaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  
            <div class="modal-body">
                <form id="modal_holidays_editForm" action="holidays_update" method="POST">
                    @csrf
                    <input type="hidden" name="idHolidays" id="idHolidays">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descriptionHolidays_edit"  name="descriptionHolidays_edit" value="{{old('descriptionHolidays_edit')}}"
                                placeholder="Ingrese la descripción." >
                            {!!$errors->first('descriptionHolidays_edit','<span class=error>:message</span>')!!}
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Fecha de inicio</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="dateStart_edit" name="dateStart_edit" value="{{old('dateStart_edit')}}"
                                placeholder="Ingrese la fecha inicial." >
                            {!!$errors->first('dateStart_edit','<span class=error>:message</span>')!!}
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Fecha fin</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="dateEnd_edit" name="dateEnd_edit" value="{{old('dateEnd_edit')}}"
                                placeholder="Ingrese la fecha final." >
                            {!!$errors->first('dateEnd_edit','<span class=error>:message</span>')!!}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" id="btbnModalEdit" class="btn btn-success mr-2">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>



