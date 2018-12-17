<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="add_maritalStatus()" title="Añadir una nueva EPS"> Añadir un estado civil <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de estados civiles </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $marital_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->nameMaritalStatus); ?></td>
                        <td><?php echo e($item->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="edit_maritalStatus(<?php echo e($item->idMaritalStatus); ?>)" title="Editar"><i
                                class="fas fa-edit"></i></button>

                            <?php if($item->status==1): ?>
                            <a href="/maritalStatus/estado/<?php echo e($item->idMaritalStatus); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/maritalStatus/estado/<?php echo e($item->idMaritalStatus); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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
<?php echo $__env->make('marital_status.ModalMaritalStatus', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('marital_status.ModalMaritalStatusEdit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<script>
    function add_maritalStatus(){
        $("#modal_maritalStatus").modal();
    }
</script>


<script>
    function edit_maritalStatus(id){
        $.get("<?php echo e(url('maritalStatus')); ?>" + '/' + id + '/show', (data)=>{
            $("#idMaritalStatus").val(data.idMaritalStatus);
            $("#nameMaritalStatus_edit").val(data.nameMaritalStatus)
        })
        $("#modal_maritalStatus_edit").modal();
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>