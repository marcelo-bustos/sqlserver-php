<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión PHP-SQLSERVER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    
</head>
<body>
        <?php include_once "include/encabezado.php" ?>

        <div class="container-fluid mt-2">

            <div class="row my-3">
                <div class="col-6">
                    <h1>Mascotas</h1>
                </div>
                
                <div class="col-6 d-grid gap-2 d-md-flex justify-content-md-end mt-2 mb-2">
                    <button type="button" class="btn btn-success btn_exportar" data-bs-toggle="modal" data-bs-target="#exportar">
                        Exportar
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar
                    </button>
                </div>
            </div>

            <div class="row">
            <!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
                <div class="col-12">
                    
                    <div class="table-responsive">
                    <table id="lista_mascotas" class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Fecha Nacto</th>
                                    <th style="width: 300px;">Acción</th>
                                </tr>
                            </thead>
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>





        <?php 
            include_once "include/modal.php";
            include_once "include/pie.php";
        ?>
        
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/listar.js"></script>
        <script src="js/ingresar.js"></script>
        <script src="js/eliminar.js"></script>
        <script src="js/editar.js"></script>
</body>
</html>