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
		
		switch(Number(msg))
		{
			case -1:
			updateError("Something went wrong. Please try again.");
			break;
			case -2:
			updateError("Something went wrong. Please try again.");
			break;
			case 1:
			// location.href =  "../../menu.php";
			break;
		}
	}
	 window.updateError=function(msg)
	{
		
		document.getElementById("error").innerHTML=msg;
	}
	Main();
})(window);
