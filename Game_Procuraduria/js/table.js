$(document).ready( function () {
    $('#myTable').DataTable({
        responsive: true,
        deferRender: true,
        scroller: true,
        scrollCollapse: true,
        scrollY: 240,
        scrollX: 200,
        pagingType: "simple",
        language: {
            sProcessing: "Procesando...",
            sLengthMenu: "Mostrar _MENU_ registros",
            sZeroRecords: "No se encontraron resultados",
            sEmptyTable: "Ningún dato disponible en esta tabla",
            sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0",
            sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
            sInfoPostFix: "",
            sSearch: "Buscar:",
            sUrl: "",
            sInfoThousands: ",",
            sLoadingRecords: "Cargando...", 
            oPaginate: {
                sFirst: "Primero",
                sLast: "Último",
                sNext: "<i class='bx bxs-chevron-right-circle pagination-right'></i>",
                sPrevious: "<i class='bx bxs-chevron-left-circle pagination-left' ></i>",
            }
        }
    });
} );
