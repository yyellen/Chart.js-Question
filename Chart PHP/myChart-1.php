<!-- Chart.js 3.5.0-->
<script src="https://unpkg.com/chart.js@3.5.0/dist/chart.min.js"></script>

<!-- 1 全國各級教育程度金字塔 pyramid-->
<div class="chart-box mb-3 py-3">

<div class="chart-header">
  <h3 class="title">全國各級教育程度金字塔</h3>
</div>

<div class="chart-body">
  <canvas id="myChart-1"></canvas>
  <script>
    var ctx = document.getElementById("myChart-1");

    // male datapoint converter 男性數據轉換為正值
    const male = [189, 2076, 7887,3687, 691, 145];
    const maleData = [];
    male.forEach(element => maleData.push(element * -1));
    // console.log(maleData);

    // block tooltip 男性tooltip轉換為正值
    const tooltip = {
      yAlign: 'bottom',
      titleAlign: 'center',
      callbacks: {
        label: function(context) {
          // console.log(context.raw);
          // console.log(context.dataset.label);
          return `${context.dataset.label} ${Math.abs(context.raw)}`;
        }
      }
    };

    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['博士','碩士', '學士', '專科', '高中', '國中(含)以下'],
        datasets: [{
              label: '男性',
              data: maleData,
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
        categoryPercentage: 1.0,
        barPercentage: 0.98,
        indexAxis: 'y',
        scales: {
          x: {
              stacked: true,
              ticks: {
                callback: function(value, index, values) {
                  return Math.abs(value);
                }
              }
          },
          y: {
                beginAtZero: true,
                stacked: true,
          },  
        },
        plugins: {
          tooltip,
        }
      }
    });
  </script>
</div>
<!-- end chart-body -->

</div>
<!-- end chart-box -->