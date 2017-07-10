<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body><?
$prev_next_array[] = array("2002q1", "1st Quarter 2002");
$prev_next_array[] = array("2002q2", "2nd Quarter 2002");
$prev_next_array[] = array("2002q3", "3rd Quarter 2002");
$prev_next_array[] = array("2002q4", "4th Quarter 2002");
$prev_next_array[] = array("2003q1", "1st Quarter 2003");
$prev_next_array[] = array("2003q2", "2nd Quarter 2003");
$prev_next_array[] = array("2003q3", "3rd Quarter 2003");

//$url = eregi_replace(".php$","",$PHP_SELF);
//$split = split("/",$url);
// go to last element
//$mykey = end($split);
$mykey = "2002q1";

// Now I know what page I'm on

$count = count ($prev_next_array);
print_r ($prev_next_array);
for ($i=0; $i<$count; $i++){
   print ("<p>");
   if ($prev_next_array[$i][0] == $mykey){
      if ($i>0){
         $prev=$i-1;
         print ("<a href=\"" . $prev_next_array[$prev][0] . ".php\">".$prev_next_array[$prev][1]."</a>");
      }else{
         print ("<a href=\"index.php\">Home</a>");
      }
      // this page
      print (" | <b>".$prev_next_array[$i][1]."</b> | ");
      if ($i < $count-1){
         $next=$i+1;
         print ("<a href=\"" . $prev_next_array[$next][0] . ".php\">".$prev_next_array[$next][1]."</a>");
      }else{
         print ("<a href=\"index.php\">Home</a>");
      }
   }
   print ("</p>");
} ?>
</body>
</html>
