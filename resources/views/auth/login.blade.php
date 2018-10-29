@extends('layouts.app')
@section('content')
      
<br>
<div class="container" id="principalLogin">
    <div class="row justify-content-center">
        <div class="">
            <div class="card text-center" style="width: 25rem; height: 23rem;box-shadow: 1px 1px 15px #b5b5b5;">                
                <div class="card-header text-center lead" style="color:white; background:#304a65">{{ __('Software de nómina') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input placeholder="Correo electrónico" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12" style="text-align: center">
                                <input id="password" placeholder="Contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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

                        
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-block " id="botonIngresar">
                                    {{ __('Ingresar') }}
                                </button>
                                <br>
                                <a class="btn btn-link" href="{{ route('password.request') }}" id="Olvidocontraseña">
                                    {{ __('¿Olvidó la contraseña?') }}
                        
                                </a>
                            </div>
                        </div>

                        <div class="atras" style="background: white;position: absolute;z-index: -1;top: 341px;bottom: 0;width: 100%; height: 170px;"></div>

                    </form>
                </div>
            </div>
        {{-- </div> --}}
    </div>
</div>
@endsection
