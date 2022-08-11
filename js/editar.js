$(document).ready(function () {

    $('.btn_editar').click(function () {
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text());

        $("#id_editar").val(id);
        console.log(id);

        $.ajax({
            type: "POST",
            url: "include/procesa_cargar.php",
            data: {
                id
            },

            success: function (respuesta) {

                console.log(respuesta);

                data = JSON.parse(respuesta)

                $("#nombre_editar").val(data.nombre);
                $("#edad_editar").val(data.edad);
                $("#fecha_editar").val(data.fecha);

                $("#editar").modal('show'); 
                
            }
        });

       
    });

    $("#btn_editar").click(function(){

        var id      = $("#id_editar").val();
        var nombre  = $("#nombre_editar").val();
        var edad    = $("#edad_editar").val();
        var fecha    = $("#fecha_editar").val();


        if (nombre == "" || edad == "" || fecha == "") {

            Swal.fire({
                icon: 'error',
                title: 'FALTA ALGO',
                position: 'top',
                allowOutsideClick: false,
                text: 'RELLENE TODOS LOS CAMPOS'
            })

        } else {
            $.ajax({
                type: "POST",
                url: "include/procesa_actualizar.php",
                data: {
                    nombre,
                    edad,
                    id,
                    fecha
                },

                success: function (a) {

                    console.log(a);

                    if (a == 1) {

                        Swal.fire({
                            title: 'AVISO',
                            position: 'top',
                            allowOutsideClick: false,
                            text: "Registro actualizado Correctamente",
                            icon: 'success'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#contenido").load("include/tabla.php");
                                // $('#nombre').val("");
                                // $('#edad').val("");
                                $('#editar').modal('hide');
                            }

                        })

                        return false;

                    } else {

                        Swal.fire({
                            icon: 'error',
                            position: 'top',
                            allowOutsideClick: false,
                            title: 'Registro no actualizado',
                            text: 'Verifique algun caracter no valido en los campos'
                        })

                        return false;

                    }
                }
            });
        }
    })

});