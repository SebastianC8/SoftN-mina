<div class="modal fade" id="ModalEditBonuses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar bonus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="" action="<?php echo e(route('bonus.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descriptionBonus" name="descriptionBonus" value="<?php echo e(old('descriptionBonus')); ?>"
                                placeholder="Ingrese la descripción del bonus">
                            <?php echo $errors->first('descriptionBonus','<span class=error>:message</span>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="valueBonus" name="valueBonus" value="<?php echo e(old('valueBonus')); ?>"
                                placeholder="Ingrese el $ valor del bonus">
                            <?php echo $errors->first('valueBonus','<span class=error>:message</span>'); ?>

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
