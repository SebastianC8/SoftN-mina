<?php $__env->startSection('contenido'); ?>

<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de Empresas </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Empresa</th>
                        <th>Documento de Identificación</th>
                        <th>Código</th>
                        <th>Imagen</th>
                        <th>N° de Empleados</th>
                        <th>Tamaño de la compañía</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->companyName); ?></td>
                        <td><?php echo e($item->descriptionDocument); ?></td>
                        <td><?php echo e($item->codeCompany); ?></td>
                        <td><img src="<?php echo e(Storage::url($item->imgCompany)); ?>"></td>
                        <td><?php echo e($item->numberEmployees); ?></td>
                        <td><?php if($item->sizeCompany == 0): ?>
                            Microempresa
                            <?php endif; ?>
                            <?php if($item->sizeCompany == 1): ?>
                            Pequeña empresa
                            <?php endif; ?>
                            <?php if($item->sizeCompany == 2): ?>
                            Mediana empresa
                            <?php endif; ?>
                            <?php if($item->sizeCompany == 3): ?>
                            Macroempresa
                            <?php endif; ?>
                        </td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" title="Editar" style="border-radius:20px" onclick="editCompany(<?php echo e($item->idCompany); ?>)"><i
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

<?php echo $__env->make('company.mdl_company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<script>
    function editCompany(id)
    {
        $.get("<?php echo e(url('company')); ?>" + '/' + id + '/show', (data)=>{
            var img = data.imgCompany;
            $("#mdl_idCompany").val(data.idCompany);
            $("#mdl_documentType").val(data.documentType_id);
            $("#mdl_codCompany").val(data.codeCompany);
            // $("#img_company").attr("src", function(){
            //     return "<?php echo e(Storage::url("+img+")); ?>";
            // });
            $("#mdl_nameCommission").val(data.companyName);
            $("#mdl_numberEmployees").val(data.numberEmployees);
            if(data.sizeCompany==0){
                $("#mdl_sizeCompany").val("Microempresa");
            }else if(data.sizeCompany==1){
                $("#mdl_sizeCompany").val("Pequeña empresa");
            }else if(data.sizeCompany==2){
                $("#mdl_sizeCompany").val("Mediana empresa");
            }else if(data.sizeCompany==3){
                $("#mdl_sizeCompany").val("Macroempresa");
            }
            $("#mdl_sizeCompanyDB").val(data.sizeCompany);
        })
        $('#modal_company').modal();
    }
</script>

<script>
    function calculateValue(value){
        var data=[];
        if(value < 10){
            data.push('Microempresa',0)
            $("#mdl_sizeCompany").val(data[0]);
            $("#mdl_sizeCompanyDB").val(data[1])
        }
        else if(value >= 10 && value < 50){
            data.push('Pequeña empresa',1)
            $("#mdl_sizeCompany").val(data[0]);
            $("#mdl_sizeCompanyDB").val(data[1])
        }
        else if(value >= 50 && value < 250){
            data.push('Mediana empresa',2)
            $("#mdl_sizeCompany").val(data[0]);
            $("#mdl_sizeCompanyDB").val(data[1])
        }
        else if(value >= 250){
            data.push('Macroempresa',3)
            $("#mdl_sizeCompany").val(data[0]);
            $("#mdl_sizeCompanyDB").val(data[1])
        }
    }
</script>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>