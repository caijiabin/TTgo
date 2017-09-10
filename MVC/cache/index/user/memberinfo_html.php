<!DOCTYPE HTML>
<html>
<head>
<title>修改信息</title>
<link href="public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="public/css/style.css" rel='stylesheet' type='text/css' />
<link type='text/css' rel="stylesheet" href="public/css/pintuerx.css"/>
<link type='text/css' rel="stylesheet" href="public/css/adminx.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">

<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'> -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="public/js/jquery.min.js"></script>
 <script src="public/js/jquery.js"></script>
  <script src="public/js/pintuer.js"></script>  
</head>
<body>
	
	    <!-- start header_bottom -->
    <div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				<i class="phone"> </i><span>1-200-346-2986</span>
			</div>
			<div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
    </div>
	    <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="public/images/logo.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			  <ul class="nav">
				<li ><a href="index.php?m=index&c=index&a=index">首页</a></li>
			   <li ><a href="index.php?m=index&c=blog&a=blog">博客</a></li>
			   <li><a href="index.php?m=index&c=index&a=contact">关于作者</a></li>
			     <li class="active"><a href="index.php?m=index&c=user&a=collection">个人信息</a></li>
				  <li><a href="index.php?m=index&c=index&a=loginout">退出登录</a></li>
			 </ul>
			  <script type="text/javascript" src="public/js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	


<div class="panel admin-panel">

  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=index&c=user&a=memberinfo" enctype="multipart/form-data" >
      <div class="form-group">
        <div class="label">
          <label>姓名：</label>
        </div>
        <div class="field">
		<?php if(empty($userInfo['username'])):?>
          <input type="text" class="input" name="username" value="" />
		 <?php else:?>
          <input type="text" class="input" name="username" value="<?=$userInfo['username']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>头像：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="picture" class="input tips" style="width:25%; float:left;" value=""/>
          <input type="hidden"  name="picture" value="<?=$userInfo['picture']; ?>"/>
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" >
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>旧密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input" name="password" value="" />
          <div class="tips"></div>
        </div>
      </div>
    <div class="form-group">
        <div class="label">
          <label>新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input" name="newpass" value="" />
          <div class="tips"></div>
        </div>
    </div>  
	<div class="form-group">
        <div class="label">
          <label>确认密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input" name="confirm" value="" />
          <div class="tips"></div>
        </div>
    </div>  
      <div class="form-group">
        <div class="label">
          <label>QQ：</label>
        </div>
        <div class="field">
		<?php if(empty($userInfo['qq'])):?>
          <input type="text" class="input" name="qq" value="" />
		  <?php else:?>
          <input type="text" class="input" name="qq" value="<?=$userInfo['qq']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
	  
	  <div class="form-group">
        <div class="label">
          <label>电话号码：</label>
        </div>
        <div class="field">
		<?php if(empty($userInfo['phone'])):?>
          <input type="text" class="input" name="phone" value="" />
		  <?php else:?>
          <input type="text" class="input" name="phone" value="<?=$userInfo['phone']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>Email：</label>
        </div>
        <div class="field">
			<?php if(empty($userInfo['email'])):?>
          <input type="text" class="input" name="email" value="" />
		  <?php else:?>
          <input type="text" class="input" name="email" value="<?=$userInfo['email']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
      
               
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
			 <input type="hidden"  name="mark" value="1" />
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row section group">
				<div class="col-md-4">
					<img src="public/images/logocai.png" height="171" width="324"/>
				</div>
				<div class="col-md-4">
					<div class="f-logo">
					<img src="public/images/logo.png" alt=""/>
					</div>
					<p class="m_9"><?=$data['sdescription']; ?></p>

					<p class="address">QQ交流群 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10"><?=$data['s_qqu']; ?></span></p>
					<p class="address">电子邮箱: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10"><?=$data['s_email']; ?></span></p>
					<p class="address">网站网址: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10"><?=$data['surl']; ?></span></p>
				</div>
				<div class="col-md-4" style="padding:0 0;">
					<ul class="list" style="padding:0;" >
						<h4 class="m_7">通信地址:</h4>
						<li style="list-style:none;margin:0;"><a>地 址：<?=$data['s_address']; ?></a></li>
						<li style="list-style:none;margin:0;"><a>联系人：<?=$data['s_contact']; ?></a></li>
						<li style="list-style:none;margin:0;"><a>QQ：<?=$data['s_qq']; ?></a></li>
					</ul>
					<ul class="list1">
						<h4 class="m_7">友情链接</h4>
						<li><a href="#">大兵哥博客</a></li>
						<li><a href="#">博主论坛</a></li>
						<li><a href="#">php学院</a></li>
						<li><a href="#">阿里巴巴</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="copy">
				<p>&copy;copyright &nbsp;&nbsp;<?=$data['scopyright']; ?>&nbsp;&nbsp;站点信息</p>
			</div>
			<div class="social">	
				<ul>	
					<li class="facebook"><a href="#"><span> </span></a></li>
					<li class="twitter"><a href="#"><span> </span></a></li>
					<li class="pinterest"><a href="#"><span> </span></a></li>	
					<li class="google"><a href="#"><span> </span></a></li>
					<li class="tumblr"><a href="#"><span> </span></a></li>
					<li class="instagram"><a href="#"><span> </span></a></li>	
					<li class="rss"><a href="#"><span> </span></a></li>							
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div style="display:none">
		<script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
	</div>
	</body>
</html>