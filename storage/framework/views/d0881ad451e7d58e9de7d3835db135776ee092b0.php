
<div class="modal fade" id="addLayoffst" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cesantías</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_areas" class="" action="<?php echo e(route('layoffs.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Cesantía</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descriptionLayoffs" name="descriptionLayoffs" value="<?php echo e(old('descriptionLayoffs')); ?>"
                                placeholder="Ingrese la descripción de la cesantía" required>
                            <?php echo $errors->first('descriptionLayoffs','<span class=error>:message</span>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="valueLayoffs" name="valueLayoffs" value="<?php echo e(old('valueLayoffs')); ?>"
                                placeholder="Ingrese el valor de la cesantía" required>
                            <?php echo $errors->first('valueLayoffs','<span class=error>:message</span>'); ?>

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
