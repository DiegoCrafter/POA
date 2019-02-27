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
                    <li class="breadcrumb-item"><a href="#">Indicadores de Plan Operativo Anual</a></li>
                  </ol>
                </nav>
              </div>
              @if(Auth::user()->hasRole('admin'))
              <div class="col-lg-6 col-5 text-right">
                <a data-toggle="modal" class="btn btn-sm btn-neutral" data-target="#modal-form">Nuevo Indicador</a>
                <a href="#" class="btn btn-sm btn-neutral">Filtros</a>
              </div>
              @endif
            </div>
            <!-- Card stats -->
          </div>
        </div>
</div>

<div class="container-fluid mt--6">
        <div class="row">
        <div class="col">
            @foreach($indicator as $ind)
        <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
        <div class="row align-items-center">
                <div class="col-8">
                
                  <h3 class="mb-0">{{$ind->indicator_name}}</h3> 
                </div>
                
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-form-action">Nueva Acción</a>
                </div>
                
              </div>
        </div>
        
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Acciones</th>
                <th scope="col" class="sort" data-sort="budget">Cantidad</th>
                <th scope="col">Responsable</th>
                <th scope="col" class="sort" data-sort="completion">Completado</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <th scope="row" >
                  <div class="media align-items-center">
                    <div class="media-body">
                      <p class="name mb-0 text-sm" style="word-break: break-all;"></p>
                    </div>
                  </div>
                </th>
                <td class="budget">
  
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="">
                      <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="completion mr-2">60%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Editar</a>
                      <a class="dropdown-item" href="#">Eliminar</a>
                    </div>
                  </div>
                </td>
              </tr>
            
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
      </div>
      @endforeach
    </div>
  </div>
  {{ $indicator->links() }}
</div>
@include('admin.indicator.create')
@include('admin.action.create')
@include('sweet::alert')
@endsection