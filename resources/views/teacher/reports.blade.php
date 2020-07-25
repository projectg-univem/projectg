@extends('layouts.teacher')

@section('pageTitle', 'Relatórios')

@section('content')
<div class="container-fluid">
		<div class="col-xl-12">
	<div class="row">
		<div class="col-xl-3 col-lg-6">
		    <div class="card card-stats mb-4 mb-xl-0">
		        <div class="card-body">
		            <div class="row">
		                <div class="col">
		                    <h5 class="card-title text-uppercase text-muted mb-0">Desempenho geral de alunos</h5>
		                    <span class="h2 font-weight-bold mb-0">BOM</span>
		                </div>
		                <div class="col-auto">
		                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
		                        <i class="fas fa-chart-line"></i>
		                    </div>
		                </div>
		            </div>
		            <p class="mt-3 mb-0 text-muted text-sm">
		                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
		                <span class="text-nowrap">Desde o último mês</span>
		            </p>
		        </div>
		    </div>
		</div>
		<div class="col-xl-3 col-lg-6">
		    <div class="card card-stats mb-4 mb-xl-0">
		        <div class="card-body">
		            <div class="row">
		                <div class="col">
		                    <h5 class="card-title text-uppercase text-muted mb-0">TRABALHOS PENDENTES</h5>
		                    <span class="h2 font-weight-bold mb-0">MÉDIO</span>
		                </div>
		                <div class="col-auto">
		                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
		                        <i class="fas fa-clock"></i>
		                    </div>
		                </div>
		            </div>
		            <p class="mt-3 mb-0 text-muted text-sm">
		                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
		                <span class="text-nowrap">Desde semana passada</span>
		            </p>
		        </div>
		    </div>
		</div>
		<div class="col-xl-3 col-lg-6">
		    <div class="card card-stats mb-4 mb-xl-0">
		        <div class="card-body">
		            <div class="row">
		                <div class="col">
		                    <h5 class="card-title text-uppercase text-muted mb-0">DÚVIDAS RECEBIDAS</h5>
		                    <span class="h2 font-weight-bold mb-0">2</span>
		                </div>
		                <div class="col-auto">
		                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
		                        <i class="fas fa-question-circle"></i>
		                    </div>
		                </div>
		            </div>
		            <p class="mt-3 mb-0 text-muted text-sm">
		                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
		                <span class="text-nowrap">Desde ontem</span>
		            </p>
		        </div>
		    </div>
		</div>
		<div class="col-xl-3 col-lg-6">
		    <div class="card card-stats mb-4 mb-xl-0">
		        <div class="card-body">
		            <div class="row">
		                <div class="col">
		                    <h5 class="card-title text-uppercase text-muted mb-0">INDICE EMOCIONAL</h5>
		                    <span class="h2 font-weight-bold mb-0">MÉDIO</span>
		                </div>
		                <div class="col-auto">
		                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
		                        <i class="fa fa-smile"></i>
		                    </div>
		                </div>
		            </div>
		            <p class="mt-3 mb-0 text-muted text-sm">
		                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
		                <span class="text-nowrap">Desde o último mês</span>
		            </p>
		        </div>
		    </div>
		</div></div>
	</div><br>
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
        	<div class="row">
        	<div class="col-md-10">
        	        <h3 class="mb-0">Listagem de Grupos</h3>
        	        <p class="text-sm mb-0">
        	          Aqui você pode visualizar a lista de todos os grupos existentes. 
        	        </p>
        	</div>

          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Grupo</th>
              	<th scope="col">Trabalho</th>
                <th scope="col">Time</th>
                <th scope="col">Turma</th>
                <th scope="col">Data Criação</th>
              </tr>
            </thead>
            <tbody>
          		<tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                        	<a href="{{ route('get.student.taskGrupo') }}">
                          		<span class="mb-0 text-sm">Time X</span>
                      		</a>
                        </div>
                      </div>
                    </th>
          			<th> Arvore B* </th>
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
               		BCC 7A-S - Noturno
               		</td>
                	<td>
                		01/10/2019
                	</td>
              </tr>
              <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                        	<a href="{{ route('get.student.taskGrupo') }}">
                          		<span class="mb-0 text-sm">Time Z</span>
                      		</a>
                        </div>
                      </div>
                    </th>
              		<th scope="row"> Implementar Bezier </th>

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
                    	
                	</td>
                	                    <td>
               		BCC 7A-S - Noturno
               		</td>
                	<td>
                		09/08/2019
                	</td>                	

              </tr>
              <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                        	<a href="{{ route('get.student.taskGrupo') }}">
                          		<span class="mb-0 text-sm">Time W</span>
                      		</a>
                        </div>
                      </div>
                    </th>
              		<th scope="row"> Perceptron </th>
                  
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
                    	
                	</td>
                	                    <td>
               		BCC 7A-S - Noturno
               		</td>
                	<td>
                		02/10/2019
                	</td>


              </tr>
              <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                        	<a href="{{ route('get.student.taskGrupo') }}">
                          		<span class="mb-0 text-sm">Time Y</span>
                      		</a>
                        </div>
                      </div>
                    </th>
              		<th scope="row"> Diagramas de classe </th>
                    
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
                    	
                	</td>
                	                    <td>
               		BCC 7A-S - Noturno
               		</td>
                	<td>
                		08/09/2019
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
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Listagem de alunos</h3>
          <p class="text-sm mb-0">
            Aqui você pode visualizar a lista de todos os seus alunos. 
          </p>
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th>Nome</th>
                <th>RA</th>
                <th>Turma</th>
                <th>Idade</th>
                <th>Desempenho</th>
                <th>Detalhes</th>
              </tr>
            </thead>
            <tfoot>
               <tr>
                <th>Nome</th>
                <th>RA</th>
                <th>Turma</th>
                <th>Idade</th>
                <th>Desempenho</th>
                <th>Detalhes</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>5713649</td>
                <td>BCC 7A-S - Noturno</td>
                <td>21</td>
                <td>Bom</td>
                <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>5713649</td>
                <td>BCC 7A-S - Noturno</td>
                <td>23</td>
                <td>Bom</td>
                <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>5713654</td>
                <td>BCC 7A-S - Noturno</td>
                <td>19</td>
                <td>Bom</td>
               <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>54651987</td>
                <td>BCC 7A-S - Noturno</td>
                <td>22</td>
                <td>Bom</td>
               <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Airi Satou</td>
                <td>5462198</td>
                <td>BCC 7A-S - Noturno</td>
                <td>23</td>
                <td>Bom</td>
                <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Brielle Williamson</td>
                <td>5932168</td>
                <td>BCC 7A-S - Noturno</td>
                <td>21</td>
                <td>Bom</td>
               <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Herrod Chandler</td>
                <td>5321698</td>
                <td>BCC 7A-S - Noturno</td>
                <td>19</td>
                <td>Bom</td>
                <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Rhona Davidson</td>
                <td>50210988</td>
                <td>BCC 7A-S - Noturno</td>
                <td>25</td>
                <td>Bom</td>
                <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Colleen Hurst</td>
                <td>532109849</td>
                <td>BCC 7A-S - Noturno</td>
                <td>19</td>
                <td>Bom</td>
               <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Sonya Frost</td>
                <td>50670806</td>
                <td>BCC 7A-S - Noturno</td>
                <td>23</td>
                <td>Bom</td>
                <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Jena Gaines</td>
                <td>51026390</td>
                <td>BCC 7A-S - Noturno</td>
                <td>20</td>
                <td>Bom</td>
               <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Quinn Flynn</td>
                <td>1650854</td>
                <td>BCC 7A-S - Noturno</td>
                <td>22</td>
                <td>Bom</td>
                <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Charde Marshall</td>
                <td>5016081</td>
                <td>BCC 7A-S - Noturno</td>
                <td>26</td>
                <td>Bom</td>
               <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Haley Kennedy</td>
                <td>54216879</td>
                <td>BCC 7A-S - Noturno</td>
                <td>23</td>
                <td>Bom</td>
               <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>5321689878</td>
                <td>BCC 7A-S - Noturno</td>
                <td>19</td>
                <td>Bom</td>
               <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Michael Silva</td>
                <td>51326898</td>
                <td>BCC 7A-S - Noturno</td>
                <td>26</td>
                <td>Bom</td>
                <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Paul Byrd</td>
                <td>5132165</td>
                <td>BCC 7A-S - Noturno</td>
                <td>24</td>
                <td>Bom</td>
               <td><i class="fa fa-plus" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Gloria Little</td>
                <td>57984621</td>
                <td>BCC 7A-S - Noturno</td>
                <td>19</td>
                <td>Bom</td>
                <td><i class="fa fa-plus" aria-hidden="true"></i></td>
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

  <script src="../../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>	
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../assets/js/demo.min.js"></script>
</body>

</html>
@endsection