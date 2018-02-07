<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
</head>
<body>
<div id="main" style="height:600px;border:1px solid #ccc;padding:10px;"></div>
<div id="mainMap" style="height:600px;border:1px solid #ccc;padding:10px;"></div>


<script src="/hotel/Public/echarts/build/dist/echarts-all.js"></script>

<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('main'));
    myChart.setOption({
        title: {
            text: '顾客归类分析',
            subtext: '分析客户类型',
            x: 'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient: 'vertical',
            x:'left',
            data:['人群分布律']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: true},
                magicType : {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                data : ['50-60年代','60-70年代','70-80年代','80-90年代','90-00年代','00后']
            }
        ],
        yAxis : [
            {
                type : 'date',
                splitArea : {show : true}
            }
        ],
        series : [
            {
                name:'男',
                type:'bar',
                data:["<?php echo ($fifthMan); ?>","<?php echo ($sixMan); ?>","<?php echo ($sevenMan); ?>","<?php echo ($eightMan); ?>","<?php echo ($nineMan); ?>","<?php echo ($zeroMan); ?>"]
            },
            {
                name:'女',
                type:'bar',
                data:["<?php echo ($fifthMan); ?>","<?php echo ($sixWoman); ?>","<?php echo ($sevenWoman); ?>","<?php echo ($eightWoman); ?>","<?php echo ($nineWoman); ?>","<?php echo ($zeroWoman); ?>"]
            }
        ]
    });

    // --- 地图 ---
    var myChart2 = echarts.init(document.getElementById('mainMap'));
    myChart2.setOption({
        title: {
            text: '客户归属地省份分析',
            subtext: '用于分析客户来源',
            x: 'center'
        },

        tooltip : {
            trigger: 'item'
        },

        legend: {
            orient: 'vertical',
            x:'left',
            data:['顾客人群']
        },
        toolbox: {
            show: true,
            orient : 'vertical',
            x: 'left',
            y: 'center',
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        dataRange: {
            min : 0,
            max : 20,
            calculable : true,
            color: ['maroon','purple','red','orange','yellow','lightgreen']
        },
        roamController: {
            show: true,
            x: 'right',
            mapTypeControl: {
                'china': true
            }
        },

        series : [
            {
                name: '用户量',
                type: 'map',
                mapType: 'china',
                selectedMode : 'single',
                roam: false,
                itemStyle:{
                    normal:{label:{show:true}},
                    emphasis:{label:{show:true}}
                },
                data:[
                    {name: '北京',value: "<?php echo ($result['北京']); ?>" },
                    {name: '天津',value: "<?php echo ($result['天津']); ?>" },
                    {name: '上海',value: "<?php echo ($result['上海']); ?>" },
                    {name: '重庆',value: "<?php echo ($result['重庆']); ?>"},
                    {name: '河北',value: "<?php echo ($result['河北']); ?>"},
                    {name: '河南',value: "<?php echo ($result['河南']); ?>" },
                    {name: '云南',value: "<?php echo ($result['云南']); ?>" },
                    {name: '辽宁',value: "<?php echo ($result['辽宁']); ?>" },
                    {name: '黑龙江',value: "<?php echo ($result['黑龙江']); ?>" },
                    {name: '湖南',value: "<?php echo ($result['湖南']); ?>" },
                    {name: '安徽',value: "<?php echo ($result['安徽']); ?>" },
                    {name: '山东',value: "<?php echo ($result['山东']); ?>" },
                    {name: '新疆',value: "<?php echo ($result['新疆']); ?>" },
                    {name: '江苏',value: "<?php echo ($result['江苏']); ?>" },
                    {name: '浙江',value: "<?php echo ($result['浙江']); ?>" },
                    {name: '江西',value: "<?php echo ($result['江西']); ?>" },
                    {name: '湖北',value: "<?php echo ($result['湖北']); ?>" },
                    {name: '广西',value: "<?php echo ($result['广西']); ?>" },
                    {name: '甘肃',value: "<?php echo ($result['甘肃']); ?>"},
                    {name: '山西',value: "<?php echo ($result['山西']); ?>"},
                    {name: '内蒙古',value: "<?php echo ($result['内蒙古']); ?>"},
                    {name: '陕西',value: "<?php echo ($result['陕西']); ?>" },
                    {name: '吉林',value: "<?php echo ($result['吉林']); ?>"},
                    {name: '福建',value: "<?php echo ($result['福建']); ?>" },
                    {name: '贵州',value: "<?php echo ($result['贵州']); ?>"},
                    {name: '广东',value: "<?php echo ($result['广东']); ?>" },
                    {name: '青海',value: "<?php echo ($result['青海']); ?>"},
                    {name: '西藏',value: "<?php echo ($result['西藏']); ?>"},
                    {name: '四川',value: "<?php echo ($result['四川']); ?>" },
                    {name: '宁夏',value: "<?php echo ($result['宁夏']); ?>"},
                    {name: '海南',value: "<?php echo ($result['海南']); ?>"},
                    {name: '台湾',value: "<?php echo ($result['台湾']); ?>"},
                    {name: '香港',value: "<?php echo ($result['香港']); ?>"},
                    {name: '澳门',value: "<?php echo ($result['澳门']); ?>"}
                ]
            }
        ]
    });

    window.onresize = function() {
        myChart.resize();
        myChart2.resize();
    }
</script>
</body>
</html>