@extends('layouts.app')

@section('content')

<div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Inicio</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Reportes</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-6">
          <!--* Card header *-->
          <!--* Card body *-->
          <!--* Card init *-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Surtitle -->
              <h6 class="surtitle">Eje</h6>
              <!-- Title -->
              <h5 class="h3 mb-0">Cumplimiento de Objetivo Estrategico</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-bars" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6">
                <!--* Card header *-->
                <!--* Card body *-->
                <!--* Card init *-->
                <div class="card">
                  <!-- Card header -->
                  <div class="card-header">
                    <!-- Surtitle -->
                    <h6 class="surtitle">Indicadores</h6>
                    <!-- Title -->
                    <h5 class="h3 mb-0">Cumplimiento del Objetivo Estrategico</h5>
                  </div>
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="chart">
                      <!-- Chart wrapper -->
                      <canvas id="chart-pie" class="chart-canvas"></canvas>
                    </div>
                  </div>
                </div>
              </div>
      </div>
      <div class="row">
        <div class="col-xl-6">
          <!--* Card header *-->
          <!--* Card body *-->
          <!--* Card init *-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Surtitle -->
              <h6 class="surtitle">Crecimiento</h6>
              <!-- Title -->
              <h5 class="h3 mb-0">Cumplimiento del Objetivo Estrategico</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-points" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <!--* Card header *-->
          <!--* Card body *-->
          <!--* Card init *-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Surtitle -->
              <h6 class="surtitle">Usuarios</h6>
              <!-- Title -->
              <h5 class="h3 mb-0">Cumplimiento del Objetivo Estrategico</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-doughnut" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6">
          <!--* Card header *-->
          <!--* Card body *-->
          <!--* Card init *-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Surtitle -->
              <h6 class="surtitle">Vista Global</h6>
              <!-- Title -->
              <h5 class="h3 mb-0">Cumplimiento del Objetivo Estrategico</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-bar-stacked" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection