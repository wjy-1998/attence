<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>教师端</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/teacher.css">
</head>
<body>
	<div class="container">
		<div class="container_con">
			<div class="top">
				<img src="images/logo.png" alt="">
				<h2>考勤情况</h2>
				<a href="../index/index.php">退出</a>
			</div>
			<div class="content">
				<div class="content_box1">
					<form action="form1.php" method="post">
						<div class="date">
							<span>日期:</span>
							<select name="date" id="date">
								<?php
									$link = mysqli_connect("localhost","root","123456","students");
									mysqli_set_charset($link,"utf8");
									$sql = "select distinct date from kaoqin;";
									$result = mysqli_query($link,$sql);
									while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
										$date = $row["date"];
										echo "<option>$date</option>";
									}
								?>
							
							</select>
						</div>
						<div class="jieci">
							<span>节次:</span>
							<select name="jieci">
								<option value="第一节">第一节 </option>
								<option value="第二节">第二节</option>
								<option value="第三节">第三节</option>
								<option value="第四节">第四节</option>
								<option value="第五节">第五节</option>
								<option value="第六节">第六节</option>
								<option value="第七节">第七节</option>
								<option value="第八节">第八节</option>
							</select>
						</div>
						<div class="banzhang">
							<span id="s1">班长:</span>
							
							<?php
								$jiaoshihao = $_POST["jiaoshihao"];
								$link = mysqli_connect("localhost","root","123456","students");
								mysqli_set_charset($link,"utf8");
								$sql = "select * from class where Id='$jiaoshihao';";
								$result = mysqli_query($link,$sql);
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){

									$banzhang=$row["banzhang"];
									$class=$row["class_name"];
									
								}
							?>
						<?php
							echo "<input type='text' value='".$banzhang."' name='banzhang'>";
						?>
						</div>
						<div class="classname">
							<span id="s2">班级:</span>
							
						<?php
							echo "<input type='text' value='".$class."' name='banji'>";
						?>
						</div>
						<button>查询</button>
					</form>
				</div>

				<div class="content_box2">
					<form action="123456" method="post">
						<div class="content_box2_left">
							<ul name="place">
								<?php
									$jiaoshihao = $_POST["jiaoshihao"];
									$link = mysqli_connect("localhost","root","123456","students");
									mysqli_set_charset($link,"utf8");
									$sql = "select * from students where class_id='$jiaoshihao' limit 0,5;";
									$result = mysqli_query($link,$sql);
									while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
										$name = $row["name"];
										echo "<li>$name</li>";
										
									}

								?>
							</ul>
						</div>
						<div class="passroad"><span>通道</span></div>
						<div class="content_box2_center">
							<ul>
								<?php
									$jiaoshihao = $_POST["jiaoshihao"];
									$link = mysqli_connect("localhost","root","123456","students");
									mysqli_set_charset($link,"utf8");
									$sql = "select * from students where class_id='$jiaoshihao' limit 0,5;";
									$result = mysqli_query($link,$sql);
									while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
										$name = $row["name"];
										
										echo "<li>$name</li>";
										
									}

									
								?>
							</ul>
						</div>
						<div class="passroad"><span>通道</span></div>
						<div class="content_box2_left">
							<ul>
								<?php
									$jiaoshihao = $_POST["jiaoshihao"];
									$link = mysqli_connect("localhost","root","123456","students");
									mysqli_set_charset($link,"utf8");
									$sql = "select * from students where class_id='$jiaoshihao' limit 0,5;";
									$result = mysqli_query($link,$sql);
									while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
										$name = $row["name"];
										
										echo "<li>$name</li>";
										
									}
								?>
							</ul>
						</div>
						<div class="teacher_desk"><span>讲台</span></div>
					</form>
				</div>
			</div>
			<div class="footer">
				<p>©欢迎进入教师端考勤界面</p>
			</div>
		</div>
	




	</div>

	<script src="js/teacher.js"></script>
</body>
</html>