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
    <link rel="stylesheet" href="/hotel/Public/css/buy.css">
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
    <script src="/hotel/Public/js/buy.js"></script></head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-key"></span> 商品售卖</strong></div>
    <div class="body-content">
        <form action="<?php echo U('productionorder/info');?>" method="post" class="form-x" >
            <div class="form-group">
                <div class="label">
                    <label for="sitename">客人房间：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="room_id" name="room_id"  placeholder="客人房间"  />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">纯净水 ￥<?php echo ($water_price); ?>：</label>
                </div>
                <div class="field">
                    <p class="cart-number-box">
                                    <input type="text" value="0" name="water" data-min="0" data-max="10" data-step="1">
                                    <i class="up input-num-up">+</i>
                                    <i class="down input-num-down">-</i>
                                </p>库存<?php echo ($water_number); ?>件
                </div>
            </div>
               <div class="form-group">
                   <div class="label">
                       <label for="sitename">方便面 ￥<?php echo ($noodles_price); ?>：</label>
                   </div>
                   <div class="field">
                       <p class="cart-number-box">
                           <input type="text" value="0" name="noodles" data-min="0" data-max="10" data-step="1">
                           <i class="up input-num-up">+</i>
                           <i class="down input-num-down">-</i>
                       </p>库存<?php echo ($noodles_number); ?>件
                   </div>
               </div>
               <div class="form-group">
                   <div class="label">
                       <label for="sitename">牙膏 ￥<?php echo ($toothpaste_price); ?>：</label>
                   </div>
                   <div class="field">
                       <p class="cart-number-box">
                           <input type="text" value="0" name="toothpaste" data-min="0" data-max="10" data-step="1">
                           <i class="up input-num-up">+</i>
                           <i class="down input-num-down">-</i>
                       </p>库存<?php echo ($toothpaste_number); ?>件
                   </div>
               </div>
               <div class="form-group">
                   <div class="label">
                       <label for="sitename">牙刷 ￥<?php echo ($brush_price); ?>：</label>
                   </div>
                   <div class="field">
                       <p class="cart-number-box">
                           <input type="text" value="0" name="brush" data-min="0" data-max="10" data-step="1">
                           <i class="up input-num-up">+</i>
                           <i class="down input-num-down">-</i>
                       </p>库存<?php echo ($brush_number); ?>件
                   </div>
               </div>
               <div class="form-group">
                   <div class="label">
                       <label for="sitename">毛巾 ￥<?php echo ($towel_price); ?>：</label>
                   </div>
                   <div class="field">
                       <p class="cart-number-box">
                           <input type="text" value="0" name="towel" data-min="0" data-max="10" data-step="1">
                           <i class="up input-num-up">+</i>
                           <i class="down input-num-down">-</i>
                       </p>库存<?php echo ($towel_number); ?>件
                   </div>
               </div>


            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input class="button bg-main icon-check-square-o" type="submit" value="购买"/>
                </div>
            </div>
        </form></div>
</div>
</body></html>