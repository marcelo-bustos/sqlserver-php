$(document).ready(function () {

    $('.btn_exportar').click(function () {
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text());

        $("#id_exportar").val(id);
        console.log(id);

        $.ajax({
            type: "POST",
            url: "include/procesa_exportar.php",
            data: {
                id
            },

            success: function (respuesta) {

                console.log(respuesta);

                data = JSON.parse(respuesta)

                

                $("#exportar").modal('show'); 
                
            }
        });

       
    });
});