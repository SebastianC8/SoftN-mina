<div class="modal fade" id="modal_commissions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comisión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="" action="<?php echo e(route('commissions.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="txt_idCommissions" id="txt_idCommissions">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameCommission" name="nameCommission" value="<?php echo e(old('nameCommission')); ?>"
                                placeholder="Ingrese el nombre de la comisión" required>
                            <?php echo $errors->first('nameCommission','<span class=error>:message</span>'); ?>

                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="value_commission" name="value_commission" value="<?php echo e(old('value_commission')); ?>"
                                placeholder="Ingrese el valor de la comisión" required>
                            <?php echo $errors->first('value_commission','<span class=error>:message</span>'); ?>

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
