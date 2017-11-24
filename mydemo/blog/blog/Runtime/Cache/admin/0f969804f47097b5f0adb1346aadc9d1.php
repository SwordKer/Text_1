<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
<style>
	table {
		width:60%;
		margin:10px auto;
	}
	td {
		border-top:1px solid #ccc;
		text-align:center;
		padding:5px;
	}
	span {
		display:inline-block;
		width:22px;
		height:22px;
	}
	a {
		display:block;
		border:1px solid #dcdcdc;
		padding:6px;
		text-decoration:none;
		margin-top:10px;
	}
</style>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>color</th>
		</tr>
		
		<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["name"]); ?></td>
				<td><span style="background-color:<?php echo ($v["color"]); ?>;"></span></td>
			</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan="3">
				<a href="<?php echo U('Attribute/addAttr');?>">添加属性</a>
			</td>
		</tr>
	</table>
</body>
</html>