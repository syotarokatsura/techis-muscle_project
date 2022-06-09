<!DOCTYPE html>
<html lang="ja">

   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>体組成グラフ</title>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
       <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
   </head>

    <body>
        <h1>体組成グラフ</h1>

        <div class="chart-container">
            <div class="line-chart-container">
                <canvas id="line-Chart"></canvas>
            </div>
        </div>

        <!-- javascript グラフ描写-->

        <script>
            //ラベル
            var labels = 
            [
                "2022年1月",
                "2022年2月",
                "2022年3月",
                "2022年4月",
                "2022年5月",
                "2022年6月",
                "2022年7月",
                "2022年8月",
                "2022年9月",
                "2022年10月",
            ];
            //体重データ
            //var weight = [70,69,67,66,68,68,66,65,67,65]
            let weight = JSON.parse("<?php echo $data ?>");
            console.log(weight)

            //グラフを描画
            var ctx = document.getElementById("line-Chart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data : {                    
                    labels: labels,
                    datasets: [
                        {
                            label: '体重',
                            data: weight,
                            borderColor: "rgba(0,0,255,1)",
                            backgroundColor: "rgba(0,0,0,0)"
                        },
                    ]
                },
                options: { 
                    title: 
                    {
                        display: true,
                        text: '体重ログ'
                    }  
                }
            });  
        </script>
    </body>

</html>