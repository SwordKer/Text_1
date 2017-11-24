<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<script type="text/javascript" src="http://localhost/wish/wish/Tpl/admin/public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://localhost/wish/wish/Tpl/admin/public/Js/index.js"></script>
<link rel="stylesheet" href="http://localhost/wish/wish/Tpl/admin/public/Css/public.css" />
<link rel="stylesheet" href="http://localhost/wish/wish/Tpl/admin/public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<body>
<form action="<?php echo U('Category/cateHandle');?>" method="post">
	<table class="table">
		<tr>
			<th>add Cate</th>
		</tr>
		<tr>
			<td>Cate Name</td>
			<td><input type="text" name="name" autocomplete='off' placeholder="the cate name"></td>
		</tr>
		<tr>
			<td>sort</td>
			<td><input type="text" name="sort" value="100"></td>
		</tr>
		<tr>
			<input type="hidden" name="pid" value="<?php echo ($pid); ?>">
			<td><input type="submit" value="Go_add"></td>
		</tr>
	</table>
</form>
</body>
</html>