<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="/hotel/Public/chart/Chart.bundle.js"></script>
    <script src="/hotel/Public/chart/utils.js"></script>
    <script type="text/javascript">

        var config = {
            type:'line',
            data:{
                labels: ["<?php echo ($yearArray[11]); ?>-<?php echo ($monthArray[11]); ?>","<?php echo ($yearArray[10]); ?>-<?php echo ($monthArray[10]); ?>","<?php echo ($yearArray[9]); ?>-<?php echo ($monthArray[9]); ?>","<?php echo ($yearArray[8]); ?>-<?php echo ($monthArray[8]); ?>","<?php echo ($yearArray[7]); ?>-<?php echo ($monthArray[7]); ?>",
                    "<?php echo ($yearArray[6]); ?>-<?php echo ($monthArray[6]); ?>","<?php echo ($yearArray[5]); ?>-<?php echo ($monthArray[5]); ?>","<?php echo ($yearArray[4]); ?>-<?php echo ($monthArray[4]); ?>","<?php echo ($yearArray[3]); ?>-<?php echo ($monthArray[3]); ?>","<?php echo ($yearArray[2]); ?>-<?php echo ($monthArray[2]); ?>","<?php echo ($yearArray[1]); ?>-<?php echo ($monthArray[1]); ?>","<?php echo ($yearArray[0]); ?>-<?php echo ($monthArray[0]); ?>"],
                datasets:[
                    {
                        label: "单人豪华房",
                        data :["<?php echo ($LuxurySingle[11]); ?>","<?php echo ($LuxurySingle[10]); ?>","<?php echo ($LuxurySingle[9]); ?>","<?php echo ($LuxurySingle[8]); ?>","<?php echo ($LuxurySingle[7]); ?>","<?php echo ($LuxurySingle[6]); ?>","<?php echo ($LuxurySingle[5]); ?>","<?php echo ($LuxurySingle[4]); ?>","<?php echo ($LuxurySingle[3]); ?>","<?php echo ($LuxurySingle[2]); ?>","<?php echo ($LuxurySingle[1]); ?>","<?php echo ($LuxurySingle[0]); ?>"],
                        backgroundColor: window.chartColors.red,
                        borderColor: window.chartColors.red,
                        fill: false
                    },
                    {
                        label: "豪华双人房",
                        data :[ "<?php echo ($LuxuryDouble[11]); ?>","<?php echo ($LuxuryDouble[10]); ?>","<?php echo ($LuxuryDouble[9]); ?>","<?php echo ($LuxuryDouble[8]); ?>","<?php echo ($LuxuryDouble[7]); ?>","<?php echo ($LuxuryDouble[6]); ?>","<?php echo ($LuxuryDouble[5]); ?>","<?php echo ($LuxuryDouble[4]); ?>","<?php echo ($LuxuryDouble[3]); ?>","<?php echo ($LuxuryDouble[2]); ?>","<?php echo ($LuxuryDouble[1]); ?>","<?php echo ($LuxuryDouble[0]); ?>"],
                        backgroundColor: window.chartColors.green,
                        borderColor: window.chartColors.green,
                        fill: false
                    },
                    {
                        label: "标准单人房",
                        data :["<?php echo ($StandardSingle[11]); ?>","<?php echo ($StandardSingle[10]); ?>","<?php echo ($StandardSingle[9]); ?>","<?php echo ($StandardSingle[8]); ?>","<?php echo ($StandardSingle[7]); ?>","<?php echo ($StandardSingle[6]); ?>","<?php echo ($StandardSingle[5]); ?>","<?php echo ($StandardSingle[4]); ?>","<?php echo ($StandardSingle[3]); ?>","<?php echo ($StandardSingle[2]); ?>","<?php echo ($StandardSingle[1]); ?>","<?php echo ($StandardSingle[0]); ?>"],
                        backgroundColor: window.chartColors.yellow,
                        borderColor: window.chartColors.yellow,
                        fill: false
                    },
                    {
                        label: "标准双人房",
                        data :[ "<?php echo ($StandardDouble[11]); ?>","<?php echo ($StandardDouble[10]); ?>","<?php echo ($StandardDouble[9]); ?>","<?php echo ($StandardDouble[8]); ?>","<?php echo ($StandardDouble[7]); ?>","<?php echo ($StandardDouble[6]); ?>","<?php echo ($StandardDouble[5]); ?>","<?php echo ($StandardDouble[4]); ?>","<?php echo ($StandardDouble[3]); ?>","<?php echo ($StandardDouble[2]); ?>","<?php echo ($StandardDouble[1]); ?>","<?php echo ($StandardDouble[0]); ?>"],
                        backgroundColor: window.chartColors.blue,
                        borderColor: window.chartColors.blue,
                        fill: false
                    }
                ]

            },
            options: {
                responsive: true,
                title:{
                    display: true,
                    text: '近一年来四个不同类型的客房收益分析'
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            drawBorder: true,
                            color: ['pink', 'red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'purple','gray']
                        },
                        ticks: {
                            min: 0,
                            max: 3000,
                            stepSize: 300
                        }
                    }]
                }
            }
        };
        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

    </script>
    <title>后台管理系统</title>
</head>
<body>
<div style="width:100%;">
    <canvas id="canvas"></canvas>
</div>
</body>
</html>