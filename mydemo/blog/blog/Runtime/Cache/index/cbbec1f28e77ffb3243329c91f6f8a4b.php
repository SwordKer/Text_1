<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://localhost/blog/public/Css/common.css" />
	<link rel="stylesheet" href="http://localhost/blog/public/Css/index.css" />
	<link rel="stylesheet" href="http://localhost/blog/public/Css/show.css" />
	<link rel="stylesheet" href="http://localhost/blog/public/Css/list.css" />
	<script type="text/JavaScript" src='http://localhost/blog/public/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='http://localhost/blog/public/Js/common.js'></script>
</head>
<body>
<!--头部-->
<!--头部-->
	<div class='top-list-wrap'>
		<div class='top-list'>
			<ul class='l-list'>
				<li><a href="http://www.houdunwang.com" target='_blank'>后盾网</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>后盾网论坛</a></li>
				<li><a href="http://study.houdunwang.com" target='_blank'>后盾学习社区</a></li>
			</ul>
			<ul class='r-list'>
				<li><a href="http://www.hdphp.com" target='_blank'>HDPHP框架</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>免费视频教程</a></li>
			</ul>
		</div>
	</div>


	<div class='top-search-wrap'>
		<div class='top-search'>
			<a href="http://bbs.houdunwang.com" target='_blank' class='logo'>
				<img src="http://localhost/blog/public/Images/logo.png"/>
			</a>
			<div class='search-wrap'>
				<form action="" method='get'>
					<input type="text" name='keyword' class='search-content'/>
					<input type="submit" name='search' value='搜索'/>
				</form>
			</div>
		</div>
	</div>


	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<?php
 $cate = M('cate')->order("")->select(); import('Class.CategoryGroup',APP_PATH); $data = CategoryGroup::cateChildGroup($cate); foreach($data as $v) : ?><li class='nav-lv1-li'>
					<a href="" class='top-cate'><?php echo ($v["name"]); ?></a>
					<ul>
						<?php if(is_array($v["child"])): foreach($v["child"] as $key=>$k): ?><li><a href=""><?php echo ($k["name"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</li><?php endforeach; ?>
		</ul>
	</div>


<!--主体-->
	<div class='main'>
		<div class='main-left'>
			<?php if(is_array($result)): foreach($result as $key=>$v): ?><dl style="margin:1px">
					<dt><?php echo ($v["name"]); ?></dt>
					<dd class='channel'><?php echo ($v["title"]); ?></dd>
					<dd class='info'>
						<span class='time'>发布于：<?php echo (date("y年m月d日 h:i",$v["time"])); ?></span>
						<span class='click'>点击：<?php echo ($v["click"]); ?></span>
					</dd>
					<dd class='content'><?php echo ($v["title"]); ?></dd>
					<dd class='read'>
						<a href="">阅读全文>></a>
					</dd>
				</dl><?php endforeach; endif; ?>
			<?php echo ($page); ?>
		</div>
	<!--主体右侧-->
<!--主体右侧-->
		<div class='main-right'>
			<?php echo W('Hot',array('limit'=>5));?>

			<dl>
				<dt>最发布发</dt>
				<?php
 $field = array('id','title','click'); $data = M('blog')->order('click DESC')->field($field)->limit(5)->select(); foreach($data as $v): ?><dd>
						<a href=""><?php echo ($v["title"]); ?></a>
						<span>(<?php echo ($v["click"]); ?>)</span>
					</dd><?php endforeach;?>
			</dl>

			<dl>
				<dt>友情连接</dt>
				<dd>
					<a href="">后盾网</a>
				</dd>

				<dd>
					<a href="">后盾网论坛</a>
				</dd>
				<dd>
					<a href="">后盾网学习社区</a>
				</dd>
			</dl>
		</div>
	</div>
<!--底部-->
	<div class='bottom'>
		<div></div>
	</div>
</body>
</html>