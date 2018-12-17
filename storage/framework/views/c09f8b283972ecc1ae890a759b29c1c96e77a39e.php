<?php $__env->startSection('contenido'); ?>

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <ul class="nav nav-tabs" style="padding:11px">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('employees.index')); ?>" style="margin-left: 11px;">Lista de empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo e(route('employees.vinculations')); ?>">Afiliaciones</a>
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
            <h4 class="card-title">Lista de vinculaciones </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Empleado</th>
                        <th>ARL</th>
                        <th>EPS </th>
                        <th>Fondo de compensación</th>
                        <th>Pensión</th>
                        <th>Cesantías</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->nameEmployee." ".$item->lastName); ?></td>
                        <td><?php echo e($item->nameARL); ?></td>
                        <td><?php echo e($item->nameEPS); ?></td>
                        <td><?php echo e($item->description); ?></td>
                        <td><?php echo e($item->namePensions); ?></td>
                        <td><?php echo e($item->descriptionLayoffs); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>