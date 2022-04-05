@extends('user.layout.main')
@section('content')
</head>
<body>
  <div class="page-content">
    <div class="page-header d-flex">
     
     <div class="ml-2 d-flex">
     <a href="{{url('user/deposit')}}" class="d-flex" style="color:white">
     <i class="fa fa-credit-card-alt mt-1" aria-hidden="true"></i>
     <h2 class="h5 no-margin-bottom ml-2">Deposit</h2></a>
     </div>
     <div class="ml-2 d-flex">
         <a href="{{url('user/profit')}}" class="d-flex" style="color:white"> 
     <i class="fa fa-cubes mt-1" aria-hidden="true"></i> 
     <h2 class="h5 no-margin-bottom ml-2">Invest</h2></a>
     </div>
     <div class="ml-2 d-flex">
      <a href="{{url('user/withdraw')}}" class="d-flex" style="color:white"> 
     <i class="fa fa-briefcase mt-1">
                    </i>
     <h2 class="h5 no-margin-bottom ml-2">Withdraw</h2></a>
     </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i style="color:#eb930f" class="fa fa-download" aria-hidden="true"></i></div><strong>Deposited </strong>
                </div>
                <div class="number dashtext-1" style="color:white !important">${{$dop}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i style="color:green" class="fa fa-database"></i></div><strong>Profit</strong>
                </div>
                <div style="color:white !important  " class="number dashtext-2">${{Auth()->user()->Profit}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i style="color:#ef4e65" class="fa fa-gift"></i></div><strong>Bonsues</strong>
                </div>
                <div class="number dashtext-3" style="color:white !important">${{Auth()->user()->Bonsues}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 100%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i style="color:blue" class="fa fa-users"></i></div><strong>ref. Comissions</strong>
                </div>
                <div class="number dashtext-4" style="color: white !important;">${{Auth()->user()->REF_COMISSIONS}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 100%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i style="color:#7878c1" class="fa fa-wallet"></i></div><strong>Balance </strong>
                </div>
                <div class="number dashtext-1" style="color:white !important ">${{$all}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="fa fa-envelope" style="color: #e95f71;"></i></div><strong style="font-size: 13px;">Total Packages</strong>
                </div>
                <div class="number dashtext-2" style="color:white !important">{{Auth()->user()->TOTAL_PACKAGES}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="fa fa-envelope-open" style="color:blue"></i></div><strong style="font-size: 13px;">Active Packages </strong>
                </div>
                <div class="number dashtext-3" style="color:white !important">{{Auth()->user()->ACTIVE_PACKAGES}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 100%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="no-padding-top no-padding-bottom">
      <style type="text/css">
        .tradingview-widget-copyright{
          visibility: hidden!important;
        }
      </style>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="statistic-block block">

              <!-- TradingView Widget BEGIN -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": true,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget END -->
            </div>
          </div>
        </div>
      </div>
    </section>
    
    

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="line-chart block chart">
              <div class="title"><strong>BTCUSD </strong></div>
              <canvas class="lineChartCustom42"></canvas>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="chart block">
              <div class="title"> <strong>USDT</strong></div>
              <div class="bar-chart chart">
                <canvas class="barChar42"></canvas>
              </div>
            </div>
          </div>
           <div class="col-lg-4">
            <div class="line-chart block chart">
              <div class="title"><strong>BNBUSD </strong></div>
              <canvas class="lineChart52"></canvas>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="line-chart block chart">
              <div class="title"><strong>ETHUSD</strong></div>
              <canvas class="lineChartCustom52"></canvas>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="chart block">
              <div class="title"> <strong>LTCUSD</strong></div>
              <div class="bar-chart chart">
                <canvas class="barChar412"></canvas>
              </div>
            </div>
          </div>
           <div class="col-lg-4">
            <div class="line-chart block chart">
              <div class="title"><strong>ADAUSD </strong></div>
              <canvas class="lineChart512"></canvas>
            </div>
          </div>
      
         
          

        </div>
      </div>
    </section>
    <!-- <footer class="footer">
      <div class="footer__block block no-margin-bottom">
       
      </div>
    </footer> -->
  </div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>


  <script>
$( document ).ready(function() {

  window.onload = function() {

    var dataPoints = [];

    var chart2 = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "dark1", // "light1", "light2", "dark1", "dark2"
      exportEnabled: true,
      title: {
        text: ""
      },
      subtitles: [{
        text: "Weekly Averages"
      }],
      axisX: {
        interval: 1,
        valueFormatString: "MMM"
      },
      axisY: {
        prefix: "$",
        title: "Price"
      },
      toolTip: {
        content: "Date: {x}<br /><strong>Price:</strong><br />Open: {y[0]}, Close: {y[3]}<br />High: {y[1]}, Low: {y[2]}"
      },
      data: [{
        type: "candlestick",
        yValueFormatString: "$##0.00",
        dataPoints: dataPoints
      }]
    });

    $.get("https://canvasjs.com/data/gallery/javascript/netflix-stock-price.csv", getDataPointsFromCSV);

    function getDataPointsFromCSV(csv) {
      var csvLines = points = [];
      csvLines = csv.split(/[\r?\n|\r|\n]+/);
      for (var i = 0; i < csvLines.length; i++) {
        if (csvLines[i].length > 0) {
          points = csvLines[i].split(",");
          dataPoints.push({
            x: new Date(
              parseInt(points[0].split("-")[0]),
              parseInt(points[0].split("-")[1]),
              parseInt(points[0].split("-")[2])
            ),
            y: [
              parseFloat(points[1]),
              parseFloat(points[2]),
              parseFloat(points[3]),
              parseFloat(points[4])
            ]
          });
        }
      }
      chart2.render();
    }

  }
});
  
</script>
<script>


$( document ).ready(function() {

  window.onload = function () {
        var label='<?php echo $label; ?>';
      
        var array2=JSON.parse(label);
        console.log(array2);
    
    var LINECHARTEXMPLE   = $('.lineChart5');
    var lineChartExample = new Chart(LINECHARTEXMPLE, {
        type: 'line',
        color: "rgba(40,175,101,0.6)",
        options: {

            legend: {labels:{fontColor:"#777", fontSize: 12}},
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        color: 'transparent'
                    }
                }],
                yAxes: [{
                    
                    display: true,
                    gridLines: {
                        color: 'transparent'
                    }
                }]
            },
        },
        data: {
            labels: array2,
            datasets: [
                {
                    label: "BNBUSD Rate",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(134, 77, 217, 0.88)",
                    borderColor: "rgba(134, 77, 217, 088)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [{{$sat[0]->BNB}}, {{$sat[1]->BNB}}, {{$sat[2]->BNB}}, {{$sat[3]->BNB}}, {{$sat[4]->BNB}}, {{$sat[5]->BNB}}, {{$sat[6]->BNB}}],
                    spanGaps: false
                }
            ]
        }
    });
    var LINECHARTEXMPLE1   = $('.lineChart512');
    var lineChartExample1 = new Chart(LINECHARTEXMPLE1, {
        type: 'line',
        color: "rgba(40,175,101,0.6)",
        options: {

            legend: {labels:{fontColor:"#777", fontSize: 12}},
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        color: 'transparent'
                    }
                }],
                yAxes: [{
                    
                    display: true,
                    gridLines: {
                        color: 'transparent'
                    }
                }]
            },
        },
        data: {
            labels: array2,
            datasets: [
                {
                    label: "ADAUSD Rate",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(134, 77, 217, 0.88)",
                    borderColor: "rgba(134, 77, 217, 088)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [{{$sat[0]->ADA}}, {{$sat[1]->ADA}}, {{$sat[2]->ADA}}, {{$sat[3]->ADA}}, {{$sat[4]->ADA}}, {{$sat[5]->ADA}}, {{$sat[6]->ADA}}],
                    spanGaps: false
                }
            ]
        }
    });

    
    var LINECHARTEXMPLE   = $('.lineChartCustom42');
    var lineChartExample = new Chart(LINECHARTEXMPLE, {
        type: 'line',
        options: {
            legend: {labels:{fontColor:"#777", fontSize: 12}},
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        color: 'transparent'
                    }
                }],
                yAxes: [{
                   
                    display: true,
                    gridLines: {
                        color: 'transparent'
                    }
                }]
            },
        },
        data: {
            labels: array2,
            datasets: [
                {
                    label: "BTCUSD Rate ",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(134, 77, 217, 0.88)",
                    borderColor: "rgba(134, 77, 217, 088)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [{{$sat[0]->BTC}}, {{$sat[1]->BTC}}, {{$sat[2]->BTC}}, {{$sat[3]->BTC}}, {{$sat[4]->BTC}}, {{$sat[5]->BTC}}, {{$sat[6]->BTC}}],
                    spanGaps: false
                }
            ]
        }
    });
    var LINECHARTEXMPLE5   = $('.lineChartCustom52');
    var lineChartExample5 = new Chart(LINECHARTEXMPLE5, {
        type: 'line',
        options: {
            legend: {labels:{fontColor:"#777", fontSize: 12}},
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        color: 'transparent'
                    }
                }],
                yAxes: [{
                   
                    display: true,
                    gridLines: {
                        color: 'transparent'
                    }
                }]
            },
        },
        data: {
            labels: array2,
            datasets: [
                {
                    label: "ETHUSD Rate ",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(134, 77, 217, 0.88)",
                    borderColor: "rgba(134, 77, 217, 088)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [{{$sat[0]->ETH}}, {{$sat[1]->ETH}}, {{$sat[2]->ETH}}, {{$sat[3]->ETH}}, {{$sat[4]->ETH}}, {{$sat[5]->ETH}}, {{$sat[6]->ETH}}],
                    spanGaps: false
                }
            ]
        }
    });

    
    var BARCHART1 = $('.barChar42');
    var barChartHome = new Chart(BARCHART1, {
        type: 'bar',
        options:
        {
            scales:
            {
                xAxes: [{
                    display: true,
                    barPercentage: 0.2
                }],
                yAxes: [{
                    
                    display: false
                }],
            },
            legend: {
                display: false
            }
        },
        data: {
            labels:array2 ,
            datasets: [
                {
                    label: "USDTUSD",
                    backgroundColor: [
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99'
                    ],
                    borderColor: [
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99'
                    ],
                    borderWidth: 0.3,
                    data: [{{$sat[0]->USDT}}, {{$sat[1]->USDT}}, {{$sat[2]->USDT}}, {{$sat[3]->USDT}}, {{$sat[4]->USDT}}, {{$sat[5]->USDT}}, {{$sat[6]->USDT}}],
                }
            ]
        }
    });
    var BARCHART11 = $('.barChar412');
    var barChartHome1 = new Chart(BARCHART11, {
        type: 'bar',
        options:
        {
            scales:
            {
                xAxes: [{
                    display: true,
                    barPercentage: 0.2
                }],
                yAxes: [{
                    
                    display: false
                }],
            },
            legend: {
                display: false
            }
        },
        data: {
            labels:array2 ,
            datasets: [
                {
                    label: "LTCUSD",
                    backgroundColor: [
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99'
                    ],
                    borderColor: [
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99'
                    ],
                    borderWidth: 0.3,
                    data: [{{$sat[0]->SIB}}, {{$sat[1]->SIB}}, {{$sat[2]->SIB}}, {{$sat[3]->SIB}}, {{$sat[4]->SIB}}, {{$sat[5]->SIB}}, {{$sat[6]->SIB}}],
                }
            ]
        }
    });
    var LINECHARTEXMPLE   = $('.lineChart52');
    var lineChartExample = new Chart(LINECHARTEXMPLE, {
        type: 'line',
        color: "rgba(40,175,101,0.6)",
        options: {

            legend: {labels:{fontColor:"#777", fontSize: 12}},
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        color: 'transparent'
                    }
                }],
                yAxes: [{
                    
                    display: true,
                    gridLines: {
                        color: 'transparent'
                    }
                }]
            },
        },
        data: {
            labels: array2,
            datasets: [
                {
                    label: "BNBUSD Rate",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(134, 77, 217, 0.88)",
                    borderColor: "rgba(134, 77, 217, 088)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [{{$sat[0]->BNB}}, {{$sat[1]->BNB}}, {{$sat[2]->BNB}}, {{$sat[3]->BNB}}, {{$sat[4]->BNB}}, {{$sat[5]->BNB}}, {{$sat[6]->BNB}}],
                    spanGaps: false
                }
            ]
        }
    });
    var LINECHARTEXMPLE1   = $('.lineChart51');
    var lineChartExample1 = new Chart(LINECHARTEXMPLE1, {
        type: 'line',
        color: "rgba(40,175,101,0.6)",
        options: {

            legend: {labels:{fontColor:"#777", fontSize: 12}},
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        color: 'transparent'
                    }
                }],
                yAxes: [{
                    
                    display: true,
                    gridLines: {
                        color: 'transparent'
                    }
                }]
            },
        },
        data: {
            labels: array2,
            datasets: [
                {
                    label: "ADAUSD Rate",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(134, 77, 217, 0.88)",
                    borderColor: "rgba(134, 77, 217, 088)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [{{$sat[0]->ADA}}, {{$sat[1]->ADA}}, {{$sat[2]->ADA}}, {{$sat[3]->ADA}}, {{$sat[4]->ADA}}, {{$sat[5]->ADA}}, {{$sat[6]->ADA}}],
                    spanGaps: false
                }
            ]
        }
    });

    
    var LINECHARTEXMPLE   = $('.lineChartCustom4');
    var lineChartExample = new Chart(LINECHARTEXMPLE, {
        type: 'line',
        options: {
            legend: {labels:{fontColor:"#777", fontSize: 12}},
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        color: 'transparent'
                    }
                }],
                yAxes: [{
                   
                    display: true,
                    gridLines: {
                        color: 'transparent'
                    }
                }]
            },
        },
        data: {
            labels: array2,
            datasets: [
                {
                    label: "BTCUSD Rate ",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(134, 77, 217, 0.88)",
                    borderColor: "rgba(134, 77, 217, 088)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [{{$sat[0]->BTC}}, {{$sat[1]->BTC}}, {{$sat[2]->BTC}}, {{$sat[3]->BTC}}, {{$sat[4]->BTC}}, {{$sat[5]->BTC}}, {{$sat[6]->BTC}}],
                    spanGaps: false
                }
            ]
        }
    });
    var LINECHARTEXMPLE5   = $('.lineChartCustom5');
    var lineChartExample5 = new Chart(LINECHARTEXMPLE5, {
        type: 'line',
        options: {
            legend: {labels:{fontColor:"#777", fontSize: 12}},
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        color: 'transparent'
                    }
                }],
                yAxes: [{
                   
                    display: true,
                    gridLines: {
                        color: 'transparent'
                    }
                }]
            },
        },
        data: {
            labels: array2,
            datasets: [
                {
                    label: "ETHUSD Rate ",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(134, 77, 217, 0.88)",
                    borderColor: "rgba(134, 77, 217, 088)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [{{$sat[0]->ETH}}, {{$sat[1]->ETH}}, {{$sat[2]->ETH}}, {{$sat[3]->ETH}}, {{$sat[4]->ETH}}, {{$sat[5]->ETH}}, {{$sat[6]->ETH}}],
                    spanGaps: false
                }
            ]
        }
    });

    
    var BARCHART1 = $('.barChar4');
    var barChartHome = new Chart(BARCHART1, {
        type: 'bar',
        options:
        {
            scales:
            {
                xAxes: [{
                    display: true,
                    barPercentage: 0.2
                }],
                yAxes: [{
                    
                    display: false
                }],
            },
            legend: {
                display: false
            }
        },
        data: {
            labels:array2 ,
            datasets: [
                {
                    label: "USDTUSD",
                    backgroundColor: [
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99'
                    ],
                    borderColor: [
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99'
                    ],
                    borderWidth: 0.3,
                    data: [{{$sat[0]->USDT}}, {{$sat[1]->USDT}}, {{$sat[2]->USDT}}, {{$sat[3]->USDT}}, {{$sat[4]->USDT}}, {{$sat[5]->USDT}}, {{$sat[6]->USDT}}],
                }
            ]
        }
    });
    var BARCHART11 = $('.barChar41');
    var barChartHome1 = new Chart(BARCHART11, {
        type: 'bar',
        options:
        {
            scales:
            {
                xAxes: [{
                    display: true,
                    barPercentage: 0.2
                }],
                yAxes: [{
                    
                    display: false
                }],
            },
            legend: {
                display: false
            }
        },
        data: {
            labels:array2 ,
            datasets: [
                {
                    label: "SIBUSD",
                    backgroundColor: [
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99'
                    ],
                    borderColor: [
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99',
                        '#EF8C99'
                    ],
                    borderWidth: 0.3,
                    data: [{{$sat[0]->SIB}}, {{$sat[1]->SIB}}, {{$sat[2]->SIB}}, {{$sat[3]->SIB}}, {{$sat[4]->SIB}}, {{$sat[5]->SIB}}, {{$sat[6]->SIB}}],
                }
            ]
        }
    });

var dps = [];
var chart = new CanvasJS.Chart("chartContainer1", {
  exportEnabled: true,
  title :{
    text: "Dynamic Spline Chart"
  },
  data: [{
    type: "spline",
    markerSize: 0,
    dataPoints: dps 
  }]
});

var xVal = 0;
var yVal = 100;
var updateInterval = 1000;
var dataLength = 50; // number of dataPoints visible at any point

var updateChart = function (count) {
  count = count || 1;
  // count is number of times loop runs to generate random dataPoints.
  for (var j = 0; j < count; j++) { 
    yVal = yVal + Math.round(5 + Math.random() *(-5-5));
    dps.push({
      x: xVal,
      y: yVal
    });
    xVal++;
  }
  if (dps.length > dataLength) {
    dps.shift();
  }
  chart.render();
};

updateChart(dataLength); 
setInterval(function(){ updateChart() }, updateInterval); 

}
});

$(function() {
    $('marquee').mouseover(function() {
        $(this).attr('scrollamount',0);
    }).mouseout(function() {
         $(this).attr('scrollamount',5);
    });
});

</script>
  @endsection