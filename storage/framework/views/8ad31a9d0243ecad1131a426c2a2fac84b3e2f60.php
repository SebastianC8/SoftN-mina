<?php $__env->startSection('contenido'); ?>
<?php echo $__env->make('areas.ModalAreas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('areas.EditarArea', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="btnAdd" class="btn btn-success btn-fw" onclick="addAreas()"> Añadir área <i class="fas fa-plus-circle"></i></button><br><br>
            <h4 class="card-title">Consultar áreas </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableArea">
                <thead>
                    <tr>
                        <td>Área</td>
                        <td>Encargado</td>
                        <td>Estado</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($area->nameArea); ?></td>
                        <td><?php echo e($area->bossArea); ?></td>
                        <td><?php echo e($area->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="updateAreass(<?php echo e($area->idAreas); ?>)"><i
                                class="fas fa-edit"></i></button>
                            
                            <?php if($area->status == 1): ?>
                            <a href="/area/estado/<?php echo e($area->idAreas); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i class="fas fa-exchange-alt">
                                </i></a>
                            <?php else: ?>
                            <a href="/area/estado/<?php echo e($area->idAreas); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i class="fas fa-exchange-alt">
                                </i></a>
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
</div>
<?php $__env->stopSection(); ?>

<script>
        function addAreas()
        {
            $('#modal_areas').modal();            
        }
</script>

<script>

function updateAreass(idArea)
{
    $.get("<?php echo e(url('area')); ?>" + '/' + idArea + '/show' ,(data)=>{
        console.log(data.nameArea)
     $("#txt_idareas").val(data.idAreas)
     $("#nameAre").val(data.nameArea);
     $("#bossAre").val(data.bossArea);
     $('#modal_editar').modal(idArea);
    })
    
}
</script>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>