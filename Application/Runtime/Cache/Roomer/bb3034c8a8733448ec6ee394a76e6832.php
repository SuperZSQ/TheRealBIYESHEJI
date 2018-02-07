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
    <div class="panel-head"><strong><span class="icon-key"></span> 修改员工密码</strong></div>
    <div class="body-content">
        <form action="<?php echo U('self/update_pass');?>" method="post" class="form-x" >
            <div class="form-group">
                <div class="label">
                    <label for="sitename">工号：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($roomer_id); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">原始密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input w50" id="mpass" name="old_pass" size="50" placeholder="请输入原始密码" data-validate="required:请输入原始密码" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">新密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input w50" name="new_pass" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=6:新密码不能小于6位" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">确认新密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input w50" name="new_pass1" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#new_pass:两次输入的密码不一致" />
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input class="button bg-main icon-check-square-o" type="submit"/>
                </div>
            </div>
        </form>
        </form></div>
</div>
</body></html>