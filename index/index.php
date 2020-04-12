<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.4.1.min.js"></script>
  	<script src="js/lands.js"></script>
   	<script defer src="font/fontawesome-all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/land.css">
</head>
<body>


<div id="container">
	<header>
		<img src="images/logo.png" alt="">
	</header>
	
	<img src="images/timg.png" alt="" id="img1">
	
	
	<section id="box">
		<div class="top">
			<h1 class="active">学生登录</h1>
			<h1>教师登录</h1>
		</div>
			<form action="student.php" method="post" id="form0" class="on">			
					<p class="list">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="输入学号" name="xuehao" type="text" id="xuehao">
					</p>
			
					<p class="list">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="输入密码" name="password" id="password">
					</p>
	
					<button class="btn">学生登录</button>
			</form>
	
			<form action="../teacher/teacher.php" method="post" id="form1">			
					<p class="list">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="输入教师号" name="jiaoshihao" type="text" id="jiaoshihao">
					</p>
			
					<p class="list">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="输入密码" name="password"  id="password">
					</p>
	
					<button class="btn">教师登录</button>

			</form>
	</section>
</div>
		
</body>
</html>