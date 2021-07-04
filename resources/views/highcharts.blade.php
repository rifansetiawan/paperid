<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
</head>   
<body>
    <div class="container mt-5">
    <div id="container" style="height: 400px"></div>
    </div>
</body>

<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/export-data.js"></script>


<script type="text/javascript">

   var transactions =  <?php echo json_encode($transactions) ?>;
   var obj = transactions.map((element)=>({amount:element.amount, created_at: element.created_at}))
//    transactions.map(({amount, created_at}) => ({amount, created_at})
//    var transactions =  <?php echo json_encode('https://demo-live-data.highcharts.com/aapl-v.json') ?>;
    let result = obj.map(a =>  [ new Date(a.created_at).getTime(),a.amount]);
    // create the chart
    // var result = Object.keys(obj).map((key) => [Number(key), obj[key]]);
    // console.log(result)
    Highcharts.stockChart('container', {
        chart: {
            alignTicks: false
        },

        rangeSelector: {
            selected: 1
        },

        title: {
            text: 'Transaction Summary'
        },
        yAxis:{
      labels: {
        formatter: function() {
          if ( this.value > 1000 ) return Highcharts.numberFormat( this.value/1000, 0) + "k";  // maybe only switch if > 1000
          return Highcharts.numberFormat(this.value,0);
        }                
      }
  },

        series: [{
            
            type: 'column',
            name: 'Transaction Summary',
            data: result,
            dataGrouping: {
                units: [[
                    'week', // unit name
                    [1] // allowed multiples
                ], [
                    'month',
                    [1, 2, 3, 4, 6]
                ]]
            }
        }]
    });
// Highcharts.getJSON(result, function (data) {
//     console.log(data);
// // create the chart
    
// });
</script>
</html>