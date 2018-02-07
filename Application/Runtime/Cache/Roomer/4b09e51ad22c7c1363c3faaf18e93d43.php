<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>数据备份</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
    <script  src="/hotel/Public/js/global.js"></script>
</head>
<body>

<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 数据备份</strong> </div>
    <div class="padding border-bottom">
        <ul class="search" style="padding-left:10px;">
            <li> <div align="right">
                <a href=" /hotel/index.php/Roomer/self/dbsave?Action=backup" class="button border-main ">备份数据</a>
                <a  href="javascript:void(0)" class="button border-main " onclick="javascript:document.action.submit()">批量删除</a>
            </div> </li>
        </ul>
    </div>
    <form action="<?php echo U('self/deleteSelect');?>" method="post" name="action">
        <table class="table table-hover text-center">
            <tr>
                <th width="22" align="center"><input name='chkall' type='checkbox'  onclick='selectcheckbox(this.form)' value='check'></th>
                <th align="center">序号</th>
                <th align="center">文件名</th>
                <th align="center">备份时间</th>
                <th align="center">文件大小</th>
                <th align="center">操作</th>
            </tr>
            <tbody>
            <?php if(!empty($lists)): if(is_array($lists)): foreach($lists as $key=>$row): if($key > 1): ?><tr>
                            <td width="22" align="center">
                                <input name="id[]" type="checkbox" id="id[]" value="<?php echo ($row); ?>">
                            </td>
                            <td align="center"><?php echo ($key-1); ?></td>
                            <td align="center"><a href="<?php echo U('self/dbsave',array('Action'=>'download','file'=>$row));?>"><?php echo ($row); ?></a></td>
                            <td align="center"><?php echo (getfiletime($row,$datadir)); ?></td>
                            <td align="center"><?php echo (getfilesize($row,$datadir)); ?></td>
                            <td align="center">
                                <a href="<?php echo U('self/dbsave',array('Action'=>'download','file'=>$row));?>">下载</a>
                                <a onclick="return confirm('确定将数据库还原到当前备份吗？')"href="<?php echo U('self/dbsave',array('Action'=>'RL','File'=>$row));?>">还原</a>
                                <a onclick="return confirm('确定删除该备份文件吗？')"href="<?php echo U('self/dbsave',array('Action'=>'Del','File'=>$row));?>">删除</a>
                            </td>
                        </tr><?php endif; endforeach; endif; ?>
                <?php else: ?>
                <tr>
                    <td align="center" colspan="5">没有找到相关数据。</td>
                </tr><?php endif; ?>
            </tbody>
        </table>
    </form>
</div>
<div class="clear"></div>
<div class="pager"><?php echo ($pageList); ?></div>
</div>

</body>
</html>