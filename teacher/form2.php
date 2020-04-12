<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>教师端</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/teacher.css">

</head>
<body>
<?php
					$pingfen = $_POST["pingfen"];
					$pingyu = $_POST["pingyu"];
					$xuehao = $_POST["xuehao"];
					$kctime = $_POST["Time"];
					$replace = $_POST["replace"];
					$link = mysqli_connect("localhost","root","123456","students");
					mysqli_set_charset($link,"utf8");
					$sql = "update kaoqin set pingfen='$pingfen' where stu_id ='$xuehao' and kctime='$kctime';";
					$result = mysqli_query($link,$sql);
					$sql1 = "update kaoqin set pingyu='$pingyu' where stu_id ='$xuehao' and kctime='$kctime';";
					$result1 = mysqli_query($link,$sql1);
					$sql2 = "update kaoqin set kaoqin='$replace' where stu_id ='$xuehao' and kctime='$kctime';";
					$result2 = mysqli_query($link,$sql2);
					
	?>
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
							<select name="jieci" id="">
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
							$sql="select * from students,class where class.Id=students.class_id and xuehao='$xuehao';";
							$link = mysqli_connect("localhost","root","123456","students");
							mysqli_set_charset($link,"utf8");
							$result = mysqli_query($link,$sql);
							while($row=mysqli_fetch_array($result)){
								$banzhang=$row["banzhang"];

								echo "<input type='text' value='".$banzhang."' name='banzhang'>";
							}
							
							
						?>
						</div>
						<div class="classname">
							<span id="s2">班级:</span>
							
						<?php
							$sql="select * from students,class where class.Id=students.class_id and xuehao='$xuehao';";
							$link = mysqli_connect("localhost","root","123456","students");
							mysqli_set_charset($link,"utf8");
							$result = mysqli_query($link,$sql);
							while($row=mysqli_fetch_array($result)){
								$banji=$row["class_name"];
								echo "<input type='text' value='".$banji."' name='banji'>";
							}
							
							
						?>
						</div>
						<button>查询</button>
					</form>
				</div>
				<div class="content_box2">
					
						<div class="content_box2_left">
							<ul>
								<?php
									$link = mysqli_connect("localhost","root","123456","students");
									$sq="select * from kaoqin where stu_id='$xuehao';";
									$rs=$result = mysqli_query($link,$sq);
									while($first=mysqli_fetch_array($result)){
										$jieci=$first["jieci"];
										$date=$first["date"];
									}
									mysqli_set_charset($link,"utf8");
									$sql = "select * from kaoqin as a where not exists(select 1 from kaoqin where stu_id = a.stu_id  and a.kctime > kctime and jieci = '$jieci');";
									$result = mysqli_query($link,$sql);
									while($row=mysqli_fetch_array($result)){
										$date1 = $row["date"];
										$jieci1 = $row["jieci"];
										$kctime = $row["kctime"];
										$stu_id = $row["stu_id"];
										$kaoqin = $row["kaoqin"];

										$sql1 = "select * from students,class where students.class_id=class.Id and xuehao = '$stu_id' and class_name = '$banji';";
										$result1 = mysqli_query($link,$sql1);
										$row1 = mysqli_fetch_array($result1);
										$class=$row1["class_name"];
										if($date==$date1 and $jieci==$jieci1 and $banji==$class){
												$name = $row1["name"];
											
												echo "<li onclick='showModel(this)'>$name <a id='stu_id'>$stu_id</a><a id='kaoqin'>$kaoqin</a><a id='kctime'>$kctime</a></li>";
												
										}
									}
								?>
							
							</ul>
						</div>
						<div class="passroad"><span>通道</span></div>
						<div class="content_box2_center">
							<ul>
								<?php
									$link = mysqli_connect("localhost","root","123456","students");
									$sq="select * from kaoqin where stu_id='$xuehao';";
									$rs=$result = mysqli_query($link,$sq);
									while($first=mysqli_fetch_array($result)){
										$jieci=$first["jieci"];
										$date=$first["date"];
									}
									mysqli_set_charset($link,"utf8");
									$sql = "select * from kaoqin as a where not exists(select 1 from kaoqin where stu_id = a.stu_id  and a.kctime > kctime and jieci = '$jieci');";
									$result = mysqli_query($link,$sql);
									while($row=mysqli_fetch_array($result)){
										$date1 = $row["date"];
										$jieci1 = $row["jieci"];
										$kctime = $row["kctime"];
										$stu_id = $row["stu_id"];
										$kaoqin = $row["kaoqin"];
										$sql1 = "select * from students,class where students.class_id=class.Id and xuehao = '$stu_id' and class_name = '$banji';";
										$result1 = 	mysqli_query($link,$sql1);
										$row1 = mysqli_fetch_array($result1);
										$class=$row1["class_name"];
										if($date==$date1 and $jieci==$jieci1 and $banji==$class)
											{	$name = $row1["name"];
												
												echo "<li onclick='showModel(this)'>$name<a id='stu_id'>$stu_id</a><a id='kaoqin'>$kaoqin</a><a id='kctime'>$kctime</a></li>";
												
										}
									}
								?>
							</ul>

						</div>
						<div class="passroad"><span>通道</span></div>
						<div class="content_box2_left">
							<ul>
								<?php
									$link = mysqli_connect("localhost","root","123456","students");
									$sq="select * from kaoqin where stu_id='$xuehao';";
									$rs=$result = mysqli_query($link,$sq);
									while($first=mysqli_fetch_array($result)){
										$jieci=$first["jieci"];
										$date=$first["date"];
									}
									mysqli_set_charset($link,"utf8");
									$sql = "select * from kaoqin as a where not exists(select 1 from kaoqin where stu_id = a.stu_id  and a.kctime > kctime and jieci = '$jieci');";
									$result = mysqli_query($link,$sql);
									while($row=mysqli_fetch_array($result)){
										$date1 = $row["date"];
										$jieci1 = $row["jieci"];
										$kctime = $row["kctime"];
										$stu_id = $row["stu_id"];
										$kaoqin = $row["kaoqin"];
										$sql1 = "select * from students,class where students.class_id=class.Id and xuehao = '$stu_id' and class_name = '$banji';";
										$result1 = 	mysqli_query($link,$sql1);
										$class=$row1["class_name"];
										if($date==$date1 and $jieci==$jieci1 and $banji==$class){
												$name = $row1["name"];
												echo "<li></li>";
												echo "<li onclick='showModel(this)'>$name<a id='stu_id'>$stu_id</a><a id='kaoqin'>$kaoqin</a><a id='kctime'>$kctime</a></li>";
												
										}
									}
								?>
							</ul>
						</div>
						<div class="teacher_desk"><span>讲台</span></div>
					
				</div>
			</div>
			<div class="footer">
				<p>©欢迎进入教师端考勤界面</p>
			</div>

			<!-- 弹框 -->
			<div id="showDiv" class="showDiv">
				<p>
					<span id="titleName"></span>
					<a href="#" class="closebtn" onclick="closeDiv();">&times;</a>
				</p>
				<form action="form2.php" method="post">
					<div class="formContent">
						<p>
							<label>当前签到情况:</label>
							<span class="Text" id="Text"></span>
							<label>签到时间:</label>
							<span>
								<a id="Time"></a>
							</span>
							<input type="text" id="input1" value="" name="Time">
						</p>
						<div id="Score">
							<label>评分:</label>
							<ul>
								<li><a>1</a></li>
								<li><a>2</a></li>
								<li><a>3</a></li>
								<li><a>4</a></li>
								<li><a>5</a></li>
							</ul>
							<span id="score">

							</span>
							<a href="#" id="pingfen"></a>
							<input type="text" id="input2" value="" name="pingfen">
							<input type="text" id="input3" value="" name="xuehao">
							<p></p>
						</div>
						<div class="textarea">
							评语:<textarea name="pingyu"></textarea>
						</div>
					</div>
					<div class="formfooter">
						<span>
							重新修改签到情况:
							<input type="text" name="replace" id="replace" >
						</span>
						<button id="submit">评价提交</button>
					</div>
				</form>
				
			</div>

			<!-- 旷课框 -->
			<div class="kuangke" id="kuangke1">
				<div class="kuangke_left">
					<a href="#" onclick="kuangke();" id="kuangke_tit">旷课</a>
				</div>
				<div class="kuangke_right">
					<h2>添加旷课学生</h2>

					<form action="form3.php" method="post">
						<p>
							<label>学生学号:</label><input type="text" value="" name="name">
						</p>
						<p><label for="">学生班级:</label>
							<?php
						
							echo "<input type='text' value='".$banji."' name='banji'>";
						?>
						</p>
						<p>
							<label>学生专业:</label><select name="zhuanye" id="zhuanyeId">
									<?php
										$link=mysqli_connect("localhost","root","123456","students");
										mysqli_set_charset($link,"utf8");
									
										$sql="select * from zhuanye;";
										$result=mysqli_query($link,$sql);
										while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
												$zhuanye=$row["mingcheng"];
												echo "<option id='op'>$zhuanye</option>";
											
										}
									?>
									
								</select>
						</p>
						<p>
							<label>日期:</label>
							<select name="date" id="">
								<?php
									$link = mysqli_connect("localhost","root","123456","students");
									$sql = "select distinct date from kaoqin;";
									mysqli_set_charset($link,"utf8");
									$result = mysqli_query($link,$sql);
									while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
										$date = $row["date"];
										echo "<option>$date</option>";
									}
								?>
							</select>
							<label>星期几:</label>
							
								<?php
									$day = date("l");
									echo "<input type='text' value='".$day."' name='day'>";
								?>
							
							</p>
							<p>
							<label>节次:</label>
							<select name="kkjieci" id="">
								<option value="第一节">第一节 </option>
								<option value="第二节">第二节</option>
								<option value="第三节">第三节</option>
								<option value="第四节">第四节</option>
								<option value="第五节">第五节</option>
								<option value="第六节">第六节</option>
								<option value="第七节">第七节</option>
								<option value="第八节">第八节</option>
							</select>
							<label>周次:</label>
								<select name="weekend">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
								</select>
						</p>
						<p>
							<label>考勤:</label>
							<input type="text" value="旷课" name="kkkaoqin" id="kkkaoqin">
							
						</p>
						<p>
							<label>评分:</label>
							<input type="text" value="" name="kkpingfen" id="kkpingfen">
						</p>
						<p>
							<button>提交</button>
						</p>
					</form>
				
				</div>
			</div>

		</div>
	</div>
	<script src="js/teacher.js"></script>
</body>
</html>




