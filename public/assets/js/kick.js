$(document).ready( function () {
    $('#myTable').DataTable({
        columnDefs: [
            {
                target: 6,
                visible: false,
                searchable: false,
            }
        ]
    });
} );