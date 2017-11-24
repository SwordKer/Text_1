<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
	<style>
		input {
			border:1px solid #ccc;
			padding:5px;
		}
		.table tr td {
			border-top:2px solid #ccc;
			padding:10px 30px;
			text-align:center;
		}
		.table {
			width:80%;
			margin:10px auto;
		}
		a {
			color:#999;
			text-decoration:none;
		}
	</style>
</head>
<body>
<div>
	<table class="table">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>sort</th>
			<th>opration</th>
		</tr>
		<form action="<?php echo U('Category/sort');?>" method="post">
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["html"]); echo ($v["name"]); ?></td>
					<td><input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" /></td>
					<td><a href="<?php echo U('Category/addCate',array('pid'=>$v['id']));?>">添加子节点</a></td>
				</tr><?php endforeach; endif; ?>
			<tr>
				<td colspan="4" align="center"><input type="submit" value="sort"/></td>
			</tr>
		</form>
	</table>
</div>
</body>
</html>