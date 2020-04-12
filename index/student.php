<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生页面</title>
	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.4.1.min.js"></script>
   	<script defer src="font/fontawesome-all.min.js"></script>
   	<script src="js/students.js"></script>
	<link rel="stylesheet" type="text/css" href="style/student.css">
</head>
<body>
<?php
	$xuehao=$_POST["xuehao"];
	$password=$_POST["password"];
	$link=mysqli_connect("localhost","root","123456","students");
	$sql="select * from students where xuehao='$xuehao';";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$name1=$row["xuehao"];
	$password1=$row["password"];
	if ($xuehao==$name1) {
		if ($password==$password1) {
		
	}else{
		header('Location:yz.php');
	}
	}else{
		header('Location:yz.php');
	}
	
?>
	<header>
		<img src="images/logo.png" alt="">
	</header>
	<div id="fugai"></div>
	<div id="container">
		
		<div class="title">
			<div class="left">
				<h1>学生签到</h1>
				<button id="btn" onclick="show();">
					进入课室
					<p id="pText"></p>
				</button>
				
			</div>	
			<div class="right">
				<ul> <!-- 学生学号、姓名、时间 -->
					<li>学号：
						<p>
							<?php
							$xuehao=$_POST["xuehao"];
							echo "$xuehao";
							?>
						</p>
					</li>
						
					<li>姓名：
						<p>
							<?php
								$xuehao=$_POST["xuehao"];
								$password=$_POST["password"];
								$link=mysqli_connect("localhost","root","123456","students");
								mysqli_set_charset($link,"utf8");
								$sql="select * from students where xuehao='$xuehao';";
								$result=mysqli_query($link,$sql);
								$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
								$name=$row["name"];
								echo "$name";
								?>
						</p>
					</li>

				    <li>班级：
						<p>
							<?php
								$xuehao=$_POST["xuehao"];
								$password=$_POST["password"];
								$link=mysqli_connect("localhost","root","123456","students");
								mysqli_set_charset($link,"utf8");
								$sql="select * from class,students where class.Id=students.class_id and xuehao='$xuehao';";
								$result=mysqli_query($link,$sql);
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
									$class_id=$row["class_id"];
									$Id=$row["Id"];
									$class_name=$row["class_name"];
									if($class_id=$Id){
										echo "$class_name";
									}
									
								}
							?>
						</p>
				    </li>
				    <li>专业：
						<p>
							<?php
								$xuehao=$_POST["xuehao"];
								$password=$_POST["password"];
								$link=mysqli_connect("localhost","root","123456","students");
								mysqli_set_charset($link,"utf8");
								$sql="select * from zhuanye,students where zhuanye.Id=students.zhuanye_id and xuehao='$xuehao' limit 1;";
								$result=mysqli_query($link,$sql);
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
									$class_id=$row["zhuanye_id"];
									$Id=$row["Id"];
									$mingcheng=$row["mingcheng"];
									if($class_id=$Id){
										echo "$mingcheng";
									}
									
								}
							?>
						</p>
				    </li>

					<li>时间：
						<p>
							<?php
							date_default_timezone_set("Asia/Shanghai");
							$date=date("Y-m-d");
							echo "$date";
							?>
						</p>
				    </li>

					<li>节次：
					<p>	
						<?php
							date_default_timezone_set("Asia/Shanghai");
							$time=date("H:i:s");
							$link=mysqli_connect("localhost","root","123456","students");
							mysqli_set_charset($link,"utf8");
							$sql="select * from time;";
							$result=mysqli_query($link,$sql);
							

							while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
								$sk_time=$row["sk_time"];
								$js_time=$row["js_time"];
								$bd_time=$row["bd_time"];
								

							if($time>=$bd_time and $time<$sk_time){
								
								$jieci=$row["jieci"];
								
								
							}elseif($sk_time<=$time and $time<$js_time) {
								
								$jieci=$row["jieci"];
								
								
							 }
							
							}echo "$jieci";

						?>
						
						</p>
					</li>
				     
				
				</ul>
			</div>
		</div>			

	<div id="after"><!-- 弹窗 -->

		<div class="top">
			<a href="">学生考勤签到</a>
			<!-- <p id="p1">x</p> -->
		</div>

		<div class="footer">
			<h5>签到成功，你的上课情况是：</h5>
			<h2 id="page">
			
				
			<?php
				date_default_timezone_set("Asia/Shanghai");
				$time=date("H:i:s");
				$link=mysqli_connect("localhost","root","123456","students");
				mysqli_set_charset($link,"utf8");
				$sql="select * from time;";
				$result=mysqli_query($link,$sql);
				

				while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
					$sk_time=$row["sk_time"];
					$js_time=$row["js_time"];
					$bd_time=$row["bd_time"];
					

				if($time>=$bd_time and $time<$sk_time){
					$jindu="准时";
					$jieci=$row["jieci"];
					
					
				}elseif($sk_time<=$time and $time<$js_time) {
					$jindu="迟到";
					$jieci=$row["jieci"];
					
				 }
				
				}
			?>
			
			<?php
							
				date_default_timezone_set("Asia/Shanghai");
				$date=date("Y-m-d");
				$link=mysqli_connect("localhost","root","123456","students");
				mysqli_set_charset($link,"utf8");
				$sql="select * from week;";
				$result=mysqli_query($link,$sql);			
				while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
								$begin=$row["begin"];
								$end=$row["end"];
								
				if($date>=$begin and $date<=$end){
								$weekend=$row["weekend"];
													
					}
						
				}
			?>	
			


			<?php
					$xuehao=$_POST["xuehao"];
					$day=date("l");
					$date=date("Y-m-d");
					date_default_timezone_set("Asia/Shanghai");
					$link=mysqli_connect("localhost","root","123456","students");
					mysqli_set_charset($link,"utf8");
					$sql="INSERT INTO `kaoqin`(`stu_id`,`class_name`,`zhuanye_name`,`date`,`day`,`kctime`,`kaoqin`,`jieci`,`week`) VALUES ('$xuehao','$class_name','$mingcheng','$date','$day','$time','$jindu','$jieci','$weekend')";
					$result=mysqli_query($link,$sql);
						
				?> 
				<?php
				
					$xuehao=$_POST["xuehao"];
					$link=mysqli_connect("localhost","root","123456","students");
						mysqli_set_charset($link,"utf8");
					$sql="select kaoqin,kctime from kaoqin where '$xuehao'=stu_id ORDER BY Id DESC LIMIT 1;";
					$result=mysqli_query($link,$sql);
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
					$jindu1=$row["kaoqin"];
					
					echo "$jieci:$jindu1";
					
				}
					
				?>

				
				
			</h2>
			<input id="p1" value="确 认" onclick="hide();" style="cursor:pointer;">
		</div>
	</div>
</div>
	 


		
</body>
<script>
	/*窗口的关闭*/
	/*$(document).ready(function(){
		$("#btn").click(function(){
			$("#after").css("display","block");
		});
		$("#p1").click(function(){
			$("#after").css("display","none");
			
		});
	});
*/

	function show()  //显示隐藏层和弹出层 
	{ 
	   var fugai=document.getElementById("fugai"); 
	   fugai.style.display="block";  //显示隐藏层 
	   document.getElementById("after").style.display="block";  //显示弹出层 
	} 
	function hide()  //去除隐藏层和弹出层 
	{ 
	   document.getElementById("fugai").style.display="none"; 
	   document.getElementById("after").style.display="none"; 
	   
	} 

	function myrefresh()

		{
		   window.location.reload();
		}
		setTimeout('myrefresh()',2700000); //指定1秒刷新一次
</script>
</html>