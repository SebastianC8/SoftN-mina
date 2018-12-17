<div class="modal fade" id="modal_documentType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tipo de Documento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="" action="<?php echo e(route('documentType.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Descripción <span style="color:red">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descriptionDocument" name="descriptionDocument"
                                placeholder="Ingrese el nombre del tipo de documento" required>
                            <?php echo $errors->first('descriptionDocument','<span class=error>:message</span>'); ?>

                        </div>
                        <label for="" class="col-sm-3 col-form-label" style="margin-top: 9px;">Orientado a <span style="color:red">*</span></label>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="codeDiferent" id="codeDiferentE"
                                                value="1" checked> <i class="input-helper"></i>Empresa
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input input-helper" name="codeDiferent" id="codeDiferent" value="0"
                                          ><i class="input-helper"></i> Persona
                                        </label>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success mr-2">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
