<div class="modal fade" id="modal_eps" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EPS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modal_epss" action="{{route('EPS.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="idEPS" id="idEPS">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameEPS" name="nameEPS" value="{{old('nameEPS')}}"
                                placeholder="Ingrese el nombre de la EPS" required>
                            {!!$errors->first('nameEPS','<span class=error>:message</span>')!!}
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Porcentaje</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="percentageEPS" name="percentageEPS" value="{{old('percentageEPS')}}"
                                placeholder="Ingrese el porcentaje de la eps" required>
                            {!!$errors->first('percentageEPS','<span class=error>:message</span>')!!}
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
