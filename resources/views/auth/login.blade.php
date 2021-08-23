@extends('layouts.app')
@section('titulo', 'Login')
@section('content')

    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <div>
        <img class="center" src="{{asset('images/bg-header.png')}}" width="100%" height="200px"
             style="margin-top: -25px; margin-bottom: 0px">
        <img class="center" src="{{asset('images/prefeitura2.png')}}" width="50%" height="160px"
             style="margin-top: -140px">
    </div>
    <div class="container-fluid" style="width: 55%; height: 500px; background-color: white; margin-top: 20px;padding: 0 20px 20px 0; border-radius: 15px;
overflow: hidden; box-shadow: -1px 4px 17px -5px rgba(0,0,0,0.64);
-webkit-box-shadow: -1px 4px 17px -5px rgba(0,0,0,0.64);
-moz-box-shadow: -1px 4px 17px -5px rgba(0,0,0,0.64);">
        <div class="container-fluid">
            <div class="row" style="padding: 0px">
                <div class="col-sm-8 " style="margin-right: 30px; margin-left: 0px; padding: 0px;">
                    <div style="margin-left: 30px; margin-right: 30px;">
                        <img class="center" src="{{asset('images/atencao_basica.png')}}" width="160px" height="160px"
                             style="margin-top: 15%; margin-bottom: 10px">
                        <h3 style="text-align: center; font-family: 'Arial'; font-size: 23px; font-weight: bolder;margin-bottom: 30px">
                            INDICADORES</h3>
                        <h4 style="text-align: center; color: grey">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.
                            Sed sodales, nisi non pharetra gravida, risus nisl fringilla
                            ligula, sed laoreet diam dui nec ipsum. Nulla maximus
                            tristique leo, id interdum ex sagittis sed.</h4>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-right: -100px; ">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                            </button> {{ Session::get('message', '') }}
                        </div>
                    @endif
                    <div style="margin-top: 60px; margin-bottom: 20px; text-align: center">
                        <h4 style="font-family: Arial"><b>Olá, Seja Bem Vindo(a)!</b></h4>
                    </div>

                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}"
                          style="width: 100%; ">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="email" class="control-label"
                                   style="font-family: 'Arial'; color: black; font-size: 20px; margin-bottom: 0px">E-mail</label>
                            <input id="email" type="email" name="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{ old('email') }}"
                                   style="padding: 0; color: black;"
                                   required autocomplete="email" autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                            <label for="password" class="control-label"
                                   style="font-family: 'Arial'; color: black; font-size: 20px;margin-bottom: 0px; margin-top: 10px">Senha</label>
                            <input id="password" type="password" name="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   style="padding: 0; color: black;"
                                   required autocomplete="current-password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-check">
                            <input class="form-control-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Lembrar senha') }}
                            </label>
                        </div>
                        <br>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success btn-block">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                        <div class="form-group col-md-12">
                            <center>
                                <a class=" btn-link" href="{{ route('password.request') }}">Esqueceu sua senha ?</a>
                            </center>
                            <hr style="margin-top: 0; margin-bottom: 0">
                            <span style="margin-top: 0">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit.</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
