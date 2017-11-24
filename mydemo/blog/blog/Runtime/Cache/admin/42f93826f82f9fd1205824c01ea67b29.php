<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html>
<link rel="stylesheet" href="http://localhost/wish/wish/Tpl/admin/public/Css/public.css" />
<link rel="stylesheet" href="http://localhost/wish/wish/Tpl/admin/public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
<style>
	dl {
		margin-top:50px;
	}
	dt {
		margin-top:10px;
	}
	dd {
		position:relative;
		display:block;
		margin-top:10px;
		left:30px;
	}
</style>
</head>
<body>
	<form action="<?php echo U('Login/login');?>" method='post' target="_self">
		<div style="width:200px;height:200px;border:1px solid #ccc;margin: 200px auto;text-align:center;">
			<dl>
				<dt><input type="text" name="username" placeholder="username" autocomplete='off'/><dt>
				<dt><input type="password" name="password" placeholder="password" autocomplete='off' /><dt>
			<dd><input type="button" value="register"/><input type="submit" value="login"/></dd>
			</dl>
		</div>
	</form>
</body>
</html>