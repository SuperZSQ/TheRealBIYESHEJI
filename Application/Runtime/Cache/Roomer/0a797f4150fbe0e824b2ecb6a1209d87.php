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
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 商品修改库存</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="<?php echo U('production/edit_productions');?>">
            <div class="form-group">
                <center> <h1>商品修改</h1></center>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>商品号：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="mpass" value="<?php echo ($info['production_id']); ?>" name="production_id"  readonly size="30" />
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>商品名：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="mpass" value="<?php echo ($info['production_name']); ?>"readonly name="production_name" size="30" />
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>价格：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="mpass" value="<?php echo ($info['production_price']); ?>" name="production_price" readonly size="30" />
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>库存：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="mpass" value="<?php echo ($info['production_number']); ?>" name="production_number"  size="30" />
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