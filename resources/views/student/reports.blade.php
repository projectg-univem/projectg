@extends('layouts.student')

@section('pageTitle', 'Relatórios')

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12">
			<div class="card">
				<div class="card-header">
				  <h6 class="surtitle">Mapa</h6>
				  <h5 class="h3 mb-0">Os desafios te esperam durante essa jornada!</h5>
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

	</div>
	<div class="row">
		<div class="col-xl-6">
			<div class="card">
				<div class="card-header">
				  <h6 class="surtitle">Visão geral</h6>
				  <h5 class="h3 mb-0">Escalada pela liderança</h5>
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
				</div>
				<div class="card-body">
					<div class="card">
					    <div class="card-body">
					        <div class="chart">
	        					<canvas id="chart-orders" class="chart-canvas"></canvas>
				        	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="card">
				<div class="card-header">
				  <h6 class="surtitle">Visão geral</h6>
				  <h5 class="h3 mb-0">Escalada pela habilidade</h5>
				</div>
				<div class="card-body">
					<div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div>
					<div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
					<canvas id="chart-colaboration" class="chart-canvas chartjs-render-monitor" width="457" height="350" style="display: block; width: 457px; height: 350px;"></canvas>
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
  <script src="../assets/js/demo.min.js"></script>
</body>

</html>
@endsection