@extends('layouts.teacher')

@section('pageTitle', 'Dúvidas')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Painel do Professor</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dúvidas de Alunos</li>
@endsection

@section('content')
    <div class="col-xl-12 mb-5 mt-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Mensagens</h3>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start py-4 px-4">
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <div class="d-flex w-100 align-items-center">
                                    <img src="{{ asset('assets/img/theme/team-1.jpg') }}" alt="William Pires"
                                         class="avatar avatar-xs mr-2">
                                    <h5 class="mb-1">William Pires</h5>
                                    <span class="badge badge-info ml-3">Nova mensagem</span>
                                </div>
                            </div>
                            <small>Há 2 horas</small>
                        </div>
                        <h4 class="mt-3 mb-1"><span class="text-info">●</span> Professor me socorre!</h4>
                        <p class="text-sm mb-0">Não achei nada sobre o assunto, posso entregar o trabalho na próxima semana?.</p>
                        <div class="mt-3 mb-10">
                                <button class="btn btn-primary">Abrir Mensagem</button>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start py-4 px-4">
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <div class="d-flex w-100 align-items-center">
                                    <img src="{{ asset('assets/img/theme/team-5.jpg') }}" alt="Bruno Costa"
                                         class="avatar avatar-xs mr-2">
                                    <h5 class="mb-1">Bruno Costa</h5>
                                </div>
                            </div>
                            <small>Há 3 dias</small>
                        </div>
                        <h4 class="mt-3 mb-1"> Trabalho finalizado!</h4>
                        <p class="text-sm mb-0">A entrega é via moodle ou email?</p>
                        <div class="mt-3 mb-10">
                                <button class="btn btn-primary">Abrir Mensagem</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
