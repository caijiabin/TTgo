<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="public/css/pintuer.css">
    <link rel="stylesheet" href="public/css/admin.css">
    <script src="public/js/jquery.js"></script>
    <script src="public/js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label>网站标题：</label>
        </div>
        <div class="field">
		<?php if(empty($data['stitle'])):?>
          <input type="text" class="input" name="stitle"  value="" />
		<?php else:?>
			<input type="text" class="input" name="stitle"  value="<?=$data['stitle']; ?>" />
		<?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站域名：</label>
        </div>
        <div class="field">
			<?php if(empty($data['surl'])):?>
          <input type="text" class="input" name="surl" value="" />
		  <?php else:?>
		  <input type="text" class="input" name="surl" value="<?=$data['surl']; ?>" />
		  <?php endif;?>
        </div>
      </div>
	  
      <div class="form-group">
        <div class="label">
          <label>网站描述：</label>
        </div>
        <div class="field">
		<?php if(empty($data['sdescription'])):?>
          <textarea class="input" name="sdescription"></textarea>
		  <?php else:?>
          <textarea class="input" name="sdescription"><?=$data['sdescription']; ?></textarea>
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>电话：</label>
        </div>
        <div class="field">
		<?php if(empty($data['s_phone'])):?>
          <input type="text" class="input" name="s_phone" value="" />
		  <?php else:?>
          <input type="text" class="input" name="s_phone" value="<?=$data['s_phone']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
	  
	  
      <div class="form-group">
        <div class="label">
          <label>联系人：</label>
        </div>
        <div class="field">
		<?php if(empty($data['s_contact'])):?>
          <input type="text" class="input" name="s_contact" value="" />
		  <?php else:?>
          <input type="text" class="input" name="s_contact" value="<?=$data['s_contact']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
	  
	   <div class="form-group">
        <div class="label">
          <label>QQ：</label>
        </div>
        <div class="field">
		<?php if(empty($data['s_qq'])):?>
          <input type="text" class="input" name="s_qq" value="<?=$data['s_qq']; ?>" />
		  <?php else:?>
          <input type="text" class="input" name="s_qq" value="<?=$data['s_qq']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
	  
      <div class="form-group">
        <div class="label">
          <label>QQ群：</label>
        </div>
        <div class="field">
		<?php if(empty($data['s_qqu'])):?>
          <input type="text" class="input" name="s_qqu" value="<?=$data['s_qqu']; ?>" />
		  <?php else:?>
          <input type="text" class="input" name="s_qqu" value="<?=$data['s_qqu']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>Email：</label>
        </div>
        <div class="field">
		<?php if(empty($data['s_email'])):?>
          <input type="text" class="input" name="s_email" value="<?=$data['s_email']; ?>" />
		  <?php else:?>
          <input type="text" class="input" name="s_email" value="<?=$data['s_email']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>通信地址：</label>
        </div>
        <div class="field">
		<?php if(empty($data['s_address'])):?>
          <input type="text" class="input" name="s_address" value="<?=$data['s_address']; ?>" />
		  <?php else:?>
          <input type="text" class="input" name="s_address" value="<?=$data['s_address']; ?>" />
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>  
              
      <div class="form-group">
        <div class="label">
          <label>底部信息：</label>
        </div>
        <div class="field">
		<?php if(empty($data['scopyright'])):?>
          <textarea name="scopyright" class="input" style="height:120px;"><?=$data['scopyright']; ?></textarea>
		  <?php else:?>
          <textarea name="scopyright" class="input" style="height:120px;"><?=$data['scopyright']; ?></textarea>
		  <?php endif;?>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>