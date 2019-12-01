@extends('layouts.login')

@section('userType', 'Aluno')

@section('content')
    <form role="form" method="post" action="{{ route('login') }}">
        @csrf
        <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input class="form-control" name="ra" placeholder="RA" type="text" minlength="6" maxlength="6">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input class="form-control" name="password" placeholder="Senha" type="password" maxlength="4">
            </div>
        </div>

        @if ($errors->any())
            <div class="font-italic text-danger"><small><span class="font-weight-700">Erro! </span> Dados de acesso inválidos.</small></div>
        @endif

        <div class="text-center">
            <button type="submit" class="btn btn-primary my-4">Entrar</button>
        </div>
    </form>
  @endsection
