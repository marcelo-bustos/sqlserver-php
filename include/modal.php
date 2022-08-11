<!-- Modal Ingresar-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input required name="nombre" type="text" id="nombre" placeholder="Nombre de mascota" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input required name="edad" type="number" id="edad" placeholder="Edad de mascota" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha Nacimiento</label>
                        <input required name="fecha" type="date" id="fecha" class="form-control">
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-backdrop="false" data-bs-dismiss="modal" id="btn_ingresar">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Editar-->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarLabel">Editar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="form-group">

                    <input type="hidden" id="id_editar">
                    
                        <label for="nombre_editar">Nombre</label>
                        <input required name="nombre_editar" type="text" id="nombre_editar" placeholder="Nombre de mascota" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="edad_editar">Edad</label>
                        <input required name="edad_editar" type="number" id="edad_editar" placeholder="Edad de mascota" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fecha_editar">Fecha Nacimiento</label>
                        <input required name="fecha_editar" type="date" id="fecha_editar" class="form-control">
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-backdrop="false" data-bs-dismiss="modal" id="btn_editar">Guardar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Exportar-->
<div class="modal fade" id="exportar" tabindex="-1" aria-labelledby="editarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarLabel">Editar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="form-group">

                    <input type="hidden" id="id_exportar">
                    
                        <label for="exportar_inicio">Fecha Inicio</label>
                        <input required name="exportar_inicio" type="date" id="exportar_inicio" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exportar_fin">Fecha Fin</label>
                        <input required name="exportar_fin" type="date" id="exportar_fin" placeholder="Edad de mascota" class="form-control">
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-backdrop="false" data-bs-dismiss="modal" id="btn_exportar">Guardar</button>
      </div>
    </div>
  </div>
</div>

