<div class="modal fade" id="modal-form-action" tabindex="-1" role="dialog" aria-labelledby="modal-form-action" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Agregar Acción</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            {!! Form::open(['route' => 'action_save']) !!}
              @csrf
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Acciones</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Nombre de la acción</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Ingrese el nombre de la acción" value="" type="text" name="action_name">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Responsable (S)</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                        <input type="text" class="form-control" value="@foreach($users as $us){{$us->name}},@endforeach" id="tags" data-toggle="tags" />
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Fecha (S)</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                        <input type="text" class="form-control" value="Enero, Febrero, Marzo, Abril, Mayo, Junio" data-toggle="tags" />
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button>
                  </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
</div>