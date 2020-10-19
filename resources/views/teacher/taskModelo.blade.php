@extends('layouts.teacher')

@section('pageTitle', 'Grupos do Trabalho')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Painel do Professor</a></li>
    <li class="breadcrumb-item active" aria-current="page">Grupos do Trabalho</li>
@endsection

@section('content')
    <div class="col-xl-12 mb-5 mt-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-md-11">

                                    <h3 class="mb-0">Detalhes do trabalho > <span class="text-primary">Árvore B*</span></h3>
                            </div>
                            <div class="col-md-1">
                                    <button type="button" class="btn btn-primary">Editar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="col-xl-2">
                                <h3 class="mb-0">  Título:</h3><br>
                            </div>
                            <div class="col-md-3">
                                  <div class="form-group">
                                    <input type="text" placeholder="Árvore B*" class="form-control" disabled />
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <h3 class="mb-0">  Arquivo:</h3>
                            </div>
                            <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="exampleFormControlFile1"></label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                  </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-xl-12">
                        <form>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write a large text here ...">Implementação da Árvore B

                            O objetivo do trabalho é a implementação das rotinas de manipulação de uma árvore B de ordem k. O trabalho deve ter uma biblioteca e duas aplicações.
                            Biblioteca:

                            A biblioteca do trabalho deve ter as definições de uma árvore B de ordem k (de k-1 a 2k-1 chaves - de k a 2k filhos) que armazene números inteiros (2 por registro, um como chave e o outro como campo) e as funções de busca e inserção.

                            A ordem da árvore (k) deve ser um parâmetro. Este parâmetro pode ter um valor máximo, entretanto, este valor máximo não pode ser inferior a 20.

                            A biblioteca deve tratar a árvore B em disco e usar a memória principal apenas para armazenar as "páginas" que estiverem em uso.

                            A biblioteca deve conter procedimentos com a seguinte interface (podendo mudar de uma linguagem para outra):

                                createbtree(int k, FILE *f) --> btree* - cria uma árvore B de ordem k no arquivo f e retorna um ponteiro para a estrutura;

                                insert(btree T, int key, int reg) --> int - insere um par (chave,registro) na árvore T, retornando se a operação deu certo;

                                search(btree T, int key) --> int - busca pela chave key e retorna o registro encontrado ou -1 se não encontrar. 

                            Aplicações:</textarea>
                        </form>
                    </div>
                </br>
                    <div class="col-xl-12" style="padding-bottom: 25px;"></br>

                    <button type="button" class="btn btn-success">Enviar</button>
                    </br>

                    </div>
 
                </div>
                    <div class="card-footer py-4">
                    </div>
                </div>
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Grupos Cadastrados no Trabalho > <span class="text-primary">Árvore B*</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Grupo</th>
                        <th scope="col">Status</th>
                        <th scope="col">Time</th>
                        <th scope="col">Atividade</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/bootstrap.jpg') }}">
                                </a>
                                <div class="media-body">
                                    <a href="{{ route('get.teacher.getTaskGrupo') }}">
                                        <span class="mb-0 text-sm">Time 1</span>
                                    </a>
                                </div>
                            </div>
                        </th>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i> Pendente
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Ryan Tompson">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Romina Hadid">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Alexander Smith">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Jessica Doe">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2">60%</span>
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <!-- </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip"
                               data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip"
                               data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td> -->
                        <td>
                          <a href="{{ route('get.teacher.getTaskEvaluate') }}" class="btn btn-sm btn-default">Avaliar</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/bootstrap.jpg') }}">
                                </a>
                                <div class="media-body">
                                    <a href="{{ route('get.teacher.getTaskGrupo') }}">
                                        <span class="mb-0 text-sm">Time 2</span>
                                    </a>
                                </div>
                            </div>
                        </th>
                        <td>
	                    	<span class="badge badge-dot">
	                       		<i class="bg-success"></i> Finalizado
                      		</span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Ryan Tompson">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Romina Hadid">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Alexander Smith">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Jessica Doe">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2">100%</span>
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </td>
                        <!-- <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip"
                               data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip"
                               data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td> -->
                        <td>
                          <a href="{{ route('get.teacher.getTaskEvaluate') }}" class="btn btn-sm btn-default">Avaliar</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/bootstrap.jpg') }}">
                                </a>
                                <div class="media-body">
                                    <a href="{{ route('get.teacher.getTaskGrupo') }}">
                                        <span class="mb-0 text-sm">Time 3</span>
                                    </a>
                                </div>
                            </div>
                        </th>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i> Finalizado
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Ryan Tompson">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Romina Hadid">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Alexander Smith">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip"
                                   data-original-title="Jessica Doe">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}"
                                         class="rounded-circle">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="mr-2">100%</span>
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </td>
<!--                         <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip"
                               data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip"
                               data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td> -->
                        <td>
                          <a href="{{ route('get.teacher.getTaskEvaluate') }}" class="btn btn-sm btn-default">Avaliar</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer py-4">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="fas fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
