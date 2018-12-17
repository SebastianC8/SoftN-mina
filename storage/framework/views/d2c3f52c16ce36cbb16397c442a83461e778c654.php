<?php $__env->startSection('contenido'); ?>

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <ul class="nav nav-tabs" style="padding:11px">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('employees.index')); ?>" style="margin-left: 11px;">Lista de empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('employees.vinculations')); ?>">Afiliaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo e(route('employees.level_educative')); ?>">Nivel educativo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <div class="card-body">
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Niveles educativos </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Tipo de documento</th>
                        <th>Documento</th>
                        <th>Empleado</th>
                        <th style="width: 139px;">Niveles educativos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->descriptionDocument); ?></td>
                        <td><?php echo e($item->document); ?></td>
                        <td><?php echo e($item->nameEmployee." ".$item->lastName); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-primary" title="Ver detalle" style="border-radius:20px" onclick="get_lvl_educative(<?php echo e($item->idemployees); ?>)"><i
                            class="fas fa-eye"></i></button>
                            <button class="btn btn-icons btn-rounded btn-outline-success" title="Añadir" style="border-radius:20px" onclick="open_modal(<?php echo e($item->idemployees); ?>)"><i class="fas fa-plus-circle"></i></button>
                        </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php endif; ?>
<?php echo $__env->make('employees.mdl_employee_lvlEducative', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employees.mdl_add_lvl_educative', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<script>
    function get_lvl_educative(id){
        $.get("<?php echo e(url('employees')); ?>" + '/' + id + '/get_lvl', (data)=>{
            $("#tbl_employee_x_lvl").empty();
            $.each(data, function(index, value) {
                $("#tbl_employee_x_lvl").append(
                    "<tr><td>"+value['description_levelEducative']+"</td><td>"+value['nameProfession']+"</td><td>"+value['yearStart']+"</td><td>"+value['yearEnd']+"</td></tr>"
                );
            });
            $("#modal_employees_level_educative").modal();
        })
    }
</script>

<script>

    var getValueStart_mdl = 0;
    var getValueEnd_mdl = 0;
    var employee_id = 0;

    function valueStart_mdl(date){
        getValueStart_mdl = date;
    }

    function valueEnd_mdl(date){
        getValueEnd_mdl = date;
    }

    function open_modal(e){
        $("#modal_employees_addLvls").modal();
        employee_id = e;
    }

    function edit_lvl_educative(){
        let id_levelEducative_mdl = $("#levelEducative_id_mdl").val();
        let text_levelEducative_mdl = $("#levelEducative_id_mdl option:selected").text();
        let id_professions_mdl = $("#professions_id_mdl").val();
        let text_professions_mdl = $("#professions_id_mdl option:selected").text();
        let yearStart_mdl = getValueStart_mdl;
        let yearEnd_mdl = getValueEnd_mdl;
        
        $("#tbl_mdl_lvlEducative").append(
            "<tr id='tr"+id_levelEducative_mdl+"'><input type='hidden' value='"+id_levelEducative_mdl+"' name='level_educative_id_mdl[]'><td>"+text_levelEducative_mdl+"</td><input type='hidden' value='"+id_professions_mdl+"' name='professions_id_mdl[]'><td>"+text_professions_mdl+"</td><input type='hidden' value='"+yearStart_mdl+"' name='yearStart_mdl[]'><td>"+yearStart_mdl+"</td><input type='hidden' value='"+yearEnd_mdl+"' name='yearEnd_mdl[]'><td>"+yearEnd_mdl+"</td><input type='hidden' name='employee_id' value="+employee_id+"><td><button class='btn btn-icons btn-rounded btn-danger' title='Eliminar de la lista' type='button' onclick='$("+'"'+"#tr"+id_levelEducative_mdl+'"'+").remove()'><i class='fas fa-trash'></i></button></td></tr>"
        );
    }
</script>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>