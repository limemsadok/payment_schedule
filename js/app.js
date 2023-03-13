/**
 * Created by beraaksoy on 2/6/17.
 */
$(document).ready(function () {

    // 1) Basic Table
    // Uncomment the next line and comment everything else for a basic table pagination and search
    // $('#maintable').DataTable();

    // 2) Hide columns 3 and 4
    // Use when you want to show a different view
    // $('#maintable').dataTable({
    //     "columnDefs": [
    //         {
    //             "targets": [2],
    //             "visible": false,
    //             "searchable": false
    //         },
    //         {
    //             "targets": [3],
    //             "visible": false
    //         }
    //     ]
    // });

    // 3) Add the following buttons:
    // - Show 10, 25, 50, 100, All rows
    // - Copy rows to clipboard
    // - Export to Excel
    // - Export to CSV
    // - Printable view
    // - Export to PDF
    // - Set column visibility
    var table = $('#maintable').DataTable({
        paging: false,
        ordering: false,
        mark: true,
        dom: 'Bftrip',
        lengthMenu: [
            [-1, 3, 6, 9],
            ['Show All', '3 rows', '6 rows', '9 rows' ]
        ],
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            /*{
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                download: 'open',
                exportOptions: {
                    columns: ':visible'
                }
            }*/
            {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },,
            'colvis'
        ],
        columDefs: [{
            targets: -1,
            visible: false,
        }]
    });

});
