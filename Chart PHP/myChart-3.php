<!-- Chart.js 3.5.0-->
<script src="https://unpkg.com/chart.js@3.5.0/dist/chart.min.js"></script>

<!-- 3 全國各級教育程度性別人數 two-bar-->
<div class="chart-box mb-3 py-3">

<div class="chart-header">
  <h3 class="title">全國各級教育程度性別人數</h3>
</div>

<div class="chart-body">
  <canvas id="myChart-3"></canvas>
  <script>
    var ctx = document.getElementById("myChart-3");
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['博士','碩士', '學士', '專科', '高中', '國中(含)以下'],
        datasets: [{
              label: '男性',
              data: [189, 2076, 7887,3687, 691, 145],
              backgroundColor: ['rgba(54, 162, 235, 0.5)'],
              borderColor: ['rgb(54, 162, 235)'],
              borderWidth: 1,
          },
          {
              label: '女性',
              data: [85, 1401, 8330, 3324, 609, 140],
              backgroundColor: ['rgba(255, 99, 132, 0.5)'],
              borderColor: ['rgb(255, 99, 132)'],
              borderWidth: 1,
          }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
            }
          }]
        }
      }
    });
  </script>
</div>
<!-- end chart-body -->

</div>
<!-- end chart-box -->