<div id="Div1" style="display:none" class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Documento (s)</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
        {!! Form::open(['route'=> 'doc_save', 'method' => 'POST', 'files'=>'true', 'enctype' => 'multipart/form-data']) !!}
        <!-- Single -->
        <!-- Multiple -->
        <div class="form-group row">
            <label
                for="example-text-input"
                class="col-md-2 col-form-label form-control-label"
                >Titulo</label
            >
            <div class="col-md-10">
                <input
                    class="form-control"
                    type="text"
                    id="example-text-input"
                />
            </div>
        </div>
        <div class="form-group row">
            <label
                for="example-search-input"
                class="col-md-2 col-form-label form-control-label"
                >Descripcion</label
            >
            <div class="col-md-10">
                <input
                    class="form-control"
                    type="search"
                    value=""
                    id="example-search-input"
                />
            </div>
        </div>
        <input type="file" class="form-control" name="file" multiple>
        <button type="submit" class="btn btn-success" id="submit">Subir</button>
        {!! Form::close() !!}
    </div>
</div>
