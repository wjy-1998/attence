function showModel(e){
	e.style.background = "#ADB0B5"; 
	var childs = e.childNodes;
	/*console.log(childs[0]); //读取名字值
	console.log(childs[1].innerHTML); //读取学号值*/
	var titleName = document.getElementById("titleName");
	titleName.innerHTML = childs[0].nodeValue + childs[1].innerHTML;
	var showDiv = document.getElementById("showDiv");
	showDiv.style.display = "block";
	var text = document.getElementById("Text");
	text.innerHTML = childs[2].innerHTML;
	var time = document.getElementById("Time");
	time.innerHTML = childs[3].innerHTML;
	var input1 = document.getElementById("input1");
	input1.value = time.innerHTML;
	var input3 = document.getElementById("input3");
	input3.value = childs[1].innerHTML;
	var replace = document.getElementById("replace");
	replace.value = childs[2].innerHTML; 
}

function closeDiv(){
	var closeDiv = document.getElementById("showDiv");
	closeDiv.style.display = "none";
}

window.onload = function(){
	var score = document.getElementById("Score");
	var scoreLi = score.getElementsByTagName("li");
	var scoreUl = score.getElementsByTagName("ul")[0];
	var scoreSpan = score.getElementsByTagName("span")[0];
	var scoreP = score.getElementsByTagName("p")[0];
	var i = iScore = iStar = 0;
	var aMsg = [
		"差|该学生的平时表现不佳",
		"及格|该学生的平时表现一般",
		"中|该学生的平时表现中等",
		"良|该学生的平时表现良好",
		"优|该学生的平时表现优秀"
	]
	for(i = 1;i <= scoreLi.length;i++){
		scoreLi[i - 1].index = i;
		scoreLi[i - 1].onmouseover = function(){
			Point(this.index);
			scoreP.style.display = "block";
			scoreP.style.left = scoreUl.offsetLeft + this.index * this.offsetWidth - 90 + "px";
			scoreP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1];		
		}
		scoreLi[i - 1].onmouseout = function(){
			Point();
			scoreP.style.display = "none";
		}
		scoreLi[i - 1].onclick = function(){
			iStar = this.index;
			scoreP.style.display = "none";
			scoreSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")";
			var score = this.index;
			var input2 = document.getElementById("input2");
			input2.value = score;
		}	
	}
	//评分处理
	function Point(iArg){
    //分数赋值
    iScore = iArg || iStar;
    for (i = 0; i < scoreLi.length; i++) scoreLi[i].className = i < iScore ? "on" : "";
  }
}


function kuangke(){
	var kuangke = document.getElementById("kuangke1");
	kuangke.style.right = "0px";
	var kuangke_tit = document.getElementById("kuangke_tit");
	kuangke_tit.style.display = "none";

}

