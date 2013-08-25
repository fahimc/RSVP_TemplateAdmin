(function(window) {

	function Main() {
		if (window.addEventListener) {
			window.addEventListener("load", onLoad);
			
		} else {
			window.attachEvent("onload", onLoad);
		}

	}

	function onLoad() {
	

	}
	
	window.response=function(msg) {
		switch(msg)
		{
			case -1:
			updateError("invalid username or password");
			break;
			case -2:
			updateError("invalid username or password");
			break;
			case 1:
			 location.href =  "../../index.php";
			break;
		}
	}
	 window.updateError=function(msg)
	{
		document.getElementById("error").innerHTML=msg;
	}
	Main();
})(window);
