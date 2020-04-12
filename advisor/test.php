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
				<form method="POST" action="test.php" id="form">
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
		
				<!-- 第几周星期几班级的查询情况 -->	
				<div class="center">
					<ul>
						<li>班级:<?php $class=$_POST["class"]; echo "$class";?></li>
						<li>专业:<?php $zhuanye=$_POST["zhuanye"]; echo "$zhuanye";?></li>
						<li>年级:<?php $grade=$_POST["grade"]; echo "$grade";?></li>
					</ul>
					
					<!-- 班级签到情况 -->
					<p>
						迟到学生姓名：<?php
							$weekend=$_POST["weekend"];/*获取第几周*/
							$weekName=$_POST["weekName"];/*获取周几*/
						
						    $link=mysqli_connect("localhost","root","123456","students");
							$sql="select * from kaoqin,students where students.xuehao=kaoqin.stu_id and class_name='$class' and kaoqin='迟到';";
								mysqli_set_charset($link,"utf8");
								$result=mysqli_query($link,$sql);
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
									$week=$row["week"];
									$day=$row["day"];									
									$kaoqin=$row["kaoqin"];
									$name=$row["name"];
				                
								$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
											
									for($i=0;$i<8;$i++){
										if($weekName==$i){	
										if ($enweek[$i]==$day) {
										$class=$_POST["class"];
										echo "<a>$name</a>";	
							   }
							 } 							
							}
						 }
						$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
						$sql="select * from kaoqin,students where students.xuehao=kaoqin.stu_id and zhuanye_name='$zhuanye' and kaoqin='迟到' and week='$weekend' and day='$enweek[$weekName]';";
								mysqli_set_charset($link,"utf8");
								$result=mysqli_query($link,$sql);
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
								   $name=$row["name"];										
						 			echo "<a>$name</a>";
								}
						
						$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
						$sql="select * from kaoqin,students where students.xuehao=kaoqin.stu_id and grade='$grade' and kaoqin='迟到' and week='$weekend' and day='$enweek[$weekName]';";
								mysqli_set_charset($link,"utf8");
								$result=mysqli_query($link,$sql);
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
								   $name=$row["name"];										
						 			echo "<a>$name</a>";
								}	

						echo "</p>";
						
						echo "<p>旷课学生姓名：";	
							
						    $link=mysqli_connect("localhost","root","123456","students");
							$sql1="select * from kaoqin,students where students.xuehao=kaoqin.stu_id and class_name='$class' and kaoqin='旷课';";
								mysqli_set_charset($link,"utf8");
								$result1=mysqli_query($link,$sql1);
								while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
									
									$day1=$row1["day"];									
									
									$name1=$row1["name"];
				                
								$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
											
									for($i=0;$i<7;$i++){
										if($weekName==$i){	
										if ($enweek[$i]==$day1) {
										   
											echo "<a>$name1</a>";	
								   }
								 } 							
								}
							 }

						$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
						$sql="select * from kaoqin,students where students.xuehao=kaoqin.stu_id and zhuanye_name='$zhuanye' and kaoqin='旷课' and week='$weekend' and day='$enweek[$weekName]';";
								mysqli_set_charset($link,"utf8");
								$result=mysqli_query($link,$sql);
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
								   $name=$row["name"];										
						 			echo "<a>$name</a>";
								}

						$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
						$sql="select * from kaoqin,students where students.xuehao=kaoqin.stu_id and grade='$grade' and kaoqin='旷课' and week='$weekend' and day='$enweek[$weekName]';";
								mysqli_set_charset($link,"utf8");
								$result=mysqli_query($link,$sql);
								while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
								   $name=$row["name"];										
						 			echo "<a>$name</a>";
								}
					 	echo "</p>";

				    	echo "<p>迟到学生人数：";
					    	if($class==$class and $zhuanye=="" and $grade==""){
					    		$link=mysqli_connect("localhost","root","123456","students");
								$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
								$sql2="select count(*) from kaoqin where kaoqin='迟到' and class_name='$class' and day='$enweek[$weekName]' and week='$weekend';";
								$result2=mysqli_query($link,$sql2);
								while($second=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
									$sum=$second["count(*)"];	
									echo "$sum";					   
							}
					    	}elseif($class=="" and $zhuanye==$zhuanye and $grade==""){
					    		$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
					    		$sql4="select count(*) from kaoqin where kaoqin='迟到' and zhuanye_name='$zhuanye' and day='$enweek[$weekName]' and week='$weekend';";
								$result4=mysqli_query($link,$sql4);
								while($second=mysqli_fetch_array($result4,MYSQLI_ASSOC)){
									$sum1=$second["count(*)"];	
									echo "$sum1";
								}
					    	}else{
					    		$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
					    		$sql5="select count(*) from kaoqin,students where students.xuehao=kaoqin.stu_id and kaoqin='迟到' and grade='$grade' and day='$enweek[$weekName]' and week='$weekend';";
								$result5=mysqli_query($link,$sql5);
								while($second=mysqli_fetch_array($result5,MYSQLI_ASSOC)){
								
								$sum2=$second["count(*)"];	
								echo "$sum2";					   
							
								}
					    	}
						    
						echo "</p>"; 
					 	
				    	echo "<p>旷课学生人数：";
				    	if($class==$class and $zhuanye=="" and $grade==""){
					    	$link=mysqli_connect("localhost","root","123456","students");
							$class=$_POST["class"];
							$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配			
							$sql6="select count(*) from kaoqin where kaoqin='旷课' and class_name='$class' and day='$enweek[$weekName]' and week='$weekend';";
							$result6=mysqli_query($link,$sql6);
							while($second=mysqli_fetch_array($result6,MYSQLI_ASSOC)){
								$sum3=$second["count(*)"];	
								echo "$sum3";					   
								
						      }	
					    	}elseif($class=="" and $zhuanye==$zhuanye and $grade==""){
								$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配			
								$sql7="select count(*) from kaoqin where kaoqin='旷课' and zhuanye_name='$zhuanye' and day='$enweek[$weekName]' and week='$weekend';";
								$result7=mysqli_query($link,$sql7);
								while($second=mysqli_fetch_array($result7,MYSQLI_ASSOC)){
									$sum4=$second["count(*)"];	
									echo "$sum4";					   
						      }
					    	}else{
					    		$enweek=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","");//这个用来和数据库匹配
					    		$sql8="select count(*) from kaoqin,students where students.xuehao=kaoqin.stu_id and kaoqin='旷课' and grade='$grade' and day='$enweek[$weekName]' and week='$weekend';";
									$result8=mysqli_query($link,$sql8);
									while($second=mysqli_fetch_array($result8,MYSQLI_ASSOC)){
										$sum5=$second["count(*)"];	
										echo "$sum5";					   
										
								}
					    	}
						echo "</p>"; 
					 	?>
				</div>

					   </div>
					</div>
				</div>
						
				<!-- </form> -->
			</div>
		</div>
		
	</section>
</body>

</html>