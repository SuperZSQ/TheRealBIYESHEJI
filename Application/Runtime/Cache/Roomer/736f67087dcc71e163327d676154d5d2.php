<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>房间宣传管理</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 房间宣传管理</strong> </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>

                <th>房间类型</th>
                <th>房间介绍</th>
                <th>房间图片路径</th>
                <th>操作</th>
            </tr>
            <tbody>
            <?php if(is_array($param)): foreach($param as $key=>$a): ?><tr>
                    <td align="center"><?php echo ($a["room_category"]); ?></td>
                    <td align="center"><?php echo ($a["room_description"]); ?></td>
                    <td align="center"><?php echo ($a["room_pictures"]); ?></td>
                    <td align="center">
                        <a href="<?php echo U('roommanager/edit_room_show?room_category='.$a[room_category]);?>">更改</a>
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