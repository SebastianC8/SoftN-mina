<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="btnAdd" class="btn btn-success btn-fw" onclick="addBonuses()"> Añadir bonus <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de bonus </h4>
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
                    <?php $__currentLoopData = $bonuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->descriptionBonus); ?></td>
                        <td>$ <?php echo e($item->valueBonus); ?></td>
                        <td><?php echo e($item->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="editBonuses(<?php echo e($item->idBonus); ?>)"><i
                                    class="fas fa-edit"></i></button>

                            <?php if($item->status == 1): ?>
                            <a href="/bonus/estado/<?php echo e($item->idBonus); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                                class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/bonus/estado/<?php echo e($item->idBonus); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

<?php echo $__env->make('bonus.mdl_bonuses', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<script>
    function addBonuses()
    {
        $('#modal_bonuses').modal();
        $('#form_bonuses')[0].reset();
    }
</script>

<script>
    function editBonuses(id)
    {
        $.get("<?php echo e(url('bonus')); ?>" + '/' + id + '/show', (data)=>{
            $("#txt_idBonuses").val(data.idBonus)
            $("#descriptionBonus").val(data.descriptionBonus);
            $("#valueBonus").val(data.valueBonus);
            $('#modal_bonuses').modal()
        })
    }
</script>




<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>