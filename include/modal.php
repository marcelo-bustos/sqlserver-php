<!-- Modal -->
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
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_ingresar">Guardar</button>
      </div>
    </div>
  </div>
</div>

