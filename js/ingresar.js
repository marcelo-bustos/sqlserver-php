$(document).ready(function () {
    $("#contenido").load("include/tabla.php");

    $('#btn_ingresar').click(function () {

        var nombre  = $("#nombre").val();
        var edad    = $("#edad").val();

        if (nombre == "" || edad == "") {

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
                url: "include/procesa_insertar.php",
                data: {
                    nombre,
                    edad
                },

                success: function (a) {

                    console.log(a);

                    if (a == 1) {

                        Swal.fire({
                            title: 'AVISO',
                            position: 'top',
                            allowOutsideClick: false,
                            text: "Registro Ingresado Correctamente",
                            icon: 'success'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#contenido").load("include/tabla.php");
                                $('#nombre').val("");
                                $('#edad').val("");
                                $('#exampleModal').modal('hide');
                            }

                        })

                        return false;

                    } else {

                        Swal.fire({
                            icon: 'error',
                            position: 'top',
                            allowOutsideClick: false,
                            title: 'Registro no Ingresado',
                            text: 'Verifique algun caracter no valido en los campos'
                        })

                        return false;

                    }
                }
            });
        }
    });
});