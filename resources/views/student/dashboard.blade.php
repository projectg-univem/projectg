@extends('layouts.student')

@section('content')

<div class="container-fluid">
    <!-- Card stats -->
    <div class="row">
      <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Liderança</h5>
                <span class="h2 font-weight-bold mb-0">Lv. 0</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                  <i class="fas fa-chart-bar"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
              <span class="text-nowrap">Desde o último trabalho</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Habilidade</h5>
                <span class="h2 font-weight-bold mb-0">Lv. 0</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                  <i class="fas fa-chart-pie"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
              <span class="text-nowrap">Desde o último trabalho</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Companheirismo+</h5>
                <span class="h2 font-weight-bold mb-0">Lv. 0</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                  <i class="fas fa-users"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
              <span class="text-nowrap">Desde o último trabalho</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Dedicação</h5>
                <span class="h2 font-weight-bold mb-0">Lv. 0</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                  <i class="fas fa-percent"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
              <span class="text-nowrap">Desde o último trabalho</span>
            </p>
          </div>
      </div>
</div>

  <!-- Page content -->

 
 <!-- Table -->
 <div class="card-body">   
	<div class="row">
	  <div class="col">
	    <div class="card shadow">
		    <div class="card-header bg-transparent">
		        <h3 class="mb-0">Meus quadros</h3>
		 	</div>
		<div class="card-body">
			    <div class="table-responsive">
			        <!-- Projects table -->
		        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection