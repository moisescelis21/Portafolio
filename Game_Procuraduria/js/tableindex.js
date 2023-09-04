$(document).ready( function () {
    $('#myTable').DataTable({
        responsive: true,
        deferRender: true,
        scroller: true,
        scrollCollapse: true,
        scrollY: 240,
        pagingType: "simple",
        language: {
            sProcessing: "Procesando...",
            sLengthMenu: "Mostrar _MENU_ archivos",
            sZeroRecords: "No se encontraron resultados",
            sEmptyTable: "Ningún dato disponible en esta tabla",
            sInfo: "Mostrando archivos del _START_ al _END_ de un total de _TOTAL_",
            sInfoEmpty: "Mostrando archivos del 0 al 0 de un total de 0",
            sInfoFiltered: "(filtrado de un total de _MAX_ archivos)",
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
