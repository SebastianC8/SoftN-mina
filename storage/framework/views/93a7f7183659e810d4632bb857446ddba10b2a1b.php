<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addOvertimes()" title="Añadir una hora extra"> Añadir horas extras <i class="fas fa-plus-circle"></i></button><br><br>
            
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Listado de horas extras </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Porcentaje</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $overtimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->descriptionOvertime); ?></td>
                        <td><?php echo e($item->value); ?></td>
                        <td><?php echo e($item->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editOvertimes(<?php echo e($item->idOvertime); ?>)" title="Editar"><i
                                class="fas fa-edit"></i></button>

                            <?php if($item->status==1): ?>
                            <a href="/overtimes/estado/<?php echo e($item->idOvertime); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/overtimes/estado/<?php echo e($item->idOvertime); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

<?php echo $__env->make('overtimes.ModalOvertimes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('overtimes.ModalOvertimesEdit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<script>
    function addOvertimes(){
        $("#modal_overtimes").modal();
    }
</script>

<script>
    function editOvertimes(id){
        $.get("<?php echo e(url('overtimes')); ?>" + '/' + id + '/show', (data)=>{
            console.log(data);
            $("#idOvertime").val(data.idOvertime);
            $("#descriptionOvertime_edit").val(data.descriptionOvertime);
            $("#percent_edit").val(data.percent);
        })
        $("#modal_overtimes_edit").modal();
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>