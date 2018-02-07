<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>修改房间介绍</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 房间介绍</strong></div>
    <form action="<?php echo U('Index/infoupload');?>" method="post"style="overflow: hidden;clear: both;" enctype="multipart/form-data">

    </form>
    <div class="body-content">
        <form action="<?php echo U('Index/infoupload');?>" method="post"style="overflow: hidden;clear: both;" enctype="multipart/form-data">
        </form>
        <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo U('roommanager/edit_roomshows');?>">
            <div class="form-group">
                <center> <h1>房间介绍</h1></center>
            </div>
            <!--<div class="form-group">
                <div class="label">
                    <label>员工工号：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="mpass" value="<?php echo ($info['employe_id']); ?>" name="r_order_id" readonly size="30" />
                    </label>
                </div>
            </div>-->
            <div class="form-group">
                <div class="label">
                    <label>房间类型：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="room_category" name="room_category"  value="<?php echo ($info['room_category']); ?>" readonly size="30" />
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>房间介绍：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <input type="text" class="input w50" id="room_description" name="room_description"  value="<?php echo ($info['room_description']); ?>"  size="30" />
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>房间图片：</label>
                </div>
                <div class="field">
                    <div class="contact_r col-md-4">
                        <label class="contact_rc contact_file"><span><input class="inp_zj2" type="file" name="photo"   onchange="document.getElementById('fileurl').value=this.value"></span></label>
                        <input type="hidden" name="fileurl" id="fileurl">
                    </div>
                    </label>
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

            <div class="form-group">
                <!-- <div class="label">
                 </div>
                 <button class="button bg-main icon-check-square-o" type="submit"> 修改</button>
             </div>-->
        </form>
    </div>
</div>
</body></html>