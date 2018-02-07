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

    <link rel="stylesheet" href="/hotel/Public/css/style.css" />
    <link rel="stylesheet" href="/hotel/Public/css/responsive.css" />
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-key"></span> 入住资料补充页</strong></div>
    <div class="body-content">
        <form action="<?php echo U('roomorder/submit_result');?>" method="post" class="form-x" >
            <input type="hidden" name="starttime" value="<?php echo ($starttime); ?>">
            <input type="hidden" name="endtime" value="<?php echo ($endtime); ?>">
            <input type="hidden" name="sum_price" value="<?php echo ($sum_price); ?>">
            <input type="hidden" name="category" value="<?php echo ($category); ?>">
            <div class="form-group">
                <div class="label">
                    <label for="sitename">可住数量：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($sum); ?>间
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">可入住房间号：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["room_id"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>

                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">房价单价：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($room_price); ?>元
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">入住日期：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($starttime); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">退房日期：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($endtime); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">入住天数：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($days); ?>天
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">总金额：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($sum_price); ?>元
                    </label>
                </div>
            </div>
            <div class="form-group" >
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
                    <input type="text" class="input w50" name="user_IDcard" size="50" placeholder="客人身份证号"  />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">入住房间号：</label>
                </div>
                <div class="field">
                    <select id="room_id"  name="room_id" style="width:10%;height: 33px">
                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["room_id"]); ?>"><?php echo ($vo["room_id"]); ?></option><?php endforeach; endif; ?>    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input class="button bg-main icon-check-square-o" type="submit" value="提交订单"/>
                </div>
            </div>
        </form>
        </form></div>
    <script type="text/javascript" src="/hotel/Public/js/jquery_ssk.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.ui_ssk.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/moment.min_ssk.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/stay_ssk.js"></script>
</div>
</body></html>