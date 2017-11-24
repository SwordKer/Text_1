<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="http://localhost/wish/wish/Tpl/admin/public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://localhost/wish/wish/Tpl/admin/public/Js/index.js"></script>
<link rel="stylesheet" href="http://localhost/wish/wish/Tpl/admin/public/Css/public.css" />
<link rel="stylesheet" href="http://localhost/wish/wish/Tpl/admin/public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="exit">
			<a href="<?php echo U('Login/logout');?>" target="_self">退出</a>
			<a href="http://bbs.houdunwang.com" target="_blank">获得帮助</a>
			<a href="http://www.houdunwang.com" target="_blank">后盾网</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>功能标题</dt>
			<dd><a href="<?php echo U('Lister/index','','');?>" target="iframe">查看所有内容</a></dd>
			<dd><a href="<?php echo U('Content/liste');?>">博文列表</a></dd>
			<dd><a href="<?php echo U('Content/addCont');?>">添加博文</a></dd>
			<dd><a href="<?php echo U('Content/trash');?>">回收站</a></dd>
		</dl>
		<dl>
			<dt>功能标题</dt>
			<dd><a href="<?php echo U('admin/Attribute/index');?>"  target="iframe">属性列表</a></dd>
			<dd><a href="<?php echo U('admin/Attribute/addAttr');?>" target="iframe">添加属性</a></dd>
		</dl>
		<dl>
			<dt>功能标题</dt>
			<dd><a href="<?php echo U('Category/index');?>" target="iframe">节点列表</a></dd>
			<dd><a href="<?php echo U('Category/addCate');?>" target="iframe">添加节点</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="#"></iframe>
	</div>
</body>
</html>