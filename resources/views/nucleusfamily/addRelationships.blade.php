<div class="modal fade" id="addRelationships" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear parentesco</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('relationships.store')}}" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="idRelationship" id="idRelationship"> --}}
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameRelationship" name="nameRelationship" value="{{old('nameRelationship')}}"
                                placeholder="Ingrese la descripción del parentesco" required>
                            {!!$errors->first('nameRelationship','<span class=error>:message</span>')!!}
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
 