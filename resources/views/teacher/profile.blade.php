@extends('layouts.teacher')

@section('pageTitle', 'Meu Perfil')

@section('content')
    <div class="col-xl-10 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Minha Conta</h3>
                    </div>
                    <div class="col-4 text-right">
                        <button id="formSubmit" class="d-none btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('put.teacher.profile') }}" class="teacherUpdate">
                    <input name="_method" type="hidden" value="PUT">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">INFORMAÇÕES DO USUÁRIO</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-ra">RA de Acesso</label>
                                    <input type="text" id="input-ra"
                                           class="form-control form-control-alternative"
                                           placeholder="{{ $user->ra }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Para receber notificações">Endereço de
                                        e-mail</label>
                                    <input type="email" id="input-email" name="email"
                                           class="form-control form-control-alternative"
                                           placeholder="{{ $user->email }}" maxlength="80" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4"/>
                    <h6 class="heading-small text-muted mb-4">ATUALIZAR SENHA DE ACESSO</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-current-pass">Senha Atual</label>
                                    <input type="password" id="input-current-pass" name="currentPass"
                                           class="form-control form-control-alternative"
                                           placeholder="****" maxlength="4" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-new-pass">Nova Senha</label>
                                    <input type="password" id="input-new-pass" name="newPass"
                                           class="form-control form-control-alternative"
                                           placeholder="****" maxlength="4" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        let btn = $('#openPerfil');
        let formSubmit = $('#formSubmit');

        btn.on('click', function () {
            formSubmit.removeClass('d-none');
            $('#input-email').prop('disabled', false);
            $('#input-current-pass').prop('disabled', false);
            $('#input-new-pass').prop('disabled', false);
        });

        formSubmit.on('click', function () {
            $('.teacherUpdate').submit();
        });
    </script>
@endsection
