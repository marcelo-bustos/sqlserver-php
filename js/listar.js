$(document).ready(function () {
  
    lista_mascotas = $('#lista_mascotas').DataTable({
      "order": [[ 0, "desc"]],
      "ajax": {
        "url": "include/procesa_listar.php",
        "method": 'POST',
        "data": {},
        "dataSrc": ""
      },
  
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
      },
  
      "columns": [{
          "data": "id"
        },
        {
          "data": "nombre"
        },
        {
          "data": "edad"
        },
        {
          "data": "fecha"
        },
        {
          "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-warning btn_editar'>Editar 📝</button> <button class='btn btn-danger btn_eliminar'>Eliminar 🗑️</button></div></div>"
        }
      ]
  
    });
  
  });