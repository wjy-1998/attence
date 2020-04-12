<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>考勤情况</title>
	<link rel="stylesheet" href="css/dashicons.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
</head>
<body>
<?php
	$jiaoshihao=$_POST["jiaoshihao"];
	$password=$_POST["password"];
	$link=mysqli_connect("localhost","root","123456","students");
	$sql="select * from teacher where jiaoshihao='$jiaoshihao';";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$name1=$row["jiaoshihao"];
	$password1=$row["password"];
	if($jiaoshihao=="fdy"&&$password=="123456"){
		
	}else{
		
		if ($jiaoshihao==$name1) {
			if ($password==$password1) {
			/*header('Location:../teacher.php');*/	/*用于教师端页面跳转*/
		}else{
			header('Location:../index/yz.php');
		}
		}else{
			header('Location:../index/yz.php');
		}
	}
	

?>

	<!-- 顶部导航 -->
	<div class="top">
		<div class="top-title icon-home">学生考勤管理系统</div>
		<div class="top-right">
			<a href="#">
						您好，<?php
						$jiaoshihao=$_POST["jiaoshihao"];
						$link=mysqli_connect("localhost","root","123456","students");
						mysqli_set_charset($link,"utf8");
						$sql="select * from teacher where jiaoshihao='$jiaoshihao';";
						$result=mysqli_query($link,$sql);
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						$name1=$row["name"];
						echo "$name1";
						?>
			</a><a href="../land.php">退出</a>
		</div>
	</div>
	<!-- 主要区域 -->
	<div class="main">
		<!-- 左侧导航 -->
		<div class="nav">
			<div class="photo icon-admin"><?php
						$jiaoshihao=$_POST["jiaoshihao"];
						$link=mysqli_connect("localhost","root","123456","students");
						mysqli_set_charset($link,"utf8");
						$sql="select * from teacher where jiaoshihao='$jiaoshihao';";
						$result=mysqli_query($link,$sql);
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						$name1=$row["name"];
						echo "$name1";
						?></div>
			<!-- <a target="panel" href="./cp_index.php" class="jq-nav icon-index curr">主页</a> -->
			
			<a target="panel" href="index1.php" class="jq-nav icon-article" id="a0">第几周考勤查询</a>
			<a target="panel" href="index.php" class="jq-nav icon-article" id="a1">星期几考勤查询</a>
			<script>
				//单击链接，按钮高亮
				$(".jq-nav").click(function(){
					$(this).addClass("curr").siblings().removeClass("curr");
				});

			</script>
		</div>
		<!-- 内容区域 -->
		<div class="content">
			<iframe src="index.php" frameborder="no" name="panel"></iframe>
		</div>
	</div>
</body>

</html>