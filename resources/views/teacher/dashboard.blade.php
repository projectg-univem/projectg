@extends('layouts.teacher')

@section('pageTitle', 'Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Painel do Professor</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection

@section('content')
    <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Desempenho geral de alunos</h5>
                        <span class="h2 font-weight-bold mb-0">BOM</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Desde o último mês</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">TRABALHOS PENDENTES</h5>
                        <span class="h2 font-weight-bold mb-0">MÉDIO</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Desde semana passada</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">DÚVIDAS RECEBIDAS</h5>
                        <span class="h2 font-weight-bold mb-0">2</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                            <i class="fas fa-question-circle"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Desde ontem</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">INDICE SENTIMENTAL</h5>
                        <span class="h2 font-weight-bold mb-0">POSITIVO</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                            <i class="fa fa-smile"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Desde o último mês</span>
                </p>
            </div>
        </div>
    </div>

    <div class="col-xl-12 mb-5 mt-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Trabalhos Ativos</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('get.teacher.tasks') }}" class="btn btn-sm btn-primary">Ver todos</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Trabalho</th>
                            <th scope="col">Nº Grupos</th>
                            <th scope="col">Qtde de Alunos Grupo</th>
                            <th scope="col">Turma</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Árvore B*</th>
                            <td>5</td>
                            <td>5</td>
                            <td>BCC 6 S/A</td>
                        </tr>
                        <tr>
                            <th scope="row">Estrutura de Dados</th>
                            <td>3</td>
                            <td>8</td>
                            <td>BSI 2 S/A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
