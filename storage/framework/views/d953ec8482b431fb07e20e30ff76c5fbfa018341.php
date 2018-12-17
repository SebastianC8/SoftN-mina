<?php $__env->startSection('contenido'); ?>

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <ul class="nav nav-tabs" style="padding:11px">
            <li class="nav-item">
            <a class="nav-link active" href="<?php echo e(route('employees.index')); ?>" style="margin-left: 11px;">Lista de empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('employees.vinculations')); ?>">Afiliaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('employees.level_educative')); ?>">Nivel educativo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <div class="card-body">
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de Empleados </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Tipo de documento</th>
                        <th>N° de documento</th>
                        <th>Nombre </th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->descriptionDocument); ?></td>
                        <td><?php echo e($item->document); ?></td>
                        <td><?php echo e($item->nameEmployee." ".$item->lastName); ?></td>
                        <td><?php echo e($item->address); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->Phone); ?></td>
                        
                        <td>
                            <a class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" href="<?php echo e(url('employees/edit/'.$item->idemployees)); ?>"><i
                            class="fas fa-edit"></i></a>

                            <button class="btn btn-icons btn-rounded btn-outline-primary" title="Ver detalle" style="border-radius:20px" onclick="getEmployee(<?php echo e($item->idemployees); ?>)"><i
                            class="fas fa-eye"></i></button>

                            <?php if($item->statusEmployee == 1): ?>
                            <a href="/employees/estado/<?php echo e($item->idemployees); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                                class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/employees/estado/<?php echo e($item->idemployees); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
                                class="fas fa-exchange-alt"></i></a>

                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php endif; ?>
<?php echo $__env->make('employees.mdl_employees', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employees.mdl_employees_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<script>
    function getEmployee(id){
        $.get("<?php echo e(url('employees')); ?>" + '/' + id + '/show', (data)=>{
            $("#body_table_employees").empty();
            $("#body_table_employees").append("<tr><td>"+data.numberSons+"</td><td>"+data.nameMaritalStatus+"</td><td>"+data.descriptionContract+"</td><td>"+data.nameJob+"</td><td>"+data.ratesValue+"</td><tr>");
        })
        $("#modal_employees").modal();
    }
</script>



<script>
    function editEmployee(val){
        $.get("<?php echo e(url('employees')); ?>" + '/' + val + '/show', (data)=>{
        })
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>