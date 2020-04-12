//定义时间函数
function autoTime() {
		//获取id
	var p1 = document.getElementById("pText");
	//定义一个字符串：
	var day = new Date().getDay();
	var week = "日一二三四五六";
	//获取时间
	var hours = new Date().getHours();
	var minutes = new Date().getMinutes();
	var seconds = new Date().getSeconds();
	p1.innerHTML = "星期" + week.substr(day,1) + "<br>   " +
	 hours + ":" + minutes + ":" + seconds;
	 
	//console.log(++a);
	setTimeout(autoTime,1000);

}

setInterval(autoTime,1000); //1000毫秒
