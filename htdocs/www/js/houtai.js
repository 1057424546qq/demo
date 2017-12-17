window.onload = function(){
		setInterval(mytime,1000);
		mytime();
	function mytime(){
		
		var ti = document.getElementsByClassName('time')[0];
		var time = new Date();
		var year = time.getFullYear();
		console.log(year)
		var month = time.getMonth()+1;
		var day = time.getDate();
		var hou = time.getHours();
		var min = time.getMinutes();
		var sec = time.getSeconds();
		
		var timer = year+'年'+month+'月'+day+'日'+totime(hou)+':'+totime(min)+':'+totime(sec);
		console.log(timer)
		ti.innerHTML = timer;
		function totime(n){
			return n<10 ? '0'+n : ''+n;
		}
	}
}
	
	
	
	