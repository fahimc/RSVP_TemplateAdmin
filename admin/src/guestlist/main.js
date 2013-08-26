(function(window) {

	function Main() {
		if (window.addEventListener) {
			window.addEventListener("load", onLoad);
			
		} else {
			window.attachEvent("onload", onLoad);
		}

	}

	function onLoad() {
			if(downloadURL)showDownload(downloadURL);

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
		if(msg.indexOf('path')>=0)
		{
			var path ="lib/php/"+msg.replace("path:","");
			showDownload(path);
		}
	}
	function showDownload(path)
	{	
		document.getElementById("download").href=path;
		document.getElementById("download").style.display="block";
	}
	 window.updateError=function(msg)
	{
		
		document.getElementById("error").innerHTML=msg;
	}
	Main();
})(window);
