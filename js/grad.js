			
			var red   = 0;//(
			var green = 0;//	black
			var blue  = 0;// )
			
			var opacity = 1;
			
			var change_time = 1;
			
			function color(red = 255,green = 255,blue = 255,opacity = 1,element = document.body){
				element.style.backgroundColor = "rgba("+red+","+green+","+blue+","+opacity+")";
			}
			
			function red_up(){
				if(red <= 254){
					red++;
					color(red,green,blue,opacity);
					setTimeout("red_up()",change_time);
				}
			}
			function green_up(){
				if(green <= 254){
					green++;
					color(red,green,blue,opacity);
					setTimeout("green_up()",change_time);
				}
			}
			function blue_up(){
				if(blue <= 254){
					blue++;
					color(red,green,blue,opacity);
					setTimeout("blue_up()",change_time);
				}
			}
			
			function red_down(){
				if(red >= 1){
					red--;
					color(red,green,blue,opacity);
					setTimeout("red_down()",change_time);
				}
			}
			function green_down(){
				if(green >= 1){
					green--;
					color(red,green,blue,opacity);
					setTimeout("green_down()",change_time);
				}
			}
			function blue_down(){
				if(blue >= 1){
					blue--;
					color(red,green,blue,opacity);
					setTimeout("blue_down()",change_time);
				}
			}
			
			function main(){
				if(red < 255)
					setTimeout("red_up()",1);
					
					setTimeout("green_up()",256);
					setTimeout("red_down()",510);
					setTimeout("blue_up()",760);
					setTimeout("green_down()",1020);
					setTimeout("red_up()",1270);
					setTimeout("blue_down()",1530);
					setTimeout("main()",1790)
					
			}

window.onload = function(){
			color(100,10,30,1);
			main();
}