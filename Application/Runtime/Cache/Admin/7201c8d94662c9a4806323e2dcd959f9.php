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
    <div class="panel-head"><strong><span class="icon-key"></span> 到店临时入住处理</strong></div>
    <div class="body-content">
        <form action="<?php echo U('roomorder/storepay_result');?>" method="post" class="form-x" >
            <div class="form-group">
                <div class="label">
                    <label for="sitename">入住时间：</label>
                </div>
                <div class="field">
                    <input type="text"   id="startDate"  name="startDate" class="input w50"  size="50"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">退房时间：</label>
                </div>
                <div class="field">
                    <input type="text"   id="endDate"  name="endDate" class="input w50"  size="50"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">房间类型：</label>
                </div>
                <div class="field">
                    <div class="field">
                        <label style="line-height:33px;">
                            <div class="section">
                                <select id="category"  name="category" style="width:10%;height: 33px">
                                    <option value="标准单人房">标准单人房</option>
                                    <option value="标准双人房">标准双人房</option>
                                    <option value="豪华单人房">豪华单人房</option>
                                    <option value="豪华双人房">豪华双人房</option>

                                </select>
                            </div>
                        </label>
                    </div>
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
    <script type="text/javascript" src="/hotel/Public/js/jquery_ssk.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.ui_ssk.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/moment.min_ssk.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/stay_ssk.js"></script>
</div>
</body></html>