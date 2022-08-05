$(document).ready(function () {
    $('.btn_eliminar').click(function () {
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text());
        
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: 'Confirmación',
            text: "¿Estás seguro que deseas eliminar el registro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "include/procesa_eliminar.php",
                    data: {
                        id
                },
    
                success: function (a) {
                    swalWithBootstrapButtons.fire(
                        'Eliminado!',
                        'Tu registro ha sido eliminado',
                        'success'
                    )
                    $("#contenido").load("include/tabla.php");
                    $('#nombre').val("");
                    $('#edad').val("");
                    $('#exampleModal').modal('hide');
                }
            })
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Cancelado',
                'Tu registro no se eliminó',
                'error'
              )
            }
          })
        console.log(id);
    })
})

