<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>All report </title>

<!--<link href="includes/css1/maincss.css" rel="stylesheet" type="text/css" />-->
<link href="includes/css/stylesheet.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	background-color:ghostwhite;
}
a:link {
	text-decoration: none;
	
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;

}
a:active {
	text-decoration: none;
	
}
-->
</style>

<script type="text/javascript">

/***********************************************
* Switch Menu script- by Martial B of http://getElementById.com/
* Modified by Dynamic Drive for format & NS4/IE4 compatibility
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var persistmenu="yes" //"yes" or "no". Make sure each SPAN content contains an incrementing ID starting at 1 (id="sub1", id="sub2", etc)
var persisttype="sitewide" //enter "sitewide" for menu to persist across site, "local" for this page only

if (document.getElementById){ //DynamicDrive.com change
document.write('<style type="text/css">\n')
document.write('.submenu{display: none;}\n')
document.write('</style>\n')
}

function SwitchMenu(obj){
	if(document.getElementById){
	var el = document.getElementById(obj);
	var ar = document.getElementById("masterdiv").getElementsByTagName("span"); //DynamicDrive.com change
		if(el.style.display != "block"){ //DynamicDrive.com change
			for (var i=0; i<ar.length; i++){
				if (ar[i].className=="submenu") //DynamicDrive.com change
				ar[i].style.display = "none";
				 parent.balanceList.location.href="index.php";	
			}
			el.style.display = "block";
		}else{
			el.style.display = "none";
		}
	}
}

function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function onloadfunction(){
if (persistmenu=="yes"){
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=get_cookie(cookiename)
if (cookievalue!="")
document.getElementById(cookievalue).style.display="block"
}
}

function savemenustate(){
var inc=1, blockid=""
while (document.getElementById("sub"+inc)){
if (document.getElementById("sub"+inc).style.display=="block"){
blockid="sub"+inc
break
}
inc++
}
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=(persisttype=="sitewide")? blockid+";path=/" : blockid
document.cookie=cookiename+"="+cookievalue
}

if (window.addEventListener)
window.addEventListener("load", onloadfunction, false)
else if (window.attachEvent)
window.attachEvent("onload", onloadfunction)
else if (document.getElementById)
window.onload=onloadfunction

if (persistmenu=="yes" && document.getElementById)
window.onunload=savemenustate

function move_air()
{
	 parent.balanceList.location.href="AOS.php";	
}
function move_engi_rate()
{
	 parent.balanceList.location.href="aopMain.php";	
	   
}


function move_engi_remo()
{
	 parent.balanceList.location.href="engineremoval.php";	
}
function move_etops_relia()
{
	 parent.balanceList.location.href="index2.php";	
}
function tek_delay()
{
	 parent.balanceList.location.href="kape1.php";	
}
function move_rel_graph()
{
	 parent.balanceList.location.href="reliabilitygraph.php";	
}

function move_pilot()
{
 parent.balanceList.location.href="pirep.php";	
}
function move_etops_event()
{
 parent.balanceList.location.href="etops.php";	
}
function move_cumu()
{
 parent.balanceList.location.href="cumulative.php";	
}
function eos()
{
 parent.balanceList.location.href="EOS.php";	
}
function weekly()
{
 parent.balanceList.location.href="weekly-real.php";	
}
function summary()
{
 parent.balanceList.location.href="reportbulanan.php";	
}
function pirepperformance()
{
 parent.balanceList.location.href="pirepperformance.php";	
}
function delayperformance()
{
 parent.balanceList.location.href="delayperformance.php";	
}
function systperformance()
{
 parent.balanceList.location.href="ApuOS.php";	
}
function apuremoval()
{
 parent.balanceList.location.href="apu_removal.php";	
}

</script>
</head>

<body>

<!-- Keep all menus within masterdiv-->
<div id="masterdiv">

	<div class="menutitle" onclick="SwitchMenu('sub1')">All Report</div>
	<span class="submenu" id="sub1"><table width="197" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" onclick="move_air()" valign="top" style="cursor:hand">Aircraft Operation Summary</td>
  </tr>
    <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="move_pilot()" style="cursor:hand">Pilot Report And Technical Delay</td>
  </tr>
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="move_cumu()" style="cursor:hand">Cumulative Flight Hours and Take Off</td>
  </tr>
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="move_etops_relia()" style="cursor:hand" >Etops Reliability Report</td>
  </tr> 
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="move_etops_event()" style="cursor:hand">Etops Event</td>
  </tr>
   <!--<tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="move_etops_relia()" style="cursor:hand">Etops Reliability Report</td>
  </tr>-->
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="move_rel_graph()" style="cursor:hand">Reliability Graph</td>
  </tr>
   <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="eos()" style="cursor:hand">Engine Operation Summary</td>
  </tr>
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="move_engi_remo()" style="cursor:hand">Engine Removal & ShutDown</td>
  </tr>
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="weekly()" style="cursor:hand">Weekly Reliability Report</td>
  </tr>
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="summary()" style="cursor:hand">Summary Report</td>
  </tr>
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="pirepperformance()" style="cursor:hand">Graph ATA Pilot</td>
  </tr>
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="delayperformance()" style="cursor:hand">Graph ATA Delay</td>
  </tr>
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="systperformance()" style="cursor:hand">APU Operation Summary</td>
  </tr>
  <tr>
    <td width="23" height="31" valign="top"><img src="images/plane.gif" width="19" height="20" /></td>
    <td width="174" valign="top" onclick="apuremoval()" style="cursor:hand">APU Removal</td>
  </tr>
 
</table>


		
	</span>

	

</div>

</body>
</html>
