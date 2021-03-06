<div class="modal fade" id="modal_arl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ARL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="<?php echo e(route('arl.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameARL" name="nameARL" value="<?php echo e(old('nameARL')); ?>"
                                placeholder="Ingrese la descripción de la ARL" required>
                            <?php echo $errors->first('nameARL','<span class=error>:message</span>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Valor </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="value_arl" name="value_arl" value="<?php echo e(old('value_arl')); ?>"
                                placeholder="Ingrese el valor de la ARL" required>
                            <?php echo $errors->first('value_arl','<span class=error>:message</span>'); ?>

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


