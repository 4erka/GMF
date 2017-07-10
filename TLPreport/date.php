<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
function get_current_datestamp(){
    //get the current timestamp
    $currdate = gmdate("Ymd");
    $currday = substr($currdate,6,2);
    $currmonth = substr($currdate,4,2);
    $curryear = substr($currdate,0,4);
    $currdate_stamp = ($curryear . "-" . $currmonth . "-" . $currday);

    return $currdate_stamp;

}
echo get_current_datestamp();
?> 

</body>
</html>
