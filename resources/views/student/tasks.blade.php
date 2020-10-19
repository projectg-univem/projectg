@extends('layouts.student')

@section('content')

<div class="container-fluid">
	<div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
            	<div class="row">
            	<div class="col-md-10">
            	        <h3 class="mb-0">Lista de Missões</h3>
            	</div>
<!--             	<div class="col-md-2">
            	        <button class="btn btn-success">Adicionar Time</button>
            	</div> -->
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Matéria</th>
                  	<th scope="col">Missão</th>
                    <th scope="col">Status</th>
                    <th scope="col">Time</th>
                    <th scope="col">Andamento</th>
                    <th scope="col">Data de inicio</th>
                    <th scope="col">Data de fim</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
              		<tr>
	                    <td class="table-actions">
	                    	<span class="mb-0 text-sm">Estrutura de dados</span>
	                	</td>
	                    <td scope="row">
	                      <div class="media align-items-center">
	                        <a href="#" class="avatar rounded-circle mr-3">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/icones/png/066-treasure.png')}}">
	                        </a>
	                        <div class="media-body">
	                        	<a href="{{ route('get.student.taskGrupo') }}">
	                          		<span class="mb-0 text-sm"> Arvore B*</span>
	                      		</a>
	                        </div>
	                      </div>
	                    </td>
	                    <td>
	                      <span class="badge badge-dot mr-4">
	                        <i class="bg-warning"></i> pendente
	                      </span>
	                    </td>
                    	<td>
	                    <div class="avatar-group">
	                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4-1.jpg') }}" class="rounded-circle">
	                        </a>
	                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-1.jpg') }}" class="rounded-circle">
	                        </a>
	                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}" class="rounded-circle">
	                        </a>
	                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-3-800x800.jpg') }}" class="rounded-circle">
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
	                	<td>
	                		01/10/2019
	                	</td>
	                	<td>
	                		11/10/2019
	                	</td>
                  </tr>
                  <tr>
              		    <td class="table-actions">
              		    	<span class="mb-0 text-sm">Computação gráfica</span>
              			</td>
	                    <td scope="row">
	                      <div class="media align-items-center">
	                        <a href="#" class="avatar rounded-circle mr-3">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/icones/png/066-treasure.png')}}">
	                        </a>
	                        <div class="media-body">
	                        	<a href="{{ route('get.student.taskGrupo') }}">
	                          		<span class="mb-0 text-sm">Implementar Bezier</span>
	                      		</a>
	                        </div>
	                      </div>
	                    </td>
	                    <td>
	                    	<span class="badge badge-dot">
	                       		<i class="bg-success"></i> completed
                      		</span>                
                    	</td>
	                    	<td>
	                      <div class="avatar-group">
	                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4-1.jpg') }}" class="rounded-circle">
	                        </a>
	                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-1.jpg') }}" class="rounded-circle">
	                        </a>
	                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}" class="rounded-circle">
	                        </a>
	                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
	                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-3-800x800.jpg') }}" class="rounded-circle">
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
	                	<td>
	                		09/08/2019
	                	</td>
	                	<td>
	                		22/08/2019
	                	</td>
	                    <td class="table-actions">
		                  	
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
    </div>
@endsection
