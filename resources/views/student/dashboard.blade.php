@extends('layouts.student')

@section('content')
<div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Liderança</h5>
                        <span class="h2 font-weight-bold mb-0">LV. 22</span>
                    </div>
                    <div class="col">
                        <div class="rounded-circle">
							<img class="w-50 mx-auto float-right" src="{{ asset('assets/img/icones/png/039-level-2.png')}}">
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                    <span class="text-nowrap">Barra de level</span>
                </p>
                <div class="progress progress-xs mb-0">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Habilidade</h5>
                        <span class="h2 font-weight-bold mb-0">LV. 10</span>
                    </div>
                    <div class="col">
                        <div class="rounded-circle">
							<img class="w-50 mx-auto float-right" src="{{ asset('assets/img/icones/png/009-crossing-swords.png')}}">
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                    <span class="text-nowrap">Barra de level</span>
                </p>
                <div class="progress progress-xs mb-0">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Amigável</h5>
                        <span class="h2 font-weight-bold mb-0">LV. 15</span>
                    </div>
                    <div class="col">
                        <div class="rounded-circle">
							<img class="w-50 mx-auto float-right" src="{{ asset('assets/img/icones/png/001-action.png')}}">
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                    <span class="text-nowrap">Barra de level</span>
                </p>
                <div class="progress progress-xs mb-0">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Dedicação</h5>
                        <span class="h2 font-weight-bold mb-0">LV. 22</span>
                    </div>
                    <div class="col">
                        <div class="rounded-circle">
							<img class="w-50 mx-auto float-right" src="{{ asset('assets/img/icones/png/068-trophy.png')}}">
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                    <span class="text-nowrap">Barra de level</span>
                </p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                    </div>
            </div>
        </div>
    </div>

    <div class="col-xl-9 mb-5 mt-5 mb-xl-0">
       <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Lista de atividades</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Trabalho</th>
                    <th scope="col">Status</th>
                    <th scope="col">Time</th>
                    <th scope="col">Andamento</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
              		<tr>
	                    <th scope="row">
	                      <div class="media align-items-center">
	                        <a href="#" class="avatar rounded-circle mr-3">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/bootstrap.jpg')}}">
	                        </a>
	                        <div class="media-body">
	                        	<a href="{{ route('get.teacher.getTaskGrupo') }}">
	                          		<span class="mb-0 text-sm">Trabalho x</span>
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
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-5-800x800.jpg')}}" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-2-800x800.jpg')}}" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-3-800x800.jpg')}}" class="rounded-circle">
                        </a>
                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ted Mosby">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4-800x800.jpg')}}" class="rounded-circle">
                        </a>
                      </div>
	                    </td>
	                    <td>
	                    	<div class="d-flex align-items-center">
		                        <span class="mr-2">60%</span>
		                        <div>
		                          <div class="progress">
		                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
		                          </div>
		                        </div>
		                     </div>
		                 </td>
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
                  	<tr>
	                    <th scope="row">
	                      <div class="media align-items-center">
	                        <a href="#" class="avatar rounded-circle mr-3">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/bootstrap.jpg')}}">
	                        </a>
	                        <div class="media-body">
	                        	<a href="{{ route('get.teacher.getTaskGrupo') }}">
	                          		<span class="mb-0 text-sm">Trabalho x</span>
	                      		</a>
	                        </div>
	                      </div>
	                    </th>
	                    <td>
	                    	<span class="badge badge-dot">
	                       		<i class="bg-danger"></i> Atrasado
                      		</span>                
                    	</td>
	                    	<td>
	                    		<div class="avatar-group">
	                    		  <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
	                    		    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-5-800x800.jpg')}}" class="rounded-circle">
	                    		  </a>
	                    		  <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
	                    		    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-2-800x800.jpg')}}" class="rounded-circle">
	                    		  </a>
	                    		  <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
	                    		    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-3-800x800.jpg')}}" class="rounded-circle">
	                    		  </a>
	                    		  <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ted Mosby">
	                    		    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4-800x800.jpg')}}" class="rounded-circle">
	                    		  </a>
	                    		</div>
	                    	</td>
	                    	<td>
		                      <div class="d-flex align-items-center">
		                        <span class="mr-2">72%</span>
		                        <div>
		                          <div class="progress">
		                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
		                          </div>
		                        </div>
		                      </div>
	                    	</td>
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
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/bootstrap.jpg')}}">
                        </a>
                        <div class="media-body">
                        	<a href="{{ route('get.teacher.getTaskGrupo') }}">
                          		<span class="mb-0 text-sm">Trabalho x</span>
                      		</a>
                        </div>
                      </div>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i> Completo
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
		                      <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
		                        <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-5-800x800.jpg')}}" class="rounded-circle">
		                      </a>
		                      <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
		                        <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-2-800x800.jpg')}}" class="rounded-circle">
		                      </a>
		                      <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
		                        <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-3-800x800.jpg')}}" class="rounded-circle">
		                      </a>
		                      <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ted Mosby">
		                        <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4-800x800.jpg')}}" class="rounded-circle">
		                      </a>
		                    </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">100%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
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
<div class="col-xl-3 mb-5 mt-5 mb-xl-0">
	<div class="card">
    <!-- Card header -->
    <div class="card-header">
      <!-- Title -->
      <h5 class="h3 mb-0">Ultimas notificações</h5>
    </div>
    <!-- Card body -->
    <div class="card-body">
      <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
        <div class="timeline-block">
          <span class="timeline-step badge-success">
            <i class="ni ni-bell-55"></i>
          </span>
          <div class="timeline-content">
            <div class="d-flex justify-content-between pt-1">
              <div>
                <span class="text-muted text-sm font-weight-bold">Nova Mensagem</span>
              </div>
              <div class="text-right">
                <small class="text-muted"><i class="fas fa-clock mr-1"></i>2 hrs atrás</small>
              </div>
            </div>
            <h6 class="text-sm mt-1 mb-0">Amizade é um reflexo involuntário. Simplesmente acontece. Você não pode controlar.</h6>
          </div>
        </div>
        <div class="timeline-block">
          <span class="timeline-step badge-danger">
            <i class="ni ni-html5"></i>
          </span>
          <div class="timeline-content">
            <div class="d-flex justify-content-between pt-1">
              <div>
                <span class="text-muted text-sm font-weight-bold">Alteração</span>
              </div>
              <div class="text-right">
                <small class="text-muted"><i class="fas fa-clock mr-1"></i>3 hrs atrás</small>
              </div>
            </div>
            <h6 class="text-sm mt-1 mb-0">Uma nova alteração foi realizada.</h6>
          </div>
        </div>
        <div class="timeline-block">
          <span class="timeline-step badge-info">
            <i class="ni ni-like-2"></i>
          </span>
          <div class="timeline-content">
            <div class="d-flex justify-content-between pt-1">
              <div>
                <span class="text-muted text-sm font-weight-bold">Aprovado</span>
              </div>
              <div class="text-right">
                <small class="text-muted"><i class="fas fa-clock mr-1"></i>5 hrs atrás</small>
              </div>
            </div>
            <h6 class="text-sm mt-1 mb-0">O conteúdo encaminhado foi aprovado.</h6>
          </div>
        </div>
      </div>
    </div>
  </div>	
</div>
    
@endsection