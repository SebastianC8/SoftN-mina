<div class="modal fade" id="modal_information_work" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Información del empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="days_worked_update" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Empleado</label>
                        <div class="col-sm-9">
                            <input type="hidden" id="id_salary" name="id_salary">
                            <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{old('employee_id')}}" readonly
                                placeholder="Nombre del empleado">
                            {!!$errors->first('employee_id','<span class=error>:message</span>')!!}
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Salario</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="salary_employee" name="salary_employee" value="{{old('salary_employee')}}" readonly
                                placeholder="Salario básico del empleado." >
                            {!!$errors->first('salary_employee','<span class=error>:message</span>')!!}
                        </div>
                        <br><br>
                        <label for="" class="col-sm-3 col-form-label">Días trabajados</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="days_worked_mdl" name="days_worked_mdl" value="{{old('days_worked_mdl')}}"
                                placeholder="Días trabajados por el empleado" >
                            {!!$errors->first('days_worked_mdl','<span class=error>:message</span>')!!}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success mr-2">Editar</button>
                </form>
            </div>
        </div>
    </div>
</div>
