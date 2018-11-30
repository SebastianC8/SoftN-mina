<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addRatesJob()" title="Añadir un cargo"> Añadir un cargo <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Listado de cargos </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $ratesJob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->nameJob); ?></td>
                        <td><?php echo e($item->ratesValue); ?></td>
                        <td><?php echo e($item->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editRatesJob(<?php echo e($item->idRatesJob); ?>)" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            <?php if($item->status==1): ?>
                            <a href="/rateJobs/estado/<?php echo e($item->idRatesJob); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/rateJobs/estado/<?php echo e($item->idRatesJob); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

<?php echo $__env->make('rateJobs.ModalRatesJob', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('rateJobs.ModalRatesJobEdit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<script>
    function addRatesJob(){
        $("#modal_ratesJob").modal();
    }
</script>

<script>
    function editRatesJob(id){
        $.get("<?php echo e(url('rateJobs')); ?>" + '/' + id + '/show', (data)=>{
            $("#idRatesJob").val(data.idRatesJob);
            $("#nameJob_edit").val(data.nameJob);
            $("#ratesValue_edit").val(data.ratesValue);
        })
        $("#modal_ratesJob_edit").modal();
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>