
<!DOCTYPE HTML>
<html>
<head>
<title>Blog</title>
<link href="public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="public/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="public/js/jquery.min.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="public/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="public/js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
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
			   <li class="active"><a href="index.php?m=index&c=blog&a=blog">博客</a></li>
			   <li><a href="index.php?m=index&c=index&a=contact">关于作者</a></li>
			  
				<?php if(empty($username)):?>
			   <li><a href="index.php?m=index&c=user&a=login">登录/注册</a></li>
			   <?php else:?>
			   <li><a href="index.php?m=index&c=user&a=collection">个人信息</a></li>
			    <li><a href="index.php?m=index&c=index&a=loginout">退出登录</a></li>
				<?php endif;?>
			 </ul>
			  <script type="text/javascript" src="public/js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
     <div class="main">
       <div class="about_banner_img"><img src="public/images/blog_img1.jpg" class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Blog</h1>
      	</div>
      	<div class="border"> </div>
      	<div class="container">
      		<div class="row single-top">
		  	 <div class="col-md-8">
			<!-- 遍历文章---开始 -->
				<?php if(!empty($data)):?>
				<?php foreach($data as $key=>$value): ?>
		  	   	<div class="blog_box">
				 <div class="blog_grid">
				  <h3><a href="index.php?m=index&c=blog&a=blog_single&id=<?=$value['id']; ?>"><?=$value['title']; ?></a></h3><i class="document"> </i>
				  <a href="index.php?m=index&c=blog&a=blog_single&id=<?=$value['id']; ?>">
					<?php if(empty($value['apic'])):?>
					<!-- <img src="public/images/blog_img3.jpg" class="img-responsive"  height="300"  alt=""/> -->
					<?php else:?>
					<img src="<?=$value['apic']; ?>" class="img-responsive" width="" height="300"  alt=""/>
					<?php endif;?>
				  </a>
				  <div class="singe_desc">
				   <!--  <p></p> -->
				    <?=$value['content']; ?>
				     <div class="comments">
		  				<ul class="links">
		  					<li><a href="#"><i class="blog_icon1"> </i><br><span><?=$value['addtime']; ?></span></a></li>
		  					<li><a href="index.php?m=index&c=index&a=contact"title="关于作者"><i class="blog_icon2"> </i><br><span>caijiabin</span></a></li>
							
							<?php if(empty($value['likered'])):?>
		  					<li><a href="index.php?m=index&c=blog&a=likedo&id=<?=$value['id']; ?>" title="点赞" ><img src="public/images/1zan.png"/><br><span><?=$value['likecount']; ?></span></a></li>
							<?php else:?> 
							<li><a href="index.php?m=index&c=blog&a=cancel&id=<?=$value['id']; ?>" title="取消赞" ><img src="public/images/2zan.png"/><br><span><?=$value['likecount']; ?></span></a></li>
							<?php endif;?>
							
							<li><a href="index.php?m=index&c=blog&a=blog_single&id=<?=$value['id']; ?>"><i class="blog_icon4"></i><br><span><?=$value['replycount']; ?></span></a></li>
							
							<?php if(!empty($value['isred'])):?>
							<li><a href="index.php?m=index&c=blog&a=nocollect&id=<?=$value['id']; ?>" title="取消收藏"><i class="blog_icon3"><img src="public/images/1heart.png"/></i><br>已收藏</a></li>
							<?php else:?> 
							<li><a href="index.php?m=index&c=blog&a=collect&id=<?=$value['id']; ?>" title="添加收藏"><i class="blog_icon3"></i><br><span>添加收藏</span></a></li>
							<?php endif;?>
							
		  				</ul>
		  				<div class="btn_blog">
							<span class="postcom">
								<a class="bshareDiv" style="margin-left: 500px;  float:left;" href="http://www.bshare.cn/share">点击分享</a>
								<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#uuid=bc4840eb-1a02-4d9b-948b-1ee39f3935c6&amp;
								style=1&amp;bp=qqmb,bsharesync,sinaminiblog,qzone,renren,tianya,shouji,ifengmb,neteasemb,qqxiaoyou,weixin,qqim">
								</script>
							</span>		
			            </div>
		  		        <div class="clear"></div>
		  		     </div>
				  </div>
				 </div>
				</div>
				<?php endforeach;?>
				<?php endif;?>
		<!-- 遍历文章---结束 -->
		
		<!-- 分页---开始 -->
				<ul class="dc_pagination dc_paginationA dc_paginationA06">
				  <li><a href="<?=$listpage['head']; ?>" class="current">首页</a></li>
				  <li><a href="<?=$listpage['prev']; ?>" class="current">上一页</a></li>
				  <li><a href="<?=$listpage['next']; ?>" class="current">下一页</a></li>
				  <li><a href="<?=$listpage['last']; ?>" class="current">尾页</a></li>
		       </ul>
		<!-- 分页---结束-->
		
			</div>
			<div class="col-md-4 ">
			 
				<ul class="recent-list">
				  <h4>最近发表</h4>
				  <?php if(empty($newPost)):?>
					<li><a href="index.php?m=index&c=index&a=index">当前没有文章br><span>去首页看看吧</span></a><</li>
				  <?php else:?>
				  <?php foreach($newPost as $key=>$value): ?>
					<li><a href="index.php?m=index&c=blog&a=blog_single&id=<?=$value['id']; ?>"><?=$value['title']; ?></a><br><span><?=$value['addtime']; ?></span></li>
				  <?php endforeach;?>
				  <?php endif;?>
				</ul>
			
				<h4><a href="" ><font color="#00BFF0">我的收藏</font></a></h4>
				<div class="course_demo">
				
				<?php if(empty($myCollect)):?>
				<ul style="list-style-type:none;">
					<li>
					<div >
						<img src="public/images/pic16.jpg"/>
					</div>	
					</li>
				</ul>
				<?php else:?>
				<ul id="flexiselDemo3">
				<?php foreach($myCollect as $key=>$value): ?>
					<li>
						<img src="public/images/pic7.jpg" />
						<div class="desc">
							<h3><?=$value['title']; ?><br><span class="m_text"><?=$value['addtime']; ?></span></h3>
							<p><?=$value['content']; ?></p>
							<div class="clear"></div>
						</div>
					</li>
				<?php endforeach;?>
				</ul>
				<?php endif;?>
						
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 2,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="public/js/jquery.flexisel.js"></script>
	  </div>
	  
	 
				  <ul  class="blog-list1">
					 <h4>热门标签</h4>
						<li><a href="#">Web Design</a></li>
						<li><a href="#">Html5</a></li>
						<li><a href="#">Wordpress</a></li>
						<li><a href="#">Logo</a></li>
						<li><a href="#">Web Design</a></li>
						<li><a href="#">Web Design</a></li>
						<li><a href="#">Wordpress</a></li>
						<li><a href="#">Web Design</a></li>
						<li><a href="#">Html5</a></li>
						<li><a href="#">Wordpress</a></li>
						<li><a href="#">Logo</a></li>
						<div class="clear"></div>
					</ul>
					
					<ul class="archive-list">
					  <h4>文章存档</h4>
						<li><a href="#">2014</a></li>
						<li><a href="#">2013</a></li>
						<li><a href="#">2012</a></li>
				    </ul>
				    <h3 class="m_15"></h3>
						<img src="public/images/caijiabin.png" alt=""/>
		   	     </div>
				 
				<div class="clear"></div>
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
					<p class="m_9"><?=$datas['sdescription']; ?></p>

					<p class="address">QQ交流群 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10"><?=$datas['s_qqu']; ?></span></p>
					<p class="address">电子邮箱: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10"><?=$datas['s_email']; ?></span></p>
					<p class="address">网站网址: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10"><?=$datas['surl']; ?></span></p>
				</div>
				<div class="col-md-4" style="padding:0 0;">
					<ul class="list" style="padding:0;" >
						<h4 class="m_7">通信地址:</h4>
						<li style="list-style:none;margin:0;"><a>地 址：<?=$datas['s_address']; ?></a></li>
						<li style="list-style:none;margin:0;"><a>联系人：<?=$datas['s_contact']; ?></a></li>
						<li style="list-style:none;margin:0;"><a>QQ：<?=$datas['s_qq']; ?></a></li>
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
				<p>&copy;copyright &nbsp;&nbsp;<?=$datas['scopyright']; ?>&nbsp;&nbsp;站点信息</p>
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