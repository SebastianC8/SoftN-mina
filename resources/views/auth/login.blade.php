@extends('layouts.app')
@section('content')



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
                                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" onsubmit="validarCorreo()" id="Ologin">
                                        @csrf  
                                                                                                                                                        
                                        <div class="form-group row">                                            
                                            <div class="col-md-12">
                                                <input placeholder="Correo electrónico" id="email" type="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autofocus>                                                
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>                                        
                                        <div class="form-group row">
                                            <div class="col-md-12" style="text-align: center;height:11px">
                                                    <input id="password" placeholder="Contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
                                                    
                                                    @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> --}}                                                        
                                                        <label class="form-check-label" for="remember">
                                                            {{-- {{ __('Remember Me') }} --}}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                                                <br>                        
                                            <div class="form-group">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="botonIngresar" style="font-size:16px">
                                                        {{ __('Ingresar') }}
                                                    </button>
                                                    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('register') }}" id="Olvidocontraseñ" style="font-size:16px">
                                                            {{ __('Regístrarse') }}                        
                                                        </a> 
                                                                                                                                                                                            
                                                    <a class="btn btn-link" href="{{ route('password.request') }}" id="Olvidocontraseña">
                                                            {{ __('¿Olvidó la contraseña?') }}                                                                                                                                     
                                                        </a> 
                                                                                                            
                                                        </div>
                                                    </div>                      
                                                </form>
                                            </div>
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>

                            @if($errors->any())
                        <div>{{ $errors }}</div>
                            @endif
                            </body>  
                            @endsection
{{-- 
<script>

function valida(f){
    
    var ok=true;
    var msg="Los campos no pueden estar vacios: \n";

    if(f.document.getElementById("email").value="")
    {
        msg+= "-Correo \n";
        ok=false;
    }
    if(f.document.getElementById("password").value="")
    {
        msg += "-Contraseña \n";
        ok = false;
    }
    if(ok == false)
    alert(msg);    
}
</script>  --}}

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