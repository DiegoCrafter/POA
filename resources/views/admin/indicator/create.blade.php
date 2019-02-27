<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Agregar Indicador</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            {!! Form::open(['route' => 'ind_save']) !!}
              @csrf
                <h6 class="heading-small text-muted mb-4">Indicador</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-address">Nombre de Indicador:</label>
                          <input id="input-address" class="form-control form-control-alternative" placeholder="Ingrese el nombre del Indicador" name="indicator_name" type="text">
                          <input type="hidden" value="{{$ej_id}}" name="eje_id">
                        </div>
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button>
                  </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      
      </div>
      </div>
      </div>
    