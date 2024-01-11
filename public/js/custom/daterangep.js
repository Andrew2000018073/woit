"use strict";

$(document).ready(function() {
    $('input[name="datetimes"]').daterangepicker({
        "showWeekNumbers": true,
        "timePicker": true,
        "timePicker24Hour": true,
        ranges: {
            'Today': [moment().startOf('hour'), moment().startOf('hour').add(8, 'hour')],
            'Yesterday': [moment().subtract(1, 'days').startOf('hour'), moment().subtract(1, 'days').startOf('hour').add(8, 'hour')],
            'Last 7 Days': [moment().subtract(6, 'days').startOf('hour').add(8, 'hour'), moment().startOf('hour').add(8, 'hour')],
            'Last 30 Days': [moment().subtract(29, 'days').startOf('hour').add(8, 'hour'), moment().startOf('hour').add(8, 'hour')],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month').startOf('hour').add(8, 'hour'), moment().subtract(1, 'month').endOf('month').startOf('hour').add(8, 'hour')]
        },
        locale: {
            format: 'YYYY-MM-DD H:mm'
          },

    "startDate":  moment().startOf('hour'),
    "endDate": moment().startOf('hour').add(32, 'hour'),
    },function(start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD H:mm') + ' to ' + end.format('YYYY-MM-DD H:mm') + ' (predefined range: ' + label + ')');
      });
});

