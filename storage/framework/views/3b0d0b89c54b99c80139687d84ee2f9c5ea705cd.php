 

<?php $__env->startSection('contenido'); ?>


<div class="col-12 stretch-card">
    <div class="card" style="border-radius:20px">
        <div class="card-body">
            <button id="" class="btn btn-success btn-fw" onclick="addHolidays()" title="Añadir un nuevo tipo de documento"> Añadir vacaciones <i class="fas fa-plus-circle"></i></button><br><br>
            <?php if(session()->has('alert')): ?>
            <?php else: ?>
            <h3><?php echo e(session('alert')); ?></h3>
            <h4 class="card-title">Lista de vacaciones </h4>
            <h4></h4>
            <table class="table table-bordered" id="tableBonus">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha fin</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $holidays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->descriptionHolidays); ?></td>
                        <td><?php echo e($item->dateStart); ?></td>
                        <td><?php echo e($item->dateEnd); ?></td>
                        <td><?php echo e($item->status==1?"Activo":"Inactivo"); ?></td>
                        <td>
                            <button class="btn btn-icons btn-rounded btn-outline-info" onclick="editHolidays(<?php echo e($item->idHolidays); ?>)" title="Editar"><i
                                class="fas fa-edit"></i></button>

                            <?php if($item->status==1): ?>
                            <a href="/holidays/estado/<?php echo e($item->idHolidays); ?>/0" class="btn btn-icons btn-rounded btn-outline-danger" title="Inactivar" style="border-radius:20px"><i
                            class="fas fa-exchange-alt"></i></a>

                            <?php else: ?>
                            <a href="/holidays/estado/<?php echo e($item->idHolidays); ?>/1" class="btn btn-icons btn-rounded btn-outline-success" title="Activar" style="border-radius:20px"><i
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
<?php echo $__env->make('holidays.mdl_holidays', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('holidays.mdl_holidays_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<script>
    function addHolidays(){
        $("#modal_holidays").modal();
    }
</script>

<script>
    function editHolidays(id){
        $.get("<?php echo e(url('holidays')); ?>" + '/' + id + '/show', (data)=>{
            $("#idHolidays").val(data.idHolidays);
            $("#descriptionHolidays_edit").val(data.descriptionHolidays);
            $("#dateStart_edit").val(data.dateStart);
            $("#dateEnd_edit").val(data.dateEnd);
        })
        $("#modal_holidays_edit").modal();
    }
</script>

<script>
    function validateDate(date){
        var days = 16;
        var valueDate = $("#dateStart").val();
        var getDate = new Date(valueDate);
        // var month = ("0" + (getDate.getMonth() + 2)).slice(-2);
        getDate.setDate(getDate.getDate() + days);

        var formatDate = (getDate.getFullYear()) + '/' + (getDate.getMonth()+1) +  '/' + getDate.getDate();
        alert(formatDate);
        $("#dateEnd").val(formatDate);
    }
</script>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>