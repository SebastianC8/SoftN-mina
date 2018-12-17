<div class="modal fade" id="modal_overtimes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Horas extras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modal_overtimess" action="{{route('overtimes.store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descriptionOvertime" name="descriptionOvertime" value="{{old('descriptionOvertime')}}"
                                placeholder="Ingrese la descripción de la hora extra" required>
                            {!!$errors->first('descriptionOvertime','<span class=error>:message</span>')!!}
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Porcentaje</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="percent" name="percent" value="{{old('percent')}}"
                                placeholder="Ingrese el porcentaje de valor de la hora extra" required>
                            {!!$errors->first('percent','<span class=error>:message</span>')!!}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
                <button type="submit" class="btn btn-success mr-2">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
