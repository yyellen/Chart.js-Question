<!-- Chart.js 3.5.0-->
<script src="https://unpkg.com/chart.js@3.5.0/dist/chart.min.js"></script>

<!-- 4 全國縣市教育程度組成 stacked-bar-->
<div class="chart-box mb-3 py-3">

<div class="chart-header">
  <h3 class="title">全國縣市教育程度組成</h3>
</div>

<div class="chart-body">
  <canvas id="myChart-4"></canvas>
  <script>
    var ctx = document.getElementById("myChart-4");
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['基隆市','臺北市', '新北市', '桃園縣', '新竹市', '新竹縣', '苗栗縣', '臺中市', '彰化縣', '南投縣', '雲林縣', '嘉義市', '嘉義縣', '臺南市', '高雄市', '屏東縣', '臺東縣', '花蓮縣', '宜蘭縣', '澎湖縣', '金門縣', '連江縣'],
        datasets: [{
              label: '博士',
              data: [2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401],
              backgroundColor: ['rgba(75, 192, 192, 0.9)'],
              borderColor: ['rgb(75, 192, 192)'],
              borderWidth: 1,
          },
          {
              label: '碩士',
              data: [691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609],
              backgroundColor: ['rgba(75, 192, 192, 0.7)'],
              borderColor: ['rgb(75, 192, 192)'],
              borderWidth: 1,
          },
          {
              label: '學士',
              data: [2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401,2076,1401],
              backgroundColor: ['rgba(75, 192, 192, 0.5)'],
              borderColor: ['rgb(75, 192, 192)'],
              borderWidth: 1,
          },
          {
              label: '專科',
              data: [691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609],
              backgroundColor: ['rgba(75, 192, 192, 0.4)'],
              borderColor: ['rgb(75, 192, 192)'],
              borderWidth: 1,
          },
          {
              label: '高中',
              data: [691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609],
              backgroundColor: ['rgba(75, 192, 192, 0.3)'],
              borderColor: ['rgb(75, 192, 192)'],
              borderWidth: 1,
          },
          {
              label: '國中(含)以下',
              data: [691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609,691,609],
              backgroundColor: ['rgba(75, 192, 192, 0.2)'],
              borderColor: ['rgb(75, 192, 192)'],
              borderWidth: 1,
          }]
      },
      options: {
        scales: {
          x: {
            stacked: true,
          },
          y: {
            stacked: true,
          },
        }
      }
    });
  </script>
</div>
<!-- end chart-body -->

</div>
<!-- end chart-box -->
