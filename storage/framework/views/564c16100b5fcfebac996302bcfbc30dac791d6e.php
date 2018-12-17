<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addEPS()" title="Añadir una nueva EPS"> Añadir una EPS <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de EPS</h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>% del empleado</th>
                        <th>% del empelador</th>
                        <th>Año de vigencia</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $eps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->nameEPS); ?></td>
                        <td><?php echo e($item->percentage); ?>%</td>
                        <td><?php echo e($item->eps_employeer); ?>%</td>
                        <td><?php echo e(substr($item->year_valid, 0, 4)); ?></td>
                        <td><?php echo e($item->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editEPS(<?php echo e($item->idEPS); ?>)" title="Editar"><i
                                class="fas fa-edit"></i></button>

                            <?php if($item->status == 1): ?>
                            <a href="/EPS/estado/<?php echo e($item->idEPS); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/EPS/estado/<?php echo e($item->idEPS); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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
<?php echo $__env->make('eps.mdl_eps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('eps.mdl_eps_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<script>
    function addEPS(){
        $("#modal_eps").modal();
    }
</script>

<script>
    function editEPS(id){
        $.get("<?php echo e(url('EPS')); ?>" + '/' + id + '/show', (data)=>{
            $("#idEPS_edit").val(data.idEPS);
            $("#nameEPS_edit").val(data.nameEPS);
            $("#percentageEPSEdit").val(data.percentage);
            $("#percentage_employeer_edit").val(data.eps_employeer);
        })
        $("#modal_eps_edit").modal();
    }
</script>



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>