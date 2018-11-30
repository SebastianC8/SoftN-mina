<?php $__env->startSection('contenido'); ?>

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addDeductions()" title="Añadir una deducción"> Añadir deducción <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de deducciones </h4>
            <h4></h4>
            <table class="table table-bordered" id="">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->nameDeduction); ?></td>
                        <td><?php echo e($item->value_deduction); ?></td>
                        <td><?php echo e($item->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editDeductions(<?php echo e($item->idDeductions); ?>)" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            <?php if($item->status==1): ?>
                            <a href="/deductions/estado/<?php echo e($item->idDeductions); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/deductions/estado/<?php echo e($item->idDeductions); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

<?php echo $__env->make('deductions.mdl_deductions', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('deductions.mdl_deductions_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<script>
    function addDeductions(){
        $("#modal_deductions").modal();
    }
</script>

<script>
    function editDeductions(id){
        $.get("<?php echo e(url('deductions')); ?>" + '/' + id + '/show', (data)=>{
            $("#idDeductions").val(data.idDeductions);
            $("#nameDeduction_edit").val(data.nameDeduction);
            $("#value_deduction_edit").val(data.value_deduction);
        })
        $("#modal_deductions_edit").modal();
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>