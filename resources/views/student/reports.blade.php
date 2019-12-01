@extends('layouts.student')

@section('content')


  <div class="container-fluid">

<div class="row">
	<div class="col-xl-6">
		<div class="card">
			<div class="card-header">
			  <h6 class="surtitle">Overview</h6>
			  <h5 class="h3 mb-0">Escalada pela liderança</h5>
			</div>
			<div class="card-body">
				<div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
				<canvas id="chart-leader" class="chart-canvas chartjs-render-monitor" width="457" height="350" style="display: block; width: 457px; height: 350px;"></canvas>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-6">
		<div class="card">
			<div class="card-header">
			  <h6 class="surtitle">Overview</h6>
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
			  <h6 class="surtitle">Overview</h6>
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
			  <h6 class="surtitle">Overview</h6>
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