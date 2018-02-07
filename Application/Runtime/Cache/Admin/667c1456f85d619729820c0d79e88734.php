<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>操作日志</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 今日操作日志</strong> </div>
        <div class="padding border-bottom">

        </div>
        <table class="table table-hover text-center">
            <tr>
                <th >序号</th>
                <th >订单号</th>
                <th>房间号</th>
                <th>操作</th>
                <th>操作时间</th>
            </tr>
            <tbody>
            <?php if(is_array($param)): foreach($param as $key=>$a): ?><tr>
                    <td align="center"><?php echo ($num++); ?></td>
                    <td align="center"><?php echo ($a["order_id"]); ?></td>
                    <td align="center"><?php echo ($a["room_id"]); ?></td>
                    <td align="center"><?php echo ($a["operation"]); ?></td>
                    <td align="center"><?php echo ($a["time"]); ?></td>
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