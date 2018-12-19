<?php $__env->startSection('content'); ?>



<body>           
    <div id="body" style="background-image:url('plantilla/images/auth/hola.jpg') !important;
    background-size: cover;
    width:100%;
    height:100vh;">         
        <br>
        <div class="container" id="principalLogin">
            <div class="row justify-content-center">
                <div class="">
                    <div class="card text-center" style="width: 25rem; height: 23rem;box-shadow: 1px 1px 15px #b5b5b5;border-radius: 15px;" >        
                        <br>
                        <h3 class="login" style="height:54px;color:black; font-family: roboto; font-size:20pt; ;"><i class="fas fa-user-tie"></i>  INICIAR SESIÓN</h3>                     
                            
                            <div class="card-body">
                                <form method="POST" action="<?php echo e(route('login')); ?>" aria-label="<?php echo e(__('Login')); ?>" onsubmit="validarCorreo()" id="Ologin">
                                        <?php echo csrf_field(); ?>  
                                                                                                                                                        
                                        <div class="form-group row">                                            
                                            <div class="col-md-12">
                                                <input placeholder="Correo electrónico" id="email" type="" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>"  autofocus>                                                
                                                <?php if($errors->has('email')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>                                        
                                        <div class="form-group row">
                                            <div class="col-md-12" style="text-align: center;height:11px">
                                                    <input id="password" placeholder="Contraseña" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" >
                                                    
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
                                                                <br>                        
                                            <div class="form-group">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="botonIngresar" style="font-size:16px">
                                                        <?php echo e(__('Ingresar')); ?>

                                                    </button>
                                                    <a class="btn btn-secondary btn-lg btn-block" href="<?php echo e(route('register')); ?>" id="Olvidocontraseñ" style="font-size:16px">
                                                            <?php echo e(__('Regístrarse')); ?>                        
                                                        </a> 
                                                                                                                                                                                            
                                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>" id="Olvidocontraseña">
                                                            <?php echo e(__('¿Olvidó la contraseña?')); ?>                                                                                                                                     
                                                        </a> 
                                                                                                            
                                                        </div>
                                                    </div>                      
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <?php if($errors->any()): ?>
                        <div><?php echo e($errors); ?></div>
                            <?php endif; ?>
                            </body>  
                            <?php $__env->stopSection(); ?>


<script>   
   $("#Ologin").validate({
        rules: {
            email: {
                required: true,
                          
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: "specify email"
            },
            password: {
                required: "specify password"
            }
        }
    });

});
</script>


<script>
$("#botonIngresar").submit(function validarCorreo() {  
    if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {  
        alert("El correo electrónico no parece estar");  
        return false;  
    }  
    return false;  
});
</script>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>