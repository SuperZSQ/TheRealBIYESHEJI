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
        <div class="panel-head"><strong class="icon-reorder"> 客人目录</strong> </div>
        <div class="padding border-bottom">
            <ul class="123" style="padding-left:10px;">
                <form name="search" action="<?php echo U('usermanager/recordFinder');?>" method="post">
                    <input type="text"  name="keyword" class="input" style="width:200px; line-height:17px;display:inline-block" placeholder="关键词" />
                    <a name="submit" href="javascript:void(0)" class="button border-main icon-search" onclick="javascript:document.search.submit()" >搜索</a></form>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th width="100" style="text-align:left; padding-left:20px;">用户ID</th>
                <th>账户</th>
                <th>真实姓名</th>
                <th>身份证号</th>
                <th>密码</th>
                <th>手机号</th>
                <th >邮箱</th>
                <th>注册时间</th>
                <th >用户安全状态</th>
                <th>操作</th>
            </tr>
            <tbody>
            <?php if(is_array($param)): foreach($param as $key=>$a): ?><tr>
                    <td align="center"><?php echo ($a["user_id"]); ?></td>
                    <td align="center"><?php echo ($a["user_nickname"]); ?></td>
                    <td align="center"><?php echo ($a["user_name"]); ?></td>
                    <td align="center"><?php echo ($a["user_idcard"]); ?></td>
                    <td align="center"><?php echo ($a["user_password"]); ?></td>
                    <td align="center"><?php echo ($a["user_mobile"]); ?></td>
                    <td align="center"><?php echo ($a["user_email"]); ?></td>
                    <td align="center"><?php echo ($a["regtime"]); ?></td>
                    <td align="center"><?php echo ($a["user_status"]); ?></td>
                    <td align="center">
                        <a href="<?php echo U('usermanager/edit_user_status?user_id='.$a[user_id]);?>">更改状态</a>
                    </td>
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