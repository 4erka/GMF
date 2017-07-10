// JavaScript Document
function fullScreen(link, windowName) {
	var scw = 0;
	var sch = 0;

	if (navigator.appName == 'Microsoft Internet Explorer' && (navigator.platform.substring(0,3) == 'Win')) {
		window.open(link, windowName,'fullscreen=yes,directories=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,resizable=no');
	}
	else if (navigator.appName == 'Netscape' && navigator.platform == 'MacPPC') {
		var scw=screen.width;
		var sch=screen.height;
		window.open (link, windowName, "screenX=0,screenY=0,outerWidth=" + scw + ",outerHeight=" + sch);
	}
	else {
		var scw=screen.width;
		var sch=screen.height;
		window.open (link, windowName, "screenX=0,screenY=0,Width=" + scw + ",Height=" + sch);	
	}
}

	var win=null;
	function NewWindow(mypage,myname,w,h,scroll,pos){
		if(pos=="random"){LeftPosition=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;TopPosition=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
		if(pos=="center"){LeftPosition=(screen.width)?(screen.width-w)/2:100;TopPosition=(screen.height)?(screen.height-h)/2:100;}
		else if((pos!="center" && pos!="random") || pos==null){LeftPosition=0;TopPosition=20}
		settings='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable=no,toolbar=no';
		win=window.open(mypage,myname,settings);
		if(win.focus){win.focus();}}
