//[widget morris charts Javascript]

//Project:  Sassui - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";

 

 // donut chart
        
    Morris.Donut({
        element: 'donut-chart',
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

// area chart
 Morris.Area({
        element: 'area-chart3',
        data: [{
                    period: '2016',
                    data1: 0,
                    data2: 0,
                    data3: 0
                }, {
                    period: '2017',
                    data1: 55,
                    data2: 20,
                    data3: 10
                }, {
                    period: '2018',
                    data1: 25,
                    data2: 55,
                    data3: 70
                }, {
                    period: '2019',
                    data1: 65,
                    data2: 17,
                    data3: 12
                }, {
                    period: '2020',
                    data1: 35,
                    data2: 25,
                    data3: 125
                }, {
                    period: '2021',
                    data1: 30,
                    data2: 85,
                    data3: 45
                }, {
                    period: '2022',
                    data1: 15,
                    data2: 15,
                    data3: 15
                }


                ],
                lineColors: ['#51ce8a','#ff94d5', '#9c72fd' ],
                xkey: 'period',
                ykeys: ['data1', 'data2', 'data3'],
                labels: ['Sales', 'Revenue', 'Orders'],
                pointSize: 0,
                lineWidth: 0,
                resize:true,
                fillOpacity: 0.8,
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                hideHover: 'auto'
        
    });
    
    
  });

