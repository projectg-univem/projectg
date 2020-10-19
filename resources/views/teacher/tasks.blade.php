@extends('layouts.teacher')

@section('pageTitle', 'Trabalhos')

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
                        <div class="row">
                            <div class="col-md-10">   
                                <h3 class="mb-0">Listagem de trabalhos</h3>
                            </div>
                             <div class="col-md-2 pb-3 text-right">
                                <button type="button" onclick="window.location='{{ route('get.teacher.getTaskCreate') }}'" class="btn btn-success">Criar trabalho</button>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-1">
                        <div class="row">
                            <div class="col-md-12">   
                                <h3 class="mb-0">Filtro:</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="pb-2">
                                <h4 class="mb-0 pb-2">
                                  <a>Matéria</a>
                                </h4>
                              <select id="materia" class="form-control pb-2" data-toggle="select">
                                <option>Estrutura de dados</option>
                                <option>Algoritmos</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="pb-2">
                              <h4 class="mb-0 pb-2 pl-3">
                                <a>Data de inicio</a>
                              </h4>
                              <div class="col-md-12">
                                <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="pb-2">
                              <h4 class="mb-0 pb-2 pl-3">
                                <a>Data de fim</a>
                              </h4>
                              <div class="col-md-12">
                                <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="pb-2">
                                <h4 class="mb-0 pb-2">
                                  <a>Status</a>
                                </h4>
                              <select id="status" class="form-control pb-2" data-toggle="select">
                                <option>Ativo</option>
                                <option>Encerrado</option>
                              </select>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-2">
                            <h4 class="mb-0 pb-4">
                              <a></a>
                            </h4>
                             <div class="pb-3 text-right">
                                <button type="button" onclick="window.location='{{ route('get.teacher.getTaskCreate') }}'" class="btn btn-info">Filtrar</button>
                             </div>
                       
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Trabalho</th>
                        <th scope="col">Matéria</th>
                        <th scope="col">Turma</th>
                        <th scope="col">Nº de Grupos</th>
                        <th scope="col">Qtde de Alunos Grupo</th>
                        <th scope="col">Data de inicio</th>
                        <th scope="col">Data de fim</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><a href="{{ route('get.teacher.getTaskModelo') }}">Árvore B*</a></th>
                            <td>Estrutura de dados</td>
                            <td>BCC 6 S/A</td>
                            <td>5</td>
                            <td>5</td>
                            <td>10/10/2020</td>
                            <td>30/11/2020</td>
                            <td class="text-success">Ativo</td>
                            <td>
                                <a href="{{ route('get.teacher.tasks') }}" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="{{ route('get.teacher.getTaskModelo') }}">Sistema de biblioteca em C</a></th>
                            <td>Algoritmos</td>
                            <td>BSI 2 S/A</td>
                            <td>10</td>
                            <td>3</td>
                            <td>12/10/2020</td>
                            <td>12/11/2020</td>
                            <td class="text-success">Ativo</td>
                            <td>
                                <a href="{{ route('get.teacher.tasks') }}" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="{{ route('get.teacher.getTaskModelo') }}">Pilhas e Filas</a></th>
                            <td>Estrutura de dados</td>
                            <td>BSI 4 S/A</td>
                            <td>4</td>
                            <td>5</td>
                            <td>02/09/2020</td>
                            <td>15/10/2020</td>
                            <td class="text-danger">Encerrado</td>
                            <td>
                                <a href="{{ route('get.teacher.tasks') }}" class="btn btn-sm btn-primary" disabled>Editar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
