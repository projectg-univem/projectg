@extends('layouts.teacher')

@section('pageTitle', 'Dúvidas')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Painel do Professor</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dúvidas de Alunos</li>
@endsection

@section('content')
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalmsg">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Detalhes da atividade</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="row">
                            <div class="d-flex w-100 justify-content-between">
                                <div>
                                    <div class="d-flex w-100 align-items-center">
                                        <img src="{{ asset('assets/img/theme/team-4.jpg') }}" alt=""
                                             class="avatar avatar-xs mr-2">
                                        <h5 class="mb-1">John Michael</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="row">
                                <h4 class="ml-2"><span class="text-info">●</span> Professor me socorre!</h4>
                            </div>
                                <p class="text-sm mb-0">Não achei nada sobre o assunto, posso entregar o trabalho na próxima semana?</p>
                                <br>
                                <br>
                            </div>
                            <!-- <div class="row"> -->
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <textarea rows="4" class="form-control form-control-alternative" placeholder="Escreva aqui sua mensagem..."></textarea>
                                    </div>
                                        <button class="btn btn-success">Enviar</button>
                                 </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
             </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>




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
                                    <img src="{{ asset('assets/img/theme/team-4.jpg') }}" alt="William Pires"
                                         class="avatar avatar-xs mr-2">
                                    <h5 class="mb-1">John Michael</h5>
                                    <span class="badge badge-info ml-3">Nova mensagem</span>
                                </div>
                            </div>
                            <small>Há 2 horas</small>
                        </div>
                        <h4 class="mt-3 mb-1"><span class="text-info">●</span> Professor me socorre!</h4>
                        <p class="text-sm mb-0">Não achei nada sobre o assunto, posso entregar o trabalho na próxima semana?.</p>
                        <div class="mt-3 mb-10">
                                <button class="btn btn-primary" onclick="openModalMsg()">Abrir Mensagem</button>
                        </div>
                    </a>
                   <!--  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start py-4 px-4">
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <div class="d-flex w-100 align-items-center">
                                    <img src="{{ asset('assets/img/theme/team-5.jpg') }}" alt="Bruno Costa"
                                         class="avatar avatar-xs mr-2">
                                    <h5 class="mb-1">Ryan Tompson</h5>
                                </div>
                            </div>
                            <small>Há 3 dias</small>
                        </div>
                        <h4 class="mt-3 mb-1"> Problema com a atividade!</h4>
                        <p class="text-sm mb-0"></p>
                        <div class="mt-3 mb-10">
                                <button class="btn btn-primary">Abrir Mensagem</button>
                        </div>
                    </a> -->
                </div>
            </div>

                        <div class="card-header border-0">
                        <div class="row">
                            <div class="col-md-2">
                            <h4 class="mb-0">Histórico:</h4>
                        </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">Status</th>
                                <th scope="col">De:   </th>
                                <th scope="col">Conteúdo</th>
                                <th scope="col">Data</th>
                                <th scope="col">Editar</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                      <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>Lida
                                      </span>
                                    </td>


                                        <th>Ryan Tompson</th>


                    
                    
                                        <th>Professor estou desesperado, estou com muita dificuldade em uma parte do trabalho, pode me tirar dúvidas?</th>

                                    <td>
                                        11/11/2019
                                    </td>

                                    <td class="table-actions">
                                        <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                            <i class="fas fa-trash"></i>
                                        </a>
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
    </div>
    <script type="text/javascript">

        function openModalMsg(){
            $('#modalmsg').modal('show');
        }

    </script>
@endsection
