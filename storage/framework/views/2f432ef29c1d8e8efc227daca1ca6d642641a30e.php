<?php $__env->startSection('contenido'); ?>

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">

        <div class="card-body">
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de contratos</h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Tipo de contrato</th>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                        <th>Empresa</th>
                        <th>Archivo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $contract; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->descriptionContract); ?></td>
                        <td><?php echo e($item->descriptionType); ?></td>
                        <td><?php echo e($item->dateStart); ?></td>
                        <td><?php echo e($item->dateEnd); ?></td>
                        <td><?php echo e($item->companyName); ?></td>
                        <td>
                            <?php if($item->attachment_contract != ""): ?>
                            <a href="<?php echo e(Storage::url($item->attachment_contract)); ?>" title="Descargar contrato" download="contract"><i class="fas fa-file-word fa-2x fa-lg"></i>
                            <?php else: ?>
                            <span style="color:red">Este contrato no posee un archivo adjunto.</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-primary" title="Ver detalle" style="border-radius:20px" onclick="getContract(<?php echo e($item->idcontracts); ?>)"><i
                            class="fas fa-eye"></i></button>

                            
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
<?php echo $__env->make('contracts.mdl_contract', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('contracts.mdl_contract_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<script>
    function getContract(id){
        $.get("<?php echo e(url('contracts')); ?>" + '/' + id + '/show', (data)=>{
            console.log(data);
            $("#body_table_employees").empty();
            $("#body_table_employees").append("<tr><td>"+data.workDay+"</td><td>"+data.hoursDaily+" horas</td><td>"+data.nameJob+"</td><td>$"+data.ratesValue+"</td></tr>");
        })
        $("#modal_contracts").modal();
    }
</script>

<script>
    function editContract(){
        $("#modal_contract_edit").modal();
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>