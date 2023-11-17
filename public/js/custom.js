/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

var ctx = document.getElementById("filterByjenis").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Januari", "Febuari", "Maret", "April", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      label: 'Exernal',
      data: [460, 458, 330, 502, 430, 610, 488, 350,135, 456, 555, 653  ],
      borderWidth: 2,
      borderColor: '#EE300E',
      backgroundColor: '#EE300E',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    },
    {
      label: 'Prioritas Tinggi',
      data: [126, 10, 124, 310, 522, 234, 126, 218, 210, 212, 213, 126  ],
      borderWidth: 2,
      borderColor: '#EECF0E',
      backgroundColor: '#EECF0E',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    },
    {
      label: 'Prioritas Mengenah',
      data: [204, 372, 228, 454, 283, 200, 112, 199, 192, 301, 318, 407  ],
      borderWidth: 2,
      borderColor: '#77EE0E',
      backgroundColor: '#77EE0E',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    },
    {
      label: 'Prioritas Rendah',
      data: [117, 354, 384, 154, 156, 102, 134, 251, 313, 315, 267, 305  ],
      borderWidth: 2,
      borderColor: '#0EC5EE',
      backgroundColor: '#0EC5EE ',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    },
  ]
  },
  options: {
    legend: {
      display: true
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 150
        }
      }],
      xAxes: [{
        ticks: {
          display: true
        },
        gridLines: {
          display: false
        }
      }]
    },
  }
});

var ctx = document.getElementById("kategoriwo").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Keyboard", "Monitor", "Mouse", "Speaker", "Network", "CPU", "Printer"],
    datasets: [{
      label: 'Perangkat',
      data: [460, 458, 330, 502, 430, 610, 488],
      borderWidth: 2,
      backgroundColor: '#6777ef',
      borderColor: '#6777ef',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 150
        }
      }],
      xAxes: [{
        ticks: {
          display: false
        },
        gridLines: {
          display: false
        }
      }]
    },
  }
});

var ctx = document.getElementById("akurasi").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        30,
        100,
      ],
      backgroundColor: [

        '#fc544b',
        '#6777ef',
      ],
      label: 'Dataset 1'
    }],
    labels: [
      'Terlambat',
      'Sesuai'
    ],
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom',
    },
    maintainAspectRatio : false
  }
});