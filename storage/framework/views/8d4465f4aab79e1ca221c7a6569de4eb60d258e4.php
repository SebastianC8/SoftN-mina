<div class="modal fade" id="modal_deductions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deducciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="<?php echo e(route('deductions.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameDeduction" name="nameDeduction" value="<?php echo e(old('nameDeduction')); ?>"
                                placeholder="Ingrese una descripción de la deducción" required>
                            <?php echo $errors->first('nameDeduction','<span class=error>:message</span>'); ?>

                        </div><br><br>
                        <label for="" class="col-sm-3 col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="value_deduction" name="value_deduction" value="<?php echo e(old('value_deduction')); ?>"
                                placeholder="Ingrese el valor de la deducción" required>
                            <?php echo $errors->first('value_deduction','<span class=error>:message</span>'); ?>

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

