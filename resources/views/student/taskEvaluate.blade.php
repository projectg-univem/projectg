@extends('layouts.student')

@section('pageTitle', 'Avaliação do trabalho')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Painel do Aluno</a></li>
    <li class="breadcrumb-item active" aria-current="page">Avaliação do trabalho</li>
@endsection

@section('content')

<div class="container-fluid">
  <h6 class="heading-small text-muted mb-4"></h6>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">Histórico de atividades</h5>
            </div>
            <!-- Card search -->
            <!--<div class="card-header py-0">
              <form>
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
              </form>
            </div> -->
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
              <!-- List group -->
              <ul class="list-group list-group-flush" data-toggle="checklist">
                <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                  <div class="checklist-item checklist-item-success checklist-item-checked">
                    <div class="checklist-info">
                      <h5 class="checklist-title mb-0">Pesquisar assunto</h5>
                      <small>10/10/2020 - Por: Romina Hadid</small>
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
                      <small>08/10/2020 - Por: Romina Hadid</small>
                    </div>
                    <div>
                      <div class="custom-control custom-checkbox custom-checkbox-warning">
                        <input class="custom-control-input" id="chk-todo-task-2" type="checkbox" checked="">
                        <label class="custom-control-label" for="chk-todo-task-2"></label>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                  <div class="checklist-item checklist-item-info">
                    <div class="checklist-info">
                      <h5 class="checklist-title mb-0">Implementar</h5>
                      <small>10/10/2020 - Por: Ryan Tompson</small>
                    </div>
                    <div>
                      <div class="custom-control custom-checkbox custom-checkbox-info">
                        <input class="custom-control-input" id="chk-todo-task-3" type="checkbox" checked="">
                        <label class="custom-control-label" for="chk-todo-task-3"></label>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                  <div class="checklist-item checklist-item-danger checklist-item-checked">
                    <div class="checklist-info">
                      <h5 class="checklist-title mb-0">Unir com partes dos outros membros do grupo</h5>
                      <small>11/10/2020 - Por: Alexander Smith</small>
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
                      <small>12/10/2020 - Por: Jessica Doe</small>
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
    </div>
    
    <div class="col-xl-8 order-xl-1">
      <!-- Card header -->
      <div class="card-header border-0">
        <div class="row">
          <div class="col-6">
            <h3 class="mb-0">Avaliar grupo</h3>
          </div>

        </div>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        <table class="table align-items-center table-flush table-striped">
          <thead class="thead-light">
            <tr>
              <th>Integrantes</th>
              <th>Liderança</th>
              <th>Habilidade</th>
              <th>Colaboração</th>
              <th>Dedicação</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-user">
                <img src="../../assets/img/theme/team-4.jpg" class="avatar rounded-circle mr-3">
                <b>John Michael</b>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-user">
                <img src="../../assets/img/theme/img-1-1000x900.jpg" class="avatar rounded-circle mr-3">
                <b>Alex Smith</b>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-user">
                <img src="../../assets/img/theme/team-4-1 - Copia.jpg" class="avatar rounded-circle mr-3">
                <b>Samantha Ivy</b>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td class="table-user">
                <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                <b>John Michael</b>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>  
  </div>

<div class="card">
  <div class="card-header">
    <h5 class="h3 mb-0">Feedback da missão</h5>
  </div>
    <!-- Comments -->
    <div class="card-body">
      <form>
        <div class="form-group">
          <label class="form-control-label" for="exampleFormControlTextarea2"></label>
          <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" resize="none"></textarea>
        </div>
      </form>
    </div>
  <div class="card-footer py-4">
      <div class="col-md-12 text-right">
        <button class="btn btn-danger text-left">Salvar e Finalizar</button>
      </div>
  </div>
</div>

@endsection
