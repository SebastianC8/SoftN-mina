<?php $__env->startSection('contenido'); ?>

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="add_compensationFound()" title="Añadir un fondo de compensación"> Añadir fondo de compensación <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Fondo de compensación </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $compensationFound; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->description); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="edit_compensationFound(<?php echo e($item->idCompensationFound); ?>)" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            
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

<?php echo $__env->make('compensationFound.mdl_compensationFound', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('compensationFound.mdl_compensationFound_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<script>
    function add_compensationFound(){
        $("#modal_compensationFound").modal();
    }
</script>

<script>
    function edit_compensationFound(id){
        $.get("<?php echo e(url('compensationFound')); ?>" + '/' + id + '/show', (data)=>{
            $("#idCompensationFound").val(data.idCompensationFound);
            $("#description_edit").val(data.description);
        })
        $("#modal_compensationFound_edit").modal();
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>