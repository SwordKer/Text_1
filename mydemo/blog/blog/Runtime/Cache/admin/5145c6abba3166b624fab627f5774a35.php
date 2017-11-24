<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style>
	td {
		border-top:1px solid #ccc;
		text-align:center;
		padding:5px;
	}
</style>
</head>
<body>
	<table style="width:60%;margin:10px auto;">
		<tr>
			<th>id</th>
			<th style="text-align:left;">标题</th>
			<th>点击</th>
			<th>日期</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td style="text-align:left">
					<?php echo ($v["title"]); ?>
					<?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$k): ?><span style="color:<?php echo ($k['color']); ?>">[<?php echo ($k['name']); ?>]&nbsp;</span><?php endforeach; endif; ?>
				</td>
				<td><?php echo ($v["click"]); ?></td>
				<td><?php echo (date('y/m/d h:i',$v["time"])); ?></td>
				<td><a href="<?php echo U('Content/delete',array('id'=>$v['id']));?>" style="color:#999;text-decoration:none;border:1px solid #ccc;padding:3px">删除</a></td>
			</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>