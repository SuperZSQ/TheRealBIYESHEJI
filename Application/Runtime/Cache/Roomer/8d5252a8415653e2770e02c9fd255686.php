<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
    <div class="panel-head"><strong class="icon-reorder"> 房间订单</strong> </div>
    <div class="padding border-bottom">
        <ul class="123" style="padding-left:10px;">
            <form name="search" action="<?php echo U('usermanager/record_orders');?>" method="post">
                <input type="text"  name="keyword" class="input" style="width:200px; line-height:17px;display:inline-block" placeholder="房间类型/姓名/身份证号" />
                <a name="submit" href="javascript:void(0)" class="button border-main icon-search" onclick="javascript:document.search.submit()" >搜索</a></form>
        </ul>
    </div>

    <table class="table table-hover text-center">
        <tr>
            <th width="100" style="text-align:left; padding-left:20px;">订单号</th>
            <th>房间号</th>
            <th>房间类型</th>
            <th>真实姓名</th>
            <th>身份证号</th>
            <th>入住时间</th>
            <th>退房时间</th>
            <th>离店时间</th>
            <th>订单时间</th>
            <th>金额</th>
            <th>实收款</th>
            <th >入住状态</th>
            <th >订单状态</th>
            <th>操作员</th>
            <!-- <th>操作</th>-->
        </tr>
        <tbody>
        <?php if(is_array($param)): foreach($param as $key=>$a): ?><tr>
                <td align="center"><?php echo ($a["r_order_id"]); ?></td>
                <td align="center"><?php echo ($a["room_id"]); ?></td>
                <td align="center"><?php echo ($a["category"]); ?></td>
                <td align="center"><?php echo ($a["user_name"]); ?></td>
                <td align="center"><?php echo ($a["user_idcard"]); ?></td>
                <td align="center"><?php echo ($a["starttime"]); ?></td>
                <td align="center"><?php echo ($a["endtime"]); ?></td>
                <td align="center"><?php echo ($a["out_time"]); ?></td>
                <td align="center"><?php echo ($a["order_time"]); ?></td>
                <td align="center"><?php echo ($a["price"]); ?></td>
                <td align="center"><?php echo ($a["real_money"]); ?></td>
                <td align="center"><?php echo ($a["instatus"]); ?></td>
                <td align="center"><?php echo ($a["order_status"]); ?></td>
                <td align="center"><?php echo ($a["operator"]); ?></td>
                <!--  <td>
                  <a href="<?php echo U('employemanager/edit_employe?employe_id='.$a[employe_id]);?>">更改状态</a>
              </td>-->
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