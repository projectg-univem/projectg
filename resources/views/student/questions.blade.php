@extends('layouts.student')

@section('pageTitle', 'Dúvidas')

@section('content')
	<div class="container-fluid">
		<div class="row">
	        <div class="col">
	          <div class="card shadow">
	            <div class="card-header border-0">
	              <h3 class="mb-0">Dúvidas</h3>
	              	<div class="card-header bg-white border-0">
	              		<div class="row align-items-center">
	              			<div class="col-8">
	              				<div class="row">
	              					<div class="col-2">
	              						<span class="avatar avatar-sm rounded-circle">
	                                			<img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg">
	                             			</span>
	              					</div>

	              					<div class="row">
	              					  <div class="col-md-2">
	              					  <h4 class="mb-0">Assunto:</h4>
	              					   	</div>
	              					  <div class="col-md-6">
	              					    <div class="form-group">
	              					      <input type="email" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="Assunto">
	              					    </div>
	              					  </div>
	              						<div class="col-md-1">
	              						      <h4 class="mb-0">Para: </h4>
	              						  </div>
	              						  <div class="col-md-2">
	              						    <div class="dropdown">
	              						      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              						        Fulano de tal
	              						      </button>
	              						      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	              						        <a class="dropdown-item" href="#">Tal do Fulano</a>
	              						        <a class="dropdown-item" href="#">Fulano de Tal</a>
	              						      </div>
	              						    </div>
	              						</div>
	              					<div class="col-md-12">
	              						<div class="form-group focused">
	              						    <textarea rows="4" class="form-control form-control-alternative" placeholder="Escreva aqui sua dúvida..."></textarea>
	              					 	</div>
	              	 				 		<button class="btn btn-success">Enviar</button>
	              					 </div>
	              				</div>
	              		 	</div>
	              		</div>
	              	</div>
	            </div>
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


	              				<th>Fulano de Tal</th>


       	
       	
	                    		<th>Ola, isso mesmo siga os passos abaixo para que possa dar continuidade no trabal...</th>

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
	    </div>
	
@endsection
