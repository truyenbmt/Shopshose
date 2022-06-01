<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Admin_Shopshose</title>
  <!-- meta -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>themes/admin/img/wtv_logo.png" />
    <meta name="robots" content="noindex, nofollow">
  <!-- css -->
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="<?php echo base_url('themes/admin/') ?>css/login-style.css">
  <style type="text/css">
    #copyright a {
      text-decoration: none;
      color: orange;
    }
  </style>
  
</head>
<body>
  
    <div id="login">
      <form name='form-login' action="<?php echo base_url() ?>wtvlog2018" method="post">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" placeholder="Tên admin" name="username">
       
        <span class="fontawesome-lock"></span>
          <input type="password" id="pass" placeholder="Mật khẩu" name="password">
        
        <input type="submit" value="Đăng nhập" name="login">

      </form>
    </div>
    
    <div id="copyright" style="position: fixed;bottom: 5px;right: 20px;">
      &copy; 2022 <a href="https://www.facebook.com/Thi%C3%AAn-%C3%82n-101884515483981/?ref=pages_you_manage" target="_blank">Webs_Shopshose</a>
    </div>
  
</body>
</html>
