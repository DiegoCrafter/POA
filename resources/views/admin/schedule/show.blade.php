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
                    <li class="breadcrumb-item"><a href="#">Documentos del Plan Operativo</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="container-fluid mt--6">
            <div class="row">
              <div class="col-lg-6">
                <div class="card-wrapper">
                  <!-- Input groups -->
                  <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                          <!-- Title -->
                          <h5 class="h3 mb-0">Cronograma</h5>
                        </div>
                        <!-- Card body -->
                        <div class="card-body p-0">
                          <!-- List group -->
                          <ul class="list-group list-group-flush" data-toggle="checklist">
                            <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                              <div class="checklist-item checklist-item-success">
                                <div class="checklist-info">
                                  <h5 class="checklist-title mb-0">Numero de reconocimientos institucionales recibidos</h5>
                                  <small>Convenios con empresas estrategicas: Trabajo de investigacion</small>
                                        
                                </div>
                                <div>
                                        <button type="button" class="btn btn-sm btn-primary" onclick="switchVisible();">Ver Detalles</button>
                                  <div class="custom-control custom-checkbox custom-checkbox-success">
                                    <input class="custom-control-input" id="chk-todo-task-1" type="checkbox" checked>
                                    <label class="custom-control-label" for="chk-todo-task-1"></label>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                              <div class="checklist-item checklist-item-danger">
                                <div class="checklist-info">
                                  <h5 class="checklist-title mb-0">Winter Hackaton</h5>
                                  <small>Febrero</small>
                                </div>
                                <div>
                                        <button type="button" class="btn btn-sm btn-primary" onclick="switchVisible1();">Añadir Docs</button>
                                  <div class="custom-control custom-checkbox custom-checkbox-danger">
                                    <input class="custom-control-input" id="chk-todo-task-4" type="checkbox" >
                                    
                                    <label class="custom-control-label" for="chk-todo-task-4"></label>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>            
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card-wrapper">
                  <!-- Dropzone -->
                  @include('admin.document.create')

                  <div id="Div2" style="display:none" class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Detalles de documento</h3>
                    </div>
                    <!-- Card body -->
                
                      <div class="card-body">
                      
                            <div class="form-group row">
                              <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Titulo</label>
                              <div class="col-md-10">
                                <input class="form-control" type="text" value="John Snow" id="example-text-input">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="example-search-input" class="col-md-2 col-form-label form-control-label">Descripcion</label>
                              <div class="col-md-10">
                                <input class="form-control" type="search" value="Tell me your secret ..." id="example-search-input">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="example-email-input" class="col-md-2 col-form-label form-control-label">Fecha</label>
                              <div class="col-md-10">
                                <input class="form-control" type="email" value="14/04/2019" id="example-email-input">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="example-url-input" class="col-md-2 col-form-label form-control-label">Documentos</label>
                              <div class="col-md-10">
                                
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

<script>
  function switchVisible1() {
            if (document.getElementById('Div1')) {

                if (document.getElementById('Div1').style.display == 'none') {
                    document.getElementById('Div1').style.display = 'block';
                    document.getElementById('Div2').style.display = 'none';
                }
            }
   }

   function switchVisible() {
            if (document.getElementById('Div2')) {

                if (document.getElementById('Div2').style.display == 'none') {
                    document.getElementById('Div2').style.display = 'block';
                    document.getElementById('Div1').style.display = 'none';
                }
                
            }
   }
</script>


@endsection