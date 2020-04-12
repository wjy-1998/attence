<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>辅导员登录页面</title>
	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.4.1.min.js"></script>
   	<script defer src="font/fontawesome-all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/advisor.css">
</head>
<body>
	<div class="container">
		<header>
			<img src="images/logo.png" alt="">
		</header>
		<section>
			<div class="right">
				<h1>辅导员查询登录界面</h1>
				<h1><img src="images/form_img.jpg"></h1>
				<form action="../advisor/layout.php" method="post" id="form2" class="on">			
						<p class="list">
							<i class="fas fa-user"></i>
							<input type="text" placeholder="输入辅导员号" name="jiaoshihao" type="text" id="jiaoshihao">
						</p>
				
						<p class="list">
							<i class="fas fa-lock"></i>
							<input type="password" placeholder="输入密码" name="password"  id="password">
						</p>
		
						<button class="btn">登 录</button>
				</form>
			</div>
		</section>
		<ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
	</div>


</body>
</html>