<div class="modal fade" id="modal_company" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="" action="companyUpdate" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="mdl_idCompany" id="mdl_idCompany">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Tipo de documento</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="mdl_documentType" id="mdl_documentType">
                                <?php $__currentLoopData = $documentTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->idDocumentType); ?>"><?php echo e($value->descriptionDocument); ?></option>
                                    <?php echo $errors->first('mdl_documentType','<span class=error>:message</span>'); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Código de la empresa</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mdl_codCompany" name="mdl_codCompany"
                                placeholder="Ingrese el código de la empresa" required>
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mdl_nameCommission" name="mdl_nameCommission"
                                placeholder="Ingrese el nombre de la empresa" required>
                        </div>
                        
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Número de empleados</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mdl_numberEmployees" onchange="calculateValue(this.value)" name="mdl_numberEmployees"
                                placeholder="Ingrese el número de empleados de la empresa" required>
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Tamaño de la empresa</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mdl_sizeCompany" name=""
                                placeholder="Tamaño de la empresa" readOnly required>
                            <input type="hidden" class="form-control" id="mdl_sizeCompanyDB" name="mdl_sizeCompanyDB">
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
