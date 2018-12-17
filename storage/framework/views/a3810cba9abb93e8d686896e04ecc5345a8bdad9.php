<?php $__env->startSection('contenido'); ?>

<?php echo $__env->make('layoffs.CreateLayoffs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('commission.ModalCommissionEdit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addLayoffs()"> Añadir cesantías <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de cesantías </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableCesantias">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php endif; ?>


</div>
<?php $__env->stopSection(); ?>

<script>
    function addLayoffs(){
        $('#addLayoffst').modal();
    }
</script>

<script>
    function editCommissions(id)
    {
        $.get("<?php echo e(url('commissions')); ?>" + '/' + id + '/show', (data)=>{
            $("#idCommission_mdl").val(data.idCommissions);
            $("#nameComissionMdl").val(data.nameCommission);
            $('#modal_commissionsEdit').modal();
        })
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>