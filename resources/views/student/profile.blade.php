@extends('layouts.student')

@section('content')

        <div class="row">
          <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
              <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                    <a href="#">
                      <img src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
               <!-- <div class="d-flex justify-content-between">
                  <a href="#" class="btn btn-sm btn-info mr-4">Conectar</a>
                  <a href="#" class="btn btn-sm btn-default float-right">Mensagem</a>
                </div> -->
              </div>
              <div class="card-body pt-0 pt-md-7">
                <div class="text-center">
                  <h3>
                    Ted Mosby<span class="font-weight-light">, 21</span>
                  </h3>
                  <h4>
                    CASA: <span class="font-weight-light">Desbravadores</span>
                  </h4>
                  <div>
                    <i class="ni education_hat mr-2"></i>Aluno - Ciência da Computação
                  </div>
                  <hr class="my-4"/>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="d-flex justify-content-center">
                        <img class="w-30 img-fluid" src="../assets/img/theme/Accolade.png">
                    </div>
                    <div class="d-flex justify-content-center">
                        <span class="text-center font-weight-bold">Elite 2</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="d-flex justify-content-center">
                      <table >
                        <div class="align-items-center">
                          <span class="mr-9">72%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" 
                                  aria-valuemax="100" style="width: 72%;"></div>
                            </div>
                          </div>
                        </div>
                      </table>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="row">
                  <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center">
                      <div>
                        <a href="#" class="btn-icon">
                          <span class=""><img class="w-75" src="../assets/img/icones/png/039-level-2.png"></span>
                        </a>
                        <span class="description">Liderança</span>
                        <span class="heading">Lv. 22</span>
                      </div>
                      <div>
                        <a href="#" class="btn-icon">
                          <span class=""><img class="w-75 rounded-circle" src="../assets/img/icones/png/009-crossing-swords.png"></span>
                        </a>
                        <span class="description">Habilidade</span>
                        <span class="heading">Lv. 10</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <a href="#" class="btn-icon">
                        <span class=""><img class="w-75" src="../assets/img/icones/png/001-action.png"></span>
                      </a>
                      <span class="description">Amigável</span>
                      <span class="heading">Lv. 15</span>
                    </div>
                    <div>
                      <a href="#" class="btn-icon">
                        <span class=""><img class="w-75" src="../assets/img/icones/png/068-trophy.png"></span>
                      </a>
                      <span class="description">Dedicação</span>
                      <span class="heading">Lv. 22</span>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">Minha conta</h3>
                  </div>
                  <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Configurações</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form>
                  <h6 class="heading-small text-muted mb-4">Informação do usuário</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Apelido</label>
                          <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="ted.mosby">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Email</label>
                          <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="mosby@example.com">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-first-name">Primeiro Nome</label>
                          <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Primeiro nome" value="Ted">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-last-name">Sobrenome</label>
                          <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Sobrenome" value="Mosby">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4" />
                  <!-- Address -->

                  <!-- Description -->
                  <h6 class="heading-small text-muted mb-4">Minha história</h6>
                  <div class="pl-lg-4">
                    <div class="form-group">
                      <label>Minha história</label>
                      <textarea rows="4" class="form-control form-control-alternative" placeholder="Algumas palavras sobre você ...">
                        
                      </textarea>
                    </div>
                  </div>

                </form>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="h3 mb-0">Comentários</h5>
              </div>
                <!-- Comments -->
                <div class="mb-1">
                  <div class="media media-comment">
                    <img alt="Image placeholder" class="avatar avatar-lg media-comment-avatar rounded-circle" src="../../assets/img/theme/team-1.jpg">
                    <div class="media-body">
                      <div class="media-comment-text">
                        <h6 class="h5 mt-0">Michael Lewis</h6>
                        <p class="text-sm lh-160">Amizade é um reflexo involuntário. Simplesmente acontece. Você não pode controlar.</p>
                      </div>
                    </div>
                  </div>
                  <div class="media media-comment">
                    <img alt="Image placeholder" class="avatar avatar-lg media-comment-avatar rounded-circle" src="../../assets/img/theme/team-2-800x800.jpg">
                    <div class="media-body">
                      <div class="media-comment-text">
                        <h6 class="h5 mt-0">Jessica Stones</h6>
                        <p class="text-sm lh-160">Não irrite o universo, o universo irá te estapear.</p>
                      </div>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection