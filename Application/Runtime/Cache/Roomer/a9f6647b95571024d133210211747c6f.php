<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title>Pie Chart</title>
    <script src="/hotel/Public/chart/Chart.bundle.js"></script>
    <script src="/hotel/Public/chart/utils.js"></script>
    <script>
        var config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [
                        "<?php echo ($LuxurySingle); ?>",
                        "<?php echo ($LuxuryDouble); ?>",
                        "<?php echo ($StandardSingle); ?>",
                        "<?php echo ($StandardDouble); ?>"
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.blue,
                        window.chartColors.yellow,
                        window.chartColors.green,
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    "豪华单人房",
                    "豪华双人房",
                    "标准单人房",
                    "标准双人房"
                ]
            },
            options: {
                responsive: true,
                title:{
                    display: true,
                    text: '本月各房型的收入比例'
                }
            }
        };
        window.onload = function() {
            var ctx = document.getElementById("chart-area").getContext("2d");
            window.myPie = new Chart(ctx, config);
        };
    </script>
</head>

<body>
<center><div id="canvas-holder" style="width:40%">
    <canvas id="chart-area" ></canvas>
</div></center>


</body>

</html>