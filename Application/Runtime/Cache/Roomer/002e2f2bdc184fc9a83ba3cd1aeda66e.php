<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 风控模块</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="<?php echo U('usermanager/edit_user');?>">
            <div class="form-group">
                <center> <h1>客户安全状态修改</h1></center>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>客户号：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="mpass" value="<?php echo ($info['user_id']); ?>" name="user_id" readonly size="30" />
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>真实姓名：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="mpass" value="<?php echo ($info['user_name']); ?>" name="user_name" readonly size="30" />
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>身份证：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="mpass" value="<?php echo ($info['user_idcard']); ?>" name="user_IDcard" readonly size="30" />
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>状态码：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <div class="field">
                            <label style="line-height:33px;">
                                <div class="section">
                                    <select id="instatus_change"  name="instatus_change" style="width:7%;height: 30px">
                                        <option value="NULL">请选择</option>
                                        <option value="正常">正常</option>
                                        <option value="黑名单">黑名单</option>
                                    </select>
                                </div>
                            </label>
                        </div>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input class="button bg-main icon-check-square-o" type="submit" value="更改"/>
                </div>
            </div>

            <div class="form-group">
                <!-- <div class="label">
                 </div>
                 <button class="button bg-main icon-check-square-o" type="submit"> 修改</button>
             </div>-->
        </form>
    </div>
</div>
</body></html>