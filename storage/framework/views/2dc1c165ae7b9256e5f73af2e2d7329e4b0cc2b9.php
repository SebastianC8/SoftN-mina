<?php $__env->startSection('content'); ?>
      
<br>
<div class="container" id="principalLogin">
    <div class="row justify-content-center">
        <div class="">
            <div class="card text-center" style="width: 25rem; height: 23rem;box-shadow: 1px 1px 15px #b5b5b5;">                
                <div class="card-header text-center lead" style="color:white; background:#304a65"><?php echo e(__('Software de nómina')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>" aria-label="<?php echo e(__('Login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input placeholder="Correo electrónico" id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12" style="text-align: center">
                                <input id="password" placeholder="Contraseña" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    

                                    <label class="form-check-label" for="remember">
                                        
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-block " id="botonIngresar">
                                    <?php echo e(__('Ingresar')); ?>

                                </button>
                                <br>
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>" id="Olvidocontraseña">
                                    <?php echo e(__('¿Olvidó la contraseña?')); ?>

                        
                                </a>
                            </div>
                        </div>

                        <div class="atras" style="background: white;position: absolute;z-index: -1;top: 341px;bottom: 0;width: 100%; height: 170px;"></div>

                    </form>
                </div>
            </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>