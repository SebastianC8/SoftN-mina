<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addPensions()" title="Añadir una pensión"> Añadir pensiones <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Listado de pensiones </h4>
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
                    <?php $__currentLoopData = $pensions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->namePensions); ?></td>
                        <td><?php echo e($item->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editPensions(<?php echo e($item->idPensions); ?>)" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            <?php if($item->status==1): ?>
                            <a href="/pensions/estado/<?php echo e($item->idPensions); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/pensions/estado/<?php echo e($item->idPensions); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

<?php echo $__env->make('pensions.ModalPensions', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('pensions.ModalPensionsEdit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<script>
    function addPensions(){
        $("#modal_pensions").modal();
    }
</script>

<script>
    function editPensions(id){
        $.get("<?php echo e(url('pensions')); ?>" + '/' + id + '/show', (data)=>{
            $("#idPensions").val(data.idPensions);
            $("#namePensions_edit").val(data.namePensions);
        })
        $("#modal_pensions_edit").modal();
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>