$(document).ready(function() {

    $('#botoncrear').click(function() {
        //$("#formulario")[0].reset();
        //$(".modal-title").text("Crear Usuario");
        $("#action").val("crear");
        $("#operacion").val("Crear");
        //$("#imagen_subida").html("");
    });

    var dataTable = $('#datos_articulos').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            url: "obtener_registros.php",
            type: "POST"
        },
        "columnsDefs": [{
            "targets": [0, 3, 4],
            "orderable": false,
        }, ],
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });




    //Funcionalidad de borrar
    $(document).on('click', '.borrar', function() {
        var id_usuario = $(this).attr("id");
        var name = $(this).attr("nombre");
        if (confirm("Estas seguro de borrar este registro:" + id_usuario)) {
            $.ajax({
                url: "../Controlador/borrar.php",
                method: "POST",
                data: {
                    id_usuario: id_usuario
                },
                success: function(data) {
                    alert: (data),
                    dataTable.ajax.reload();
                }
            });
        } else {
            return false;
        }
    })
});