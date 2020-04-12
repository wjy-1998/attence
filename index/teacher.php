<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>教师页面</title>
	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.4.1.min.js"></script>
  	<script src="js/land.js"></script>
   	<script defer src="font/fontawesome-all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/stu.css">
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
	if($jiaoshihao=="fdy"){
		header('Location:./advisor/test.php');
	}else{
		
	if ($jiaoshihao==$name1) {
		if ($password==$password1) {
	}else{
		header('Location:yz.php');
	}
	}else{
		header('Location:yz.php');
	}
	}
	

?>


		
		
</body>
</html>