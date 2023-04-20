<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
   
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <canvas id="myChart" style="height: 335x;width:793px;padding-bottom: 40px;"></canvas>

    <script>
const data = {
  labels: ['Q1', 'Q2', 'Q3', 'Q4'],
  datasets: [{
    label: 'Sales',
    data: [0,0.20,0.45,1],
    borderColor: 'rgb(255, 99, 132)',
    borderWidth: 1
  }]
};

const options = {
  scales: {
    y: {
        max: 1,
        min:0,
      ticks: {
        // beginAtZero: true,
        stepSize: 0.25,
        
        callback: function(value, index, values) {
          return (value * 1).toFixed(2);
        }
      }
    }
  }
};

const chart = new Chart('myChart', {
  type: 'line',
  data: data,
  options: options
});


    </script>

</body>
</html>