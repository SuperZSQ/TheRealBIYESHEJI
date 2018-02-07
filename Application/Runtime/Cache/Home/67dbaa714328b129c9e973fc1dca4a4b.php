<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
</head>
<script type="text/javascript">
    var now=new Date();
    now=DateTime.Now.ToString("yyyy-MM-dd HH:mm:ss");
    var order_time=
    if()
    var the_s = 60*10;//定义剩余时间, 必须用时间戳.单位为秒
    setInterval(promote,1000);//每秒执行一次下面的函数
    function promote() {
        var d = Math.floor((the_s / 3600) / 24);
        var g = Math.floor((the_s - d * 24 * 3600) / 3600);
        var e = Math.floor((the_s - d * 24 * 3600 - g * 3600) / 60);
        var f = (the_s - g * 3600) % 60;
        var html = "还剩<b>"  + e + "</b>分<b>" + f + "</b>秒";
        document.getElementById("divdown1").innerHTML = html;//这个id是你想要显示的div的id
        the_s--;
    }
</script>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 我的订单</strong> </div>
        <div class="padding border-bottom">
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th width="100" style="text-align:left; padding-left:20px;">订单号</th>
                <th>房间号</th>
                <th>房间类型</th>
                <th>入住人</th>
                <th>手机号</th>
                <th>入住时间</th>
                <th>退房时间</th>
                <th >金额</th>
                <th >入住状态</th>
                <th>订单状态</th>
                <th>订单时间</th>
                <th>操作</th>
            </tr>
            <tbody>
            <?php if(is_array($param)): foreach($param as $key=>$a): ?><tr>
                    <td align="center"><?php echo ($a["r_order_id"]); ?></td>
                    <td align="center"><?php echo ($a["room_id"]); ?></td>
                    <td align="center"><?php echo ($a["category"]); ?></td>
                    <td align="center"><?php echo ($a["user_name"]); ?></td>
                    <td align="center"><?php echo ($a["user_mobile"]); ?></td>
                    <td align="center"><?php echo ($a["starttime"]); ?></td>
                    <td align="center"><?php echo ($a["endtime"]); ?></td>
                    <td align="center"><?php echo ($a["price"]); ?></td>
                    <td align="center"><?php echo ($a["instatus"]); ?></td>
                    <td align="center"><?php echo ($a["order_status"]); ?></td>
                    <td align="center"><?php echo ($a["order_time"]); ?></td>
                    <td align="center">
                        <a href="<?php echo U('center/cancel_order?r_order_id='.$a[r_order_id]);?>" onclick="return confirm('确认取消？')">取消订单</a>
                    </td>
                </tr><?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</form>
</div>
<div class="clear"></div>
<div class="pager"><?php echo ($pageList); ?></div>
</div>

</body>
</html>