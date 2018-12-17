<div class="modal fade" id="modal_pensions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pensiones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="<?php echo e(route('pensions.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namePensions" name="namePensions" value="<?php echo e(old('namePensions')); ?>"
                                placeholder="Ingrese la descripción de la pensión" required>
                            <?php echo $errors->first('namePensions','<span class=error>:message</span>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">% del empleado</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="percentagePension" name="percentagePension" value="<?php echo e(old('percentagePension')); ?>"
                                placeholder="Ingrese el porcentaje del empleado." required>
                            <?php echo $errors->first('percentagePension','<span class=error>:message</span>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">% del empleador</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="percentage_employer" name="percentage_employer" value="<?php echo e(old('percentage_employer')); ?>"
                                placeholder="Ingrese el porcentaje del empleador." required>
                            <?php echo $errors->first('percentage_employer','<span class=error>:message</span>'); ?>

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
