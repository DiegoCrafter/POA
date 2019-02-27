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
                    <li class="breadcrumb-item"><a href="#">Ejes de Plan Operativo Anual</a></li>
                  </ol>
                </nav>
              </div>
              @if(Auth::user()->hasRole('admin'))
              <div class="col-lg-6 col-5 text-right">
                <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm btn-neutral">Nuevo</a>
                <a href="#" class="btn btn-sm btn-neutral">Filters</a>
              </div>
              @endif
            </div>
            <!-- Card stats -->
          </div>
        </div>
</div>
<div class="container-fluid mt--6">
<div class="row">
        @foreach($eje as $ej)
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-default border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">{{$ej -> eje_name}}</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">50/62</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                  </div>
                </div>
                @if(Auth::user()->hasRole('admin'))
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Editar</a>
                    <a class="dropdown-item"><button class="btn btn-sm btn-danger">Eliminar</button></a>
                  </div>
                </div>
                @endif
              </div>
              <p class="mt-3 mb-0 text-sm">
                @if(Auth::user()->hasRole('admin'))
                <a href="{{URL::action('IndicatorController@index',$ej->id)}}" class="text-nowrap text-white font-weight-600">Ver</a>
                @else(Auth::user()->hasRole('user'))
                <a href="{{route('schedule')}}" class="text-nowrap text-white font-weight-600">Ver</a>
                @endif
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
</div>
 @include('admin.eje.create')
@endsection
