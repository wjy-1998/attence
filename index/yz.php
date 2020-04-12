<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>签到失败</title>
	<style>
		*{
			margin: 0px auto;
			padding: 0px;
		}

		body{
			background-image: url(./images/bg.jpg);
			background-repeat: no-repeat;
			background-size: 100% 1000px;
		}

		#container{
			width: 100%;
			height: 500px;
			
			position: absolute;
			top: 300px;
			
		}

		h3{
			text-align: center;
			font-size: 40px;
			font-family: '楷体';
			
		}

		a{
			width:1000px;
			text-align: center;
	
			display: block;
			margin-top: 30px;
		}

		button{
			
			width: 120px;
			height: 50px;
			font-size: 18px;
			font-family: '楷体';

		}
	</style>
</head>
<body>
	<div id="container">
		<h3>输入学号或是密码错误，请点击返回按钮！</h3>
		<a href="land.php"><button>返回按钮</button></a>
</body>
</html>