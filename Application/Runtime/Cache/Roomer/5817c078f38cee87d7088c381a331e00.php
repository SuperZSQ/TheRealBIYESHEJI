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
    <div class="panel-head"><strong><span class="icon-key"></span> 客房房价统一管理</strong></div>
    <div class="body-content">
        <form action="<?php echo U('roommanager/edit_roomprice');?>" method="post" class="form-x" >
            <div class="form-group">
                <div class="label">
                    <label for="sitename" >标准单人房：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="user_name" name="StandardSingle" size="50" value="<?php echo ($StandardSingle); ?>"  />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">标准双人房：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="StandardDouble" size="50" value="<?php echo ($StandardDouble); ?>"  />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">豪华单人房：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="LuxuriousSingle" size="50" value="<?php echo ($LuxuriousSingle); ?>"  />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">豪华双人房：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="LuxuriousDouble" size="50" value="<?php echo ($LuxuriousDouble); ?>" />
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input class="button bg-main icon-check-square-o" type="submit" value="修改"/>
                </div>
            </div>
        </form>
        </form></div>
</div>
</body></html>