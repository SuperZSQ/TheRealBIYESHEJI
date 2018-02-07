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
    <script  src="/hotel/Public/js/global.js"></script>
</head>
<body>

    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 员工花名册</strong> </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li>
                    <a href="<?php echo U('employemanager/add_employe');?>" class="button border-main icon-search"  > 新增员工</a></li>
                    <div align="right">
                        <a  href="javascript:void(0)" class="button border-main " onclick="javascript:document.action.submit()">批量删除</a>
                    </div> </li>
            </ul>
        </div>
        <form action="<?php echo U('employemanager/deleteSelect');?>" method="post" name="action">
        <table class="table table-hover text-center">
            <tr>
                <th width="22" align="center"><input name='chkall' type='checkbox'  onclick='selectcheckbox(this.form)' value='check'></th>
                <th width="40" align="center">编号</th>
                <th width="100" style="text-align:left; padding-left:20px;">工号</th>
                <th>姓名</th>
                <th>身份证号</th>
                <th>密码</th>
                <th>生日</th>
                <th>手机号</th>
                <th >地址</th>
                <th>操作</th>
            </tr>
            <tbody>
            <?php if(is_array($param)): foreach($param as $key=>$a): ?><tr>
                    <td width="22" align="center">
                        <input name="id[]" type="checkbox" id="id[]" value="<?php echo ($a["employe_id"]); ?>">
                    </td>
                    <td width="40" align="center"><?php echo ($num++); ?></td>

                    <td align="center"><?php echo ($a["employe_id"]); ?></td>
                    <td align="center"><?php echo ($a["employe_name"]); ?></td>
                    <td align="center"><?php echo ($a["employe_idcard"]); ?></td>
                    <td align="center"><?php echo ($a["employe_password"]); ?></td>
                    <td align="center"><?php echo ($a["employe_birthday"]); ?></td>
                    <td align="center"><?php echo ($a["employe_mobile"]); ?></td>
                    <td align="center"><?php echo ($a["employe_address"]); ?></td>
                    <td align="center">
                        <a href="<?php echo U('employemanager/edit_employe?employe_id='.$a[employe_id]);?>">编辑</a> |
                        <a href="<?php echo U('employemanager/delete_employe?employe_id='.$a[employe_id]);?>" onclick="return confirm('确认删除？')">删除</a>
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