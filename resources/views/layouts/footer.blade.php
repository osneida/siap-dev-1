        <div class="panel panel-default">
                  <div class="panel-heading">Control de Cambio 
                  </div>
                  <div class="panel-body">  

                    <div class="row">
                        <div class="col-sm-12">

                                <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="numero_revision">Número Revisión:</label>
                                        <input type="text" class="form-control" name="numero_revision" id="numero_revision" placeholder="Número Revisión"value="{{ old('numero_revision') }}">

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="fecha_revision">Fecha de Revisión</label>
                                        <input type="text" class="form-control datepicker" name="fecha_revision" id="fecha_revision" placeholder="Fecha Revisión" value="{{ old('fecha_revision') }}">

                                    </div>
                                </div>                
                                <div class="col-md-4">
                                    <div class="form-group">
                                         <label for="descripcion_cambio">Descripción del Cambio</label>
                                         <textarea class="form-control" rows="4" id="descripcion_cambio" placeholder="Descripción del cambio" value="{{ old('descripcion_cambio') }}"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                         <label for="originado">Originado por</label>
                                         <input type="text" class="form-control" name="originado" id="originado" placeholder="originado"value="{{ old('originado') }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                         <label for="aprobado">Aprobado por</label>
                                         <input type="text" class="form-control" name="aprobado" id="aprobado" placeholder="Descripción del cambio"value="{{ old('aprobado') }}">
                                    </div>
                                </div>                                
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
