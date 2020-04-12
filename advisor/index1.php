<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	
	<title>考勤情况</title>
</head>
<body>


	<section>
		<div class="right">
			<div class="content">
				<div class="ctop">
				</div>
				<!-- 考勤内容  -->
				<form method="POST" action="week.php" id="form">
				<div class="cmain">
					<div class="cccc">
						<!-- 条件查询 -->
						<div class="nav">
						
							<div class="class class1" value="1">
								班级：<select name="class" id="class">
										<option value=""></option>
							
									<?php
									
										$link=mysqli_connect("localhost","root","123456","students");
										$sql="select * from class;";
										mysqli_set_charset($link,"utf8");
										$result=mysqli_query($link,$sql);
										while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
												$class_name=$row["class_name"];
										
												echo "<option>$class_name</option>";
											
											
										}

									?>
											
								</select>
							</div>
							<div class="class" value="2">
								专业：
								<select name="zhuanye" id="zhuanyeId">
									<option value=""></option>
									<?php
										$link=mysqli_connect("localhost","root","123456","students");
										$sql="select * from zhuanye;";
										mysqli_set_charset($link,"utf8");
										$result=mysqli_query($link,$sql);
										while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
												$zhuanye=$row["mingcheng"];
										
												echo "<option id='op'>$zhuanye</option>";
											
											
										}

									?>
											
									
								</select>
							</div>
							<div class="class" value="3">
								年级：
								<select name="grade" id="grade">
									<option value=""></option>
									<option value="17级">17级</option>
									<option value="18级">18级</option>
									<option value="19级">19级</option>
								</select>
							</div>	
							<div class="week weeks">
								第
								<select name="weekend" id="weeksId">
									<option value=""></option>
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
								周
							</div>
							<div class="week day">
								星期
								<select name="weekName" id="weekName">
								
									<option value="0">一</option>
									<option value="1">二</option>
									<option value="2">三</option>
									<option value="3">四</option>
									<option value="4">五</option>
									<option value="5">六</option>
									<option value="6">日</option>
									<option value="7"></option>
								</select>
							</div>
							
							
							<div class="button">
								<button id="btn">查 询</button>
							</div>
						</form>
					</div>
						
					</div>
				</div>
						
				<!-- </form> -->
			</div>
		</div>
		
	</section>
</body>

</html>