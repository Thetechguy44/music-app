//[widget morris charts Javascript]

//Project:  Sassui - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";

 

 // donut chart
        
    Morris.Donut({
        element: 'donut-chart_2',
        data: [{
            label: "Total",
            value: 5687,

        }, {
            label: "In-Store",
            value: 4572
        }, {
            label: "Retail",
            value: 6870
        }],
        resize: true,
        colors:['#9c72fd', '#ffba3e', '#ff94d5']
    });

    



  

  
  });
$(function () {
    "use strict";

var options = {
          series: [{
          name: 'Net Profit',
          data: [44, 55, 57, 56, 61, 58, 63]
        }, {
          name: 'Revenue',
          data: [76, 85, 101, 98, 87, 105, 91]
        }],
          chart: {
          type: 'bar',
          height: 270,
              toolbar: {
                show: false,
              }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '50%',
            borderRadius: 3
          },
        },
        dataLabels: {
          enabled: false,
        },
        grid: {
            show: false,
            padding: {
              top: 0,
              bottom: 0,
              right: 30,
              left: 20
            }
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['#00000052']
        },
        colors: ['#6c757d', '#f2426d'],
        xaxis: {
          categories: ['sat', 'sun', 'mon', 'tuh', 'wed', 'thu', 'fri'],
            labels: {
                show: true,
            },
            axisBorder: {
                show: true,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
          labels: {
                show: false,
            }
        },
         legend: {
            show: false,
         },
        fill: {
          opacity: 1
        },
        tooltip: {
         theme: 'dark',
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          },
            marker: {
              show: false,
          },
        }
        };

        var chart = new ApexCharts(document.querySelector("#revenue1"), options);
        chart.render();


        var options7 = {
          series: [50],
          chart: {
          type: 'radialBar',
          width: 80,
          height: 80,
          sparkline: {
            enabled: true
          }
        },
        dataLabels: {
          enabled: false
        },
        colors:['#ffa800'],
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '60%'
            },
            track: {
              margin: 0
            },
            dataLabels: {
              show: false
            }
          }
        }
        };

        var chart7 = new ApexCharts(document.querySelector("#booked-revenue-chart1"), options7);
        chart7.render();

    var options7 = {
          series: [60],
          chart: {
          type: 'radialBar',
          width: 80,
          height: 80,
          sparkline: {
            enabled: true
          }
        },
        dataLabels: {
          enabled: false
        },
        colors:['#18d26b'],
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '60%'
            },
            track: {
              margin: 0
            },
            dataLabels: {
              show: false
            }
          }
        }
        };

        var chart7 = new ApexCharts(document.querySelector("#booked-revenue-chart"), options7);
        chart7.render();
    
    
  });

