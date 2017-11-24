<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style>
	.table {
		width:60%;
		margin:10px auto;
	} 
	.table td {
		border-top:1px solid #ccc;
		padding:5px;
		color:#999;
	}
	input {
		border:1px solid #dcdcdc;
	}
</style>
</head>
<body>
<form action="<?php echo U('Content/contHandle');?>" method="post">
	<table class="table">
		<tr>
			<th colspan=2 align="center" style="color:#7A7A7A;">添加文章</th>
		</tr>
		<tr>
			<td>标题</td>
			<td><input style="width:100%;height:30px" type="text" name="title"/></td>
		</tr>
		<tr>
			<td>所属栏目</td>
			<td>
				<select name="cid">
					<option>-----选择所属栏目-----</option>
					<?php if(is_array($data)): foreach($data as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>点击次数</td>
			<td><input  style="color:#ccc;" type="text" name="click" value="99"/></td>
		</tr>
		<tr>
			<td>博文属性</td>
			<td>
				<?php if(is_array($attr)): foreach($attr as $key=>$at): ?><label><input type="checkbox" name="attr[]" value="<?php echo ($at["id"]); ?>"/>&nbsp;<?php echo ($at["name"]); ?></label><?php endforeach; endif; ?>
			</td>
		</tr>
		<tr>
			<td colspan=2>
				<textarea id="content" name="content"></textarea>
			</td>
		</tr>
		<tr>
			<td><input style="padding:10px" type="submit" value="保存添加" /></td>
		</tr>
	</table>
</form>
</body>
</html>
<script type="text/javascript" src="http://localhost/wish/wish/Tpl/admin/ueditor/ueditor.config.js"></script> 
<script type="text/javascript" src="http://localhost/wish/wish/Tpl/admin/ueditor/ueditor.all.min.js"></script> 
<script type="text/javascript">
	window.UEDITOR_HOME_URL = "http://localhost/wish/wish/Tpl/admin/ueditor/";
	window.UEDITOR_CONFIG.initialFrameWidth = 900;
	window.UEDITOR_CONFIG.initialFrameHeight = 350;
	UE.getEditor('content');
</script>