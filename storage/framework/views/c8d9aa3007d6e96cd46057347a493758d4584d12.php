<div class="modal fade" id="modal_ratesJob" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cargos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="<?php echo e(route('rateJobs.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Cargo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameJob" name="nameJob" value="<?php echo e(old('nameJob')); ?>"
                                placeholder="Ingrese el nombre del cargo" required>
                            <?php echo $errors->first('nameJob','<span class=error>:message</span>'); ?>

                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ratesValue" name="ratesValue" value="<?php echo e(old('ratesValue')); ?>"
                                placeholder="Ingrese el salario del cargo" required>
                            <?php echo $errors->first('ratesValue','<span class=error>:message</span>'); ?>

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


