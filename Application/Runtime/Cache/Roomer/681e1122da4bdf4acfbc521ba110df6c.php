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
    <div class="panel-head"><strong><span class="icon-key"></span> 客房类型修改</strong></div>
    <div class="body-content">
        <form action="<?php echo U('roommanager/edit_roomcategory');?>" method="post" class="form-x" >
            <div class="form-group">
                <div class="label">
                    <label for="sitename" >房间号：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="room_id" name="room_id" size="30" placeholder="请输入房间号"  />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">房间类型：</label>
                </div>
                <div class="field">
                    <li class="span1_of_1 left">
                        <!----------start section_room----------->
                        <div class="section_room">
                            <select id="categories" name="categories"  style="width:13%;height: 35px">
                                <option value="null">选择房间类型</option>
                                <option value="StandardSingle">标准单人房</option>
                                <option value="StandardDouble">标准双人房</option>
                                <option value="LuxuriousSingle">豪华单人房</option>
                                <option value="LuxuriousDouble">豪华双人房</option>
                            </select>
                        </div>
                    </li>

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