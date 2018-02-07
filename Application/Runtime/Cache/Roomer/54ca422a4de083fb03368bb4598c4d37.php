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
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 商品管理</strong> </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">

            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>商品号</th>
                <th>商品名</th>
                <th>价格</th>
                <th>库存</th>
                <th>操作</th>
            </tr>
            <tbody>
            <?php if(is_array($param)): foreach($param as $key=>$a): ?><tr>
                    <td align="center"><?php echo ($a["production_id"]); ?></td>
                    <td align="center"><?php echo ($a["production_name"]); ?></td>
                    <td align="center"><?php echo ($a["production_price"]); ?></td>
                    <td align="center"><?php echo ($a["production_number"]); ?></td>
                    <td align="center">
                        <a href="<?php echo U('production/edit_production?production_id='.$a[production_id]);?>">编辑</a>
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