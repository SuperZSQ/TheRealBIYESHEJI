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
    <div class="panel-head"><strong><span class="icon-key"></span> 办理入住</strong></div>
    <div class="body-content">
        <form action="<?php echo U('roomorder/start_stay');?>" method="post" class="form-x" >
            <div class="form-group">
                <div class="label">
                    <label for="sitename">姓名：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="user_name" name="user_name" size="50" placeholder="客人姓名"  />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">身份证：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="user_idcard" size="50" placeholder="客人身份证号"  />
                </div>
            </div>


            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input class="button bg-main icon-check-square-o" type="submit" value="搜索"/>
                </div>
            </div>
        </form>
        </form></div>
</div>
</body></html>