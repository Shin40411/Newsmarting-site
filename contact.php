<?php session_start()?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Newsmarketing | Liên hệ</title>
		<link rel="stylesheet" type="text/css" href="Contact/bootstrap.css"/>
		<link rel="stylesheet" href="Contact/mail.css">
	</head>
<body>
	<nav id="menu">
  <ul style="padding-left: 0px;">
    <li><a href="index.html">Trang chủ</a></li>
    <li><a href="Newsportal/newsportal/">Tin tức</a></li>
    <li><a href="intro.html">Giới thiệu</a></li>
    <li>
          <a href="ktvi.html">Sản phẩm</a>
      <ul class="sub-menu">
        <li><a href="ktvi.html" style="margin-left: -5px;">Kênh tivi thang máy</a></li>
        <li><a href="kposter.html" style="margin-left: -5px;">Kênh poster thang máy</a></li>
        <li><a href="ksanbay.html" style="margin-left: -5px;">Kênh led sân bay</a></li>
        <li><a href="ksieuthi.html" style="margin-left: -5px;margin-bottom: -3px;">Kênh siêu thị</a></li>     
     </ul>
    </li>
    <li><a href="contact.php">Liên hệ</a></li>
    <a href=""><img src="images/Capture.PNG" width="145px" alt=""></a>
  </ul>
</nav>
	<div class="banner">
 	<img src="image/4.jpg" style="width: 100%" alt="">
 	 </div>
  <div class="clear" style="margin-bottom: 50px;"></div>
  <div class="tilte"><h4 style="text-align: center;margin-bottom: -10px;"><strong>Mọi thắc mắc và phản hồi qua website, vui lòng điền thông tin dưới đây. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất!</strong></h4></div>
  <hr style="border-color: #000; margin-left: 250px; margin-right: 250px;">
   <div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary" align="center">Liên hệ trực tiếp qua email</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="send_email.php">
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" required="required"/>
				</div>
				<div class="form-group">
					<label>Tiêu đề</label>
					<input type="text" class="form-control" name="subject" required="required"/>
				</div>
				<div class="form-group">
					<label>Nội dung</label>
					<input type="text" class="form-control" style="height: 50px;" name="message" required="required"/>
				</div>
				<center><button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Gửi</button></center>
			</form>
			<br />
			<?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
			<?php
					}else{
			?>
						<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
			<?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
		</div>
	</div>	
	<div class="banner">
 	<img src="image/3.PNG" width="1000px;" style="margin-left: 260px; margin-top: 20px; margin-bottom: 20px;" alt="">
 	 </div>
<footer>
        <div>Copyright © Newsmarketing 2020</div>
    </footer>
</body>
</html>