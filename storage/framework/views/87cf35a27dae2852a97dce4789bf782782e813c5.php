<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addProfessions()" title="Añadir una profesión"> Añadir profesiones <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Listado de profesiones </h4>
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
                    <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->nameProfession); ?></td>
                        <td><?php echo e($item->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editProfessions(<?php echo e($item->idProfession); ?>)" title="Editar"><i
                            class="fas fa-edit"></i></button>

                            <?php if($item->status==1): ?>
                            <a href="/professions/estado/<?php echo e($item->idProfession); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/professions/estado/<?php echo e($item->idProfession); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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

<?php echo $__env->make('professions.ModalProfessions', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('professions.ModalProfessionsEdit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<script>
    function addProfessions(){
        $("#modal_professions").modal();
    }
</script>

<script>
    function editProfessions(id){
        $.get("<?php echo e(url('professions')); ?>" + '/' + id + '/show', (data)=>{
            $("#idProfession_edit").val(data.idProfession);
            $("#nameProfession_edit").val(data.nameProfession);
        })
        $("#modal_professions_edit").modal();
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>