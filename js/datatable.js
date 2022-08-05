$(document).ready(function () {
    $('#example').DataTable({
        "pageLength": 10,
        "order": [
            [0, "desc", 2, "asc"]
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });

    
});