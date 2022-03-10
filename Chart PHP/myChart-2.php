<!-- Chart.js 3.5.0-->
<script src="https://unpkg.com/chart.js@3.5.0/dist/chart.min.js"></script>

<!-- 2 全體國民教育程度 pie-->
<div class="chart-box mb-3 py-3">

<div class="chart-header">
  <h3 class="title">全體國民教育程度</h3>
</div>

<div class="chart-body">
  <canvas id="myChart-2"></canvas>
  <script>
    var ctx = document.getElementById('myChart-2');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['博士','碩士', '學士', '專科', '高中', '國中(含)以下'],
        datasets: [{
          backgroundColor: [
          'rgba(75, 192, 192, 0.9)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(75, 192, 192, 0.5)',
          'rgba(75, 192, 192, 0.4)',
          'rgba(75, 192, 192, 0.3)',
          'rgba(75, 192, 192, 0.2)',
          ],
          borderColor: 'rgba(75, 192, 192)',
          borderWidth: 1,
          label: '教育程度',
          data: [189, 2076, 7887,3687, 691, 145],
          fill: false, // 是否填滿色彩
          hoverOffset: 10,
        }]
      },
      options: {
        layout: {
                      padding: {
                        bottom: 10
                      }
                    },
        legend: {
          labels: {
            fontColor: 'white' // 標籤顏色 
          }
        }
      }
    });
  </script>
</div>
<!-- end chart-body -->

</div>
<!-- end chart-box -->