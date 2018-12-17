<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addDocumentType()" title="Añadir un nuevo tipo de documento"> Añadir tipo de documento <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de tipos de documento </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Dirigido a</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $documentTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->descriptionDocument); ?></td>
                        <td><?php echo e($item->codeDiferent==0?"Persona natural":"Empresas"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editDocumentType(<?php echo e($item->idDocumentType); ?>)" title="Editar"><i
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

<?php echo $__env->make('documentType.mdl_documentType', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('documentType.mdl_documentType_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


</div>
<?php $__env->stopSection(); ?>

<script>
    function addDocumentType(){
        $("#modal_documentType").modal();
    }
</script>

<script>
    function editDocumentType(id){
        $.get("<?php echo e(url('documentType')); ?>" + '/' + id + '/show', (data)=>{
            var value = data.codeDiferent;
            console.log(data)
            $("#idDocumentType_edit").val(data.idDocumentType);
            $("#descriptionDocument_edit").val(data.descriptionDocument);
            if(data.codeDiferent==0){
                document.getElementById("codeDiferent_edit").checked = true;
            }
            else if(data.codeDiferent==1){
                document.getElementById("codeDiferent_editE").checked = true;
            }
        })
        $("#modal_documentType_edit").modal();
    }
</script>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>