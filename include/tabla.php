<?php
    include_once "../conexion/conexion.php";

    $sentencia = $base_de_datos->query("select id, nombre, edad from mascotas;");
    $mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">

        <div class="row my-3">
            <div class="col-6">
                <h1>Mascotas</h1>
            </div>
            <div class="col-6 d-grid gap-2 d-md-flex justify-content-md-end mt-2 mb-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar
                </button>
            </div>
        </div>

        <div class="row">
        <!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
            <div class="col-12">
                
                <div class="table-responsive">
                <table id="example" class="display" style="width:100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th style="width: 300px;">Acción</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <!--
                            Atención aquí, sólo esto cambiará
                            Pd: no ignores las llaves de inicio y cierre {}
                            -->
                            <?php foreach($mascotas as $mascota){ ?>
                                <tr>
                                    <td><?php echo $mascota->id ?></td>
                                    <td><?php echo $mascota->nombre ?></td>
                                    <td><?php echo $mascota->edad ?></td>
                                    <td class="text-center"><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $mascota->id?>">Editar 📝</a> <a href="#" class="btn btn-danger btn_eliminar">Eliminar 🗑️</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>

<script src="js/eliminar.js"></script>

<script>

    $('#example').DataTable({
        "pageLength": 10,
        "order": [
            [0, "desc", 2, "asc"]
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });

    

</script>