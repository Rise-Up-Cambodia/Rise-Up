	function view(src){
		var viewbox = document.getElementById("viewer");
		viewbox.innerHTML = "<img src='" + src +"' id='img' />";
		var img = document.getElementById("img");
		var iw=0, ih=0;
		var dw=0, dh=0;	
		img.onload=function(){
			document.getElementById("ov").style.display="block";
			viewbox.style.display="block";
			iw = viewbox.offsetWidth;
			ih = viewbox.offsetHeight;
			dw = window.innerWidth;
			dh = window.innerHeight;
			viewbox.style.top = parseInt(dh/2-ih/2) + "px";
			viewbox.style.left = parseInt(dw/2-iw/2) + "px";
		};
	}
	function hide(){
		document.getElementById("viewer").style.display="none";
		document.getElementById("ov").style.display="none";
	}   