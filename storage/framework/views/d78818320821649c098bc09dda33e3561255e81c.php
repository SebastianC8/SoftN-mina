<div class="modal fade" id="modal_arl_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar ARL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="arl_update" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <input type="hidden" name="idARL" id="idARL">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameARL_edit" name="nameARL_edit" value="<?php echo e(old('nameARL_edit')); ?>"
                                placeholder="Ingrese la descripción de la ARL" required>
                            <?php echo $errors->first('nameARL_edit','<span class=error>:message</span>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Valor de ARL</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="value_arl_edit" name="value_arl_edit" value="<?php echo e(old('value_arl_edit')); ?>"
                                placeholder="Ingrese la descripción de la ARL" required>
                            <?php echo $errors->first('value_arl','<span class=error>:message</span>'); ?>

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


