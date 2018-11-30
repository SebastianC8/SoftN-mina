<div class="modal fade" id="modal_employees_vinculations" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modalMediano" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vinculaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_bonuses" action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">EPS </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="name_eps" name="name_eps">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Valor</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="value_eps" name="value_eps">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Total</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="total_eps" name="total_eps">
                                </div>
                            </div>
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

