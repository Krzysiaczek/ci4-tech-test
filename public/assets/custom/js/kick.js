$( function () {
    $('#myTable').DataTable({
        columnDefs: [
            {
                targets: 5,
                data: "slug",
                data_name: "username",
                render: function ( data, type, row, meta ) {
                    return '<a href="/user/'+data+'" target="_self">'+data+'</a>';
                }
            },
            {
                target: 6,
                visible: false,
                searchable: false,
            }
        ],
        responsive: true
    });
    $('[data-toggle="popover"]').popover();
});