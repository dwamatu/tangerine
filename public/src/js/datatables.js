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