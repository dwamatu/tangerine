$('.dataTable').DataTable({

    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]

});

$('#myTable2').DataTable().search('Close').draw();
$('#myTable3').DataTable().search('Book').draw();
$('#myTable4').DataTable().search('Open').draw();


$('.viewTable').DataTable({

    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]

});

$('#vTable2').DataTable().search('StreetLight').draw();
$('#vTable3').DataTable().search('Medium').draw();
$('#vTable4').DataTable().search('Billboard').draw();

//User Data Table
$('#dataTable').DataTable({

    dom: 'Bfrtip',
    buttons: [{
        extend: 'excelHtml5',
        exportOptions: {
            columns: [0, 1, 2, 3]
        }
    },
        {
            extend: 'csvHtml5',
            exportOptions: {
                columns: [0, 1, 2, 3]
            }
        },
        {
            extend: 'pdfHtml5',
            "title": "Users",
            message: 'A list of the Users.',
            exportOptions: {
                columns: [0, 1, 2, 3]
            }
        }, {
            text: 'New User',
            action: function (e, dt, node, config) {
                $('#new_userform').modal('show');
            }
        }]


});