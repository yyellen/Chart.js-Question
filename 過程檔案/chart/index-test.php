<!doctype html>
<html lang="en">
  <head>
    <title>Test PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Chart.js 3.5.0-->
    <script src="https://unpkg.com/chart.js@3.5.0/dist/chart.min.js"></script>

  </head>
  <body>
    <div class="main container">
      <!-- header -->
      <div class="header py-3">
        <h1>全國教育程度統計資料</h1>
        <p>資料來源：各村里教育程度資料 | 政府開放資料平台　統計年度：108年<br>
          分類說明：原始資料之教育程度分類
          1. 博畢、博肄合併為「博士」；
          2. 碩畢、碩肄合併為「碩士」；
          3. 大畢、大肄合併為「學士」；
          4. 二畢、二肄、後二畢、後二肄合併為「專科」；
          5. 高畢、高肄、職畢、職肄、前三畢、前三肄合併為「高中」；
          6. 國畢、國肄、初畢、初肄、小畢、小肄、自修、不識合併為「國中(含)以下」。</p>

        <!-- 區域下拉式選單 -->
        <div class="mb-3">
          <select name="" id="">
            <option value="">全國總覽</option>
            <option value="">基隆市</option>
            <option value="">臺北市</option>
            <option value="">新北市</option>
            <option value="">桃園縣</option>
            <option value="">新竹市</option>
            <option value="">新竹縣</option>
            <option value="">苗栗縣</option>
            <option value="">臺中市</option>
            <option value="">彰化縣</option>
            <option value="">南投縣</option>
            <option value="">雲林縣</option>
            <option value="">嘉義市</option>
            <option value="">嘉義縣</option>
            <option value="">臺南市</option>
            <option value="">高雄市</option>
            <option value="">屏東縣</option>
            <option value="">臺東縣</option>
            <option value="">花蓮縣</option>
            <option value="">宜蘭縣</option>
            <option value="">澎湖縣</option>
            <option value="">金門縣</option>
            <option value="">連江縣</option>
          </select>
        </div>
      
      </div>
      <!-- end header -->

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

      <div class="row">
        <div class="col-md-4">
          <!-- 2 全國各級教育程度組成 pie-->
          <div class="chart-box mb-3 py-3">

            <div class="chart-header">
              <h3 class="title">全國各級教育程度組成</h3>

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
        </div>
        <div class="col-md-8">
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
        </div>
      </div>

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

  </div>
  <!-- end main -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

<style>


</style>