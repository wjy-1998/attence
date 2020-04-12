/*$(document).ready(function() {
	len = $("h1").length;
	console.log(len);
	$("h1").click(showTab);
	function showTab() {
		index = $(this).index();
		console.log(index);
		for(var i = 0;i < len;i++){
			if(i == index) {
		
				$("#form" + index).show();
				$(".active"+index).css("background","#04b0e2");
			}else {
				
				$("#form" + i).hide();
				$(".active"+i).css("background","#fff");
			}
		}		
	}	
});*/


function tab(id,aEve){//id 选项卡外框ID ，aEve按钮发生的事件
    var oBox = document.getElementById(id);
    //获取各个元素
    var aBtn = oBox.getElementsByTagName('h1');
    var aCont = oBox.getElementsByTagName('form');
 
    for (var i =0;i<aBtn.length;i++){
        aBtn[i].index=i; //为每个按钮自定义属性，该属性存放每个按钮的下标
        aBtn[i][aEve] = function () {
            for (var i = 0; i<aBtn.length;i++){
                aBtn[i].className='';//清空所有按钮选中样式
                aCont[i].className='';//清空所有内容样式
            }
            this.className = 'active';//为当前按钮添加选中样式
            aCont[this.index].className='on';//this.index对应当前按钮的下标  为当前所对应的内容添加显示样式
        }
    }
}
window.onload = function () {//网页加载结束后执行
    tab('box','onclick');//调用函数
}