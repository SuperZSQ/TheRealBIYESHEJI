<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>改签搜索页</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 改签搜索页</strong> </div>
        <div class="padding border-bottom">

        </div>
        <table class="table table-hover text-center">
            <tr>
                <th width="22" align="center"><input name='chkall' type='checkbox'  onclick='selectcheckbox(this.form)' value='check'></th>
                <th >订单号</th>
                <th>房间号</th>
                <th>入住人</th>
                <th>入住时间</th>
                <th>退房时间</th>
                <th >入住状态</th>
                <th>订单状态</th>
                <th>订单时间</th>
                <th>操作</th>
            </tr>
            <tbody>
            <?php if(is_array($param)): foreach($param as $key=>$a): ?><tr>
                    <td width="22" align="center">
                        <input name="id[]" type="checkbox" id="id[]" value="<?php echo ($a["r_order_id"]); ?>">
                    </td>
                    <td align="center"><?php echo ($a["r_order_id"]); ?></td>
                    <td align="center"><?php echo ($a["room_id"]); ?></td>
                    <td align="center"><?php echo ($a["user_name"]); ?></td>
                    <td align="center"><?php echo ($a["starttime"]); ?></td>
                    <td align="center"><?php echo ($a["endtime"]); ?></td>
                    <td align="center"><?php echo ($a["instatus"]); ?></td>
                    <td align="center"><?php echo ($a["order_status"]); ?></td>
                    <td align="center"><?php echo ($a["order_time"]); ?></td>
                    <td align="center">
                        <a href="<?php echo U('roomorder/edit_replace?r_order_id='.$a[r_order_id]);?>">改签</a> |
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