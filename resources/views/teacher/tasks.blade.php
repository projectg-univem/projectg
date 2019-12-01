@extends('layouts.teacher')

@section('pageTitle', 'Tarefas')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Painel do Professor</a></li>
    <li class="breadcrumb-item active" aria-current="page">Trabalhos</li>
@endsection

@section('content')
    <div class="col-xl-12 mb-5 mt-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Trabalhos por turma</h3>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Trabalho</th>
                        <th scope="col">Turma</th>
                        <th scope="col">Nº Grupos</th>
                        <th scope="col">Qtde de Alunos Grupo</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><a href="{{ route('get.teacher.getTaskModelo') }}">Árvore B*</a></th>
                            <td>BCC 6 S/A</td>
                            <td>5</td>
                            <td>5</td>
                            <td class="text-success">Ativo</td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="{{ route('get.teacher.getTaskModelo') }}">Estrutura de Dados</a></th>
                            <td>BSI 2 S/A</td>
                            <td>3</td>
                            <td>8</td>
                            <td class="text-success">Ativo</td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="{{ route('get.teacher.getTaskModelo') }}">Pilhas e Filas</a></th>
                            <td>BSI 4 S/A</td>
                            <td>4</td>
                            <td>5</td>
                            <td class="text-danger">Encerrado</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
