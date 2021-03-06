<div class="modal fade" id="modal_holidays" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vacaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="" action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descriptionHolidays" name="descriptionHolidays" value="<?php echo e(old('descriptionHolidays')); ?>"
                                placeholder="Ingrese la descripción de las vacaciones" required>
                            <?php echo $errors->first('descriptionHolidays','<span class=error>:message</span>'); ?>

                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Fecha de inicio</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="dateStart" name="dateStart" onchange="validateDate(this.value)" value="<?php echo e(old('dateStart')); ?>"
                                placeholder="Ingrese el nombre de la EPS" required>
                            <?php echo $errors->first('dateStart','<span class=error>:message</span>'); ?>

                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Fecha fin</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="dateEnd" name="dateEnd" readonly value="<?php echo e(old('dateEnd')); ?>"
                                placeholder="Fecha fin de las vacaciones" required>
                            <?php echo $errors->first('dateEnd','<span class=error>:message</span>'); ?>

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
