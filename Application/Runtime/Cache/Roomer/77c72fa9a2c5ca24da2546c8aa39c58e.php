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
<body>

    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 商品订单</strong> </div>

        <table class="table table-hover text-center">
            <tr>
                <th width="100" style="text-align:left; padding-left:20px;">订单号</th>
                <th>用户ID</th>
                <th>清单</th>
                <th>总价</th>
                <th>下单时间</th>
                <th>操作员</th>
            </tr>
            <tbody>
            <?php if(is_array($param)): foreach($param as $key=>$a): ?><tr>
                    <td align="center"><?php echo ($a["p_order_id"]); ?></td>
                    <td align="center"><?php echo ($a["user_id"]); ?></td>
                    <td align="center"><?php echo ($a["description"]); ?></td>
                    <td align="center"><?php echo ($a["sum"]); ?></td>
                    <td align="center"><?php echo ($a["pay_time"]); ?></td>
                    <td align="center"><?php echo ($a["operator"]); ?></td>
                </tr><?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>

</div>
<div class="clear"></div>
<div class="pager"><?php echo ($pageList); ?></div>
</div>

</body>
</html>