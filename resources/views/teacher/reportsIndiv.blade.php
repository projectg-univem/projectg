@extends('layouts.teacher')

@section('pageTitle', 'Relatório individual')

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12">
		    <div class="card card-stats mb-4 mb-xl-0">
		        <div class="card-body">
		            <div class="row">
		            	<div class="col-auto">
		            		<img src="../../assets/img/theme/team-1.jpg" alt="William Pires" class="avatar avatar-xs mr-2" style="width: 60px!important; height: 60px!important;">
		            	</div>
		                <div class="col">
		                    <h5 class="card-title text-uppercase text-muted mb-0">ALUNO&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RA&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TURMA</h5>
		                    <span class="h2 font-weight-bold mb-0">Ted Mosby&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span>
		                    <span class="h2 font-weight-bold mb-0">572489&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span>
		                    <span class="h2 font-weight-bold mb-0">BCC 7A-S</span>
		                </div>
		                
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-xl-3 col-lg-6">
		    <div class="card card-stats mb-4 mb-xl-0">
		        <div class="card-body">
		            <div class="row">
		                <div class="col">
		                    <h5 class="card-title text-uppercase text-muted mb-0">DESEMPENHO GERAL DO ALUNO</h5>
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
		                    <span class="h2 font-weight-bold mb-0">0</span>
		                </div>
		                <div class="col-auto">
		                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
		                        <i class="fas fa-clock"></i>
		                    </div>
		                </div>
		            </div>
		            <p class="mt-3 mb-0 text-muted text-sm">
		                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 100%</span>
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
		                    <h5 class="card-title text-uppercase text-muted mb-0">DÚVIDAS ENVIADAS</h5>
		                    <span class="h2 font-weight-bold mb-0">1</span>
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
		                    <h5 class="card-title text-uppercase text-muted mb-0">SENTIMENTAL</h5>
		                    <span class="h2 font-weight-bold mb-0">POSITIVO</span>
		                </div>
		                <div class="col-auto">
		                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
		                        <i class="fa fa-smile"></i>
		                    </div>
		                </div>
		            </div>
		            <p class="mt-3 mb-0 text-muted text-sm">
		                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 30%</span>
		                <span class="text-nowrap">Desde o último mês</span>
		            </p>
		        </div>
		    </div>
		</div>
	</div>
<br><br>
	<div class="row">
			<div class="col-xl-6">
				<div class="card">
					<div class="card-header">
						<h6 class="surtitle">Visão geral</h6>
						<h5 class="h3 mb-0">Escalada pela liderança</h5>
		                <div class="col">
			                    <div class="rounded-circle">
						            <img class="w-10 mx-auto float-right" src="{{ asset('assets/img/icones/png/039-level-2.png')}}">
			                    </div>
		                </div>
					</div>
					<div class="card-body">
						<div class="chart">
							<div class="chartjs-size-monitor">
								<div class="chartjs-size-monitor-expand">
									<div class="">
										
									</div>
								</div>
								<div class="chartjs-size-monitor-shrink">
									<div class="">
										
									</div>
								</div>
							</div>
						<canvas id="chart-sales" class="chart-canvas" width="457" height="350" style="display: block; width: 857px; height: 750px;"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="card">
					<div class="card-header">
					  <h6 class="surtitle">Visão geral</h6>
					  <h5 class="h3 mb-0">Escalada pela dedicação</h5>
	                  <div class="col">
		                    <div class="rounded-circle">
								<img class="w-10 mx-auto float-right" src="{{ asset('assets/img/icones/png/009-crossing-swords.png')}}">
		                    </div>
	                  </div>
					</div>
					<div class="card-body">
						<div class="chart">
							<div class="chartjs-size-monitor">
								<div class="chartjs-size-monitor-expand">
									<div class="">
									</div>
								</div>
								<div class="chartjs-size-monitor-shrink">
									<div class="">
										
									</div>
								</div>
							</div>
						<canvas id="chart-sales1" class="chart-canvas" width="457" height="350" style="display: block; width: 857px; height: 750px;"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6">
				<div class="card">
					<div class="card-header">
					  <h6 class="surtitle">Visão geral</h6>
					  <h5 class="h3 mb-0">Escalada pela colaboração</h5>
	                      <div class="col">
	                          <div class="rounded-circle">
	  							    <img class="w-10 mx-auto float-right" src="{{ asset('assets/img/icones/png/001-action.png')}}">
	                          </div>
	                      </div>
					</div>
					<div class="card-body">
						<div class="chart">
							<div class="chartjs-size-monitor">
								<div class="chartjs-size-monitor-expand">
									<div class="">
									</div>
								</div>
								<div class="chartjs-size-monitor-shrink">
									<div class="">
										
									</div>
								</div>
							</div>
						<canvas id="chart-sales3" class="chart-canvas" width="457" height="350" style="display: block; width: 857px; height: 750px;"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="card">
					<div class="card-header">
					  <h6 class="surtitle">Visão geral</h6>
					  <h5 class="h3 mb-0">Escalada pela habilidade</h5>
	                  <div class="col">
	                      <div class="rounded-circle">
								<img class="w-10 mx-auto float-right" src="{{ asset('assets/img/icones/png/068-trophy.png')}}">
	                      </div>
	                  </div>
					</div>
					<div class="card-body">
						<div class="chart">
							<div class="chartjs-size-monitor">
								<div class="chartjs-size-monitor-expand">
									<div class="">
									</div>
								</div>
								<div class="chartjs-size-monitor-shrink">
									<div class="">
										
									</div>
								</div>
							</div>
						<canvas id="chart-sales4" class="chart-canvas" width="457" height="350" style="display: block; width: 857px; height: 750px;"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		let step = 'step1';

		const step1 = document.getElementById('step1');
		const step2 = document.getElementById('step2');
		const step3 = document.getElementById('step3');
		const step4 = document.getElementById('step4');

		function next() {
		  if (step === 'step1') {
		    step = 'step2';
		    step1.classList.remove("is-active");
		    step1.classList.add("is-complete");
		    step2.classList.add("is-active");

		  } else if (step === 'step2') {
		    step = 'step3';
		    step2.classList.remove("is-active");
		    step2.classList.add("is-complete");
		    step3.classList.add("is-active");

		  } else if (step === 'step3') {
		    step = 'step4d';
		    step3.classList.remove("is-active");
		    step3.classList.add("is-complete");
		    step4.classList.add("is-active");

		  } else if (step === 'step4d') {
		    step = 'complete';
		    step4.classList.remove("is-active");
		    step4.classList.add("is-complete");

		  } else if (step === 'complete') {
		    step = 'step1';
		    step4.classList.remove("is-complete");
		    step3.classList.remove("is-complete");
		    step2.classList.remove("is-complete");
		    step1.classList.remove("is-complete");
		    step1.classList.add("is-active");
		  }
		}


	</script>
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
</body>

</html>
@endsection