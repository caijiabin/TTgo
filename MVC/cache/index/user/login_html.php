
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<link href="public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="public/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
 -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="public/js/jquery.min.js"></script>
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
			<a href="index.php?m=index&c=index&a=index"><img src="public/images/logo.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			  <ul class="nav">
			   <li ><a href="index.php?m=index&c=index&a=index">首页</a></li>
			   <li ><a href="index.php?m=index&c=blog&a=blog">博客</a></li>
			   <li><a href="index.php?m=index&c=index&a=contact">关于作者</a></li>
			   <li class="active"><a href="index.php?m=index&c=user&a=login">登录/注册</a></li>
			 </ul>
			  <script type="text/javascript" src="public/js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	
	<!-- end menu -->
       <div class="main">
          <div class="login_top">
          	<div class="container">
			  <div class="col-md-6">
				 <div class="login-page">
					<h4 class="title">账 户 注 册</h4>
					<p>自己打败自己是最可悲的失败，自己战胜自己是最可贵的胜利。
						每个人注定都要经历一番失败的煎熬和且行且上的痛苦，
						但只要经历，即使是失败，也从不会是无益的。
						人可以失败，但不可以被打倒。</p>
					<div class="button1">
					   <a href="index.php?m=index&c=user&a=phone"><input type="submit" name="Submit" value="创建一个新账户"></a>
					 </div>
					 <div class="clear"></div>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-page">
				  <div class="login-title">
	           		<h4 class="title">账户登录</h4>
					<div id="loginbox" class="loginbox">
						<form action="index.php?m=index&c=user&a=login" method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">用户名</label>
						      <input id="modlgn_username" type="text" name="username" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">密码</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="index.php?m=index&c=user&a=forget">忘记密码 ? </a></label>
							   </p>
							    <input type="submit" name="submit" class="button" value="login"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				</div>
				<div class="clear"></div>
			  </div>
			</div>
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