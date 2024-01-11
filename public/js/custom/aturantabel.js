"use strict";


$(document).ready(function() {
    $('#bababoey').DataTable({
        searching: false, // Disable searching
        paging: false, // Hide pagination
        info: false, // Hide information
        lengthChange: false, // Hide entries per page
        serverSide: false,
        order: [
            [0, 'asc']
        ]
    });

});
$(document).ready(function() {
    $('#asa').DataTable({
        searching: false, // Disable searching
        paging: false, // Hide pagination
        info: false, // Hide information
        lengthChange: false, // Hide entries per page
        sorting : true,
        order: [
            [0, 'asc']
        ]
    });

});

