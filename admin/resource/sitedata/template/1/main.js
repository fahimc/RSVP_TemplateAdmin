(function(window) {

	function Main() {
		if (window.addEventListener) {
			window.addEventListener("load", onLoad);
			window.addEventListener("orientationchange", onResize);
		} else {
			window.attachEvent("onload", onLoad);
		}

	}

	function onLoad() {
		
		document.body.className=document.body.className.replace("hide","");
	}
	
	function onResize() {

	}
	window.currentSection="homeContent";
	window.changePage=function(name,target)
	{
		console.log(window.currentSection);
		setButton(target);
		document.getElementById(window.currentSection).className = document.getElementById(window.currentSection).className.replace(" selected","");
		document.getElementById(window.currentSection).className +=" disabled"; 
		window.currentSection=name;
		document.getElementById(window.currentSection).className = document.getElementById(window.currentSection).className.replace(" disabled","");
		document.getElementById(window.currentSection).className +=" selected"; 
	}
	window.setButton=function(target)
	{
		
		var button =window.currentSection.replace("Content","");
		button+="Button";
		var b = document.getElementById(button);
		b.className = b.className.replace(" selected","");
		target.className = target.className +=" selected"; 
		
	}
	Main();
})(window);
