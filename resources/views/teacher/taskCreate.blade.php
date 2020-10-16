@extends('layouts.teacher')

@section('content')

<div class="container-fluid">
  <h6 class="heading-small text-muted mb-4">Grupo Amazonia</h6>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">Parametros da Tarefa</h5>
            </div>
            <!-- Card search -->
            <div class="card-header py-0">
              <!-- Search form -->
              <!-- <form>
                <div class="form-group mb-0">
                  <div class="input-group input-group-lg input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="fas fa-search"></span>
                      </div>
                    </div>
                    <input type="search" class="form-control" placeholder="Search">
                  </div>
                </div>
              </form> -->
            </div>
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
              <ul class="list-group list-group-flush list my--3">
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                      <div class="col ml--2 pb-2">
                        <h4 class="mb-0 pb-2">
                          <a>Turma</a>
                        </h4>
                        <form>
                          <select id="turma" class="form-control pb-2" data-toggle="select">
                            <option>Individual</option>
                            <option>Em grupo</option>
                          </select>
                        </form>
                        <h4 class="mb-0 pb-2">
                          <a>Tipo de divisão</a>
                        </h4>
                        <form>
                          <select id="tipoDivisao" class="form-control pb-2" data-toggle="select">
                            <option>Individual</option>
                            <option>Em grupo</option>
                          </select>
                        </form>
                        <form>
                        <h4 class="mb-0 pb-2">
                          <a>Gerar grupos aleatoriamente?</a>
                        </h4>
                        <label class="custom-toggle">
                          <input type="checkbox" checked>
                          <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
                        </label>
                     
                      <div class="row input-daterange datepicker align-items-center">
                        <div class="col">
                          <div class="form-group">
                            <label class="form-control-label">Data inicio</label>
                            <input class="form-control" placeholder="Start date" type="text" value="06/18/2018">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label class="form-control-label">Data fim</label>
                            <input class="form-control" placeholder="End date" type="text" value="06/22/2018">
                          </div>
                        </div>
                      </div>
                       </div>
<!--                       <label class="custom-toggle">
                        <input type="checkbox">
                        <span class="custom-toggle-slider rounded-circle"></span>
                      </label>
                      
                       -->
                    </form>
                  </div>
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('assets/img/team/time_4.png') }}">
                      </a>
                    </div>
                    <div class="col ml--2">
                      <h4 class="mb-0">
                        <a href="#!">Alex Smith</a>
                      </h4>
                      <span class="text-warning">●</span>
                      <small>Ocupado</small>
                    </div>
<!--                     <div class="col-auto">
                      <button type="button" class="btn btn-sm btn-primary">Enviar Mensagem</button>
                    </div> -->
                  </div>
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('assets/img/team/time_1.png') }}">
                      </a>
                    </div>
                    <div class="col ml--2">
                      <h4 class="mb-0">
                        <a href="#!">John Ruppert</a>
                      </h4>
                      <span class="text-success">●</span>
                      <small>Online</small>
                    </div>
<!--                     <div class="col-auto">
                      <button type="button" class="btn btn-sm btn-primary">Enviar Mensagem</button>
                    </div> -->
                  </div>
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('assets/img/team/time_3.png') }}">
                      </a>
                    </div>
                    <div class="col ml--2">
                      <h4 class="mb-0">
                        <a href="#!">Jeff Snow</a>
                      </h4>
                      <span class="text-success">●</span>
                      <small>Online</small>
                    </div>
<!--                     <div class="col-auto">
                      <button type="button" class="btn btn-sm btn-primary">Enviar Mensagem</button>
                    </div> -->
                  </div>
                </li>
              </ul>
          </div>
          </div>
    </div>
      
      <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">



          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <h3 class="h3 mb-0">Estrutura de dados > Arvore B* > <span class="text-primary">Informações sobre o trabalho</span></h3>
            </div>
          </div>
<!--           <div class="col-md-8 col-7">
                      
            <h4 class="h3 mb-0"><span class="text-primary">CheckPoints da missão </span></h4>

            <div class="progress">
              <div class="progress-bar">
                <div class="progress-bar-fill-area"></div>
                <div class="progress-indicator"></div>
              </div>
            </div>
          </div> -->

          <div class="col-md-9 col-7" style="padding: 35px;">
            <strong>Implementação da Árvore B</strong>
            <br>
            <br>
                  O objetivo do trabalho é a implementação das rotinas de manipulação de uma árvore B de ordem k. O trabalho deve ter uma biblioteca e duas aplicações.
                  Biblioteca:
                  <br>  <br>
                  A biblioteca do trabalho deve ter as definições de uma árvore B de ordem k (de k-1 a 2k-1 chaves - de k a 2k filhos) que armazene números inteiros (2 por registro, um como chave e o outro como campo) e as funções de busca e inserção.
                  <br><br>
                  A ordem da árvore (k) deve ser um parâmetro. Este parâmetro pode ter um valor máximo, entretanto, este valor máximo não pode ser inferior a 20.
                  <br><br>
                  A biblioteca deve tratar a árvore B em disco e usar a memória principal apenas para armazenar as "páginas" que estiverem em uso.
                  <br><br>
          </div>
          <div class="col-md-3 col-7"  style="padding: 35px;">
            <button class="btn btn-primary">Baixar documento</button>
          </div>
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <div class="row">
                <div class="col-lg-10 col-7">
                  <h5 class="h3 mb-0">Lista de afazeres</h5>
                </div>
                <div class="col-lg-2 col-7">
                  <button class="btn btn-primary">Adicionar</button>
                </div>
            </div>
            <!-- Card body -->
            <div class="card-body p-0">
              <!-- List group -->
              <ul class="list-group list-group-flush" data-toggle="checklist">
                <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                  <div class="checklist-item checklist-item-success checklist-item-checked">
                    <div class="checklist-info">
                      <h5 class="checklist-title mb-0">Pesquisar assunto</h5>
                      <small>10:30 AM</small>
                    </div>
                    <div>
                      <div class="custom-control custom-checkbox custom-checkbox-success">
                        <input class="custom-control-input" id="chk-todo-task-1" type="checkbox" checked="">
                        <label class="custom-control-label" for="chk-todo-task-1"></label>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                  <div class="checklist-item checklist-item-warning">
                    <div class="checklist-info">
                      <h5 class="checklist-title mb-0">Definir funções</h5>
                      <small>10:30 AM</small>
                    </div>
                    <div>
                      <div class="custom-control custom-checkbox custom-checkbox-warning">
                        <input class="custom-control-input" id="chk-todo-task-2" type="checkbox">
                        <label class="custom-control-label" for="chk-todo-task-2"></label>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                  <div class="checklist-item checklist-item-info">
                    <div class="checklist-info">
                      <h5 class="checklist-title mb-0">Implementar</h5>
                      <small>10:30 AM</small>
                    </div>
                    <div>
                      <div class="custom-control custom-checkbox custom-checkbox-info">
                        <input class="custom-control-input" id="chk-todo-task-3" type="checkbox">
                        <label class="custom-control-label" for="chk-todo-task-3"></label>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                  <div class="checklist-item checklist-item-danger checklist-item-checked">
                    <div class="checklist-info">
                      <h5 class="checklist-title mb-0">Unir com partes dos outros membros do grupo</h5>
                      <small>10:30 AM</small>
                    </div>
                    <div>
                      <div class="custom-control custom-checkbox custom-checkbox-danger">
                        <input class="custom-control-input" id="chk-todo-task-4" type="checkbox" checked="">
                        <label class="custom-control-label" for="chk-todo-task-4"></label>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                  <div class="checklist-item checklist-item-success checklist-item-checked">
                    <div class="checklist-info">
                      <h5 class="checklist-title mb-0">Testar</h5>
                      <small>10:30 AM</small>
                    </div>
                    <div>
                      <div class="custom-control custom-checkbox custom-checkbox-success">
                        <input class="custom-control-input" id="chk-todo-task-5" type="checkbox" checked="">
                        <label class="custom-control-label" for="chk-todo-task-5"></label>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            
<!--             <div class="progress-wrapper">
              <div class="progress-info">
                <div class="progress-label">
                  <span>Meu progresso no trabalho </span>
                </div>
                <div class="progress-percentage">
                  <span>60%</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
              </div>
            </div> -->

            <div class="progress-wrapper">
              <div class="progress-info">
                <div class="progress-label">
                  <span>Progresso do time na missão</span>
                </div>
                <div class="progress-percentage">
                  <span>60%</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
              </div>
            </div>

          </div>
           
        </div>
           <div class="col-md-8 col-7"  style="padding-bottom: 20px;">
          <div class="form-group">
            <label for="exampleFormControlFile1">Selecionar arquivo</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
           </div>
          <div class="col-md-4 col-7"  style="padding-bottom: 20px;">
             <button type="button" class="btn btn-success">Finalizar</button>
          </div>
      </div>
    </div>
  </div>

@endsection
