<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php


$title = $_GET["User_name"];
$body = $_GET["body"]; 
date_default_timezone_set('UTC'); 
$date = date('D jS M  Y, H:i a e' ); //format date into day, month, year and time
$inserttitle = $title;
$insertbody = $body;
$linebreak = ("<br />");
$openh =("<h1 >");
$closeh = ("</h1>");
$fontColour = ("<font color = 'grey'>");
$closeColour = ("</font color>");
$italics = ("<i>");
$closeItalics= ("</i>");
$getContents = file_get_contents("addentry.txt");
$line = ("<hr />");

$handle = fopen("addentry.txt","w+") or die("unable to open file!");

fwrite($handle, $fontColour);

fwrite($handle, $date);

fwrite($handle, $closeColour);
fwrite($handle, $linebreak);
fwrite($handle, $openh);
fwrite($handle, $inserttitle);
fwrite($handle, $closeh);
fwrite($handle, $italics);
fwrite($handle, $insertbody);
fwrite($handle, $closeItalics);
fwrite($handle, $line);
fwrite($handle, $linebreak);
fwrite($handle, $getContents);


fclose($handle);

Header("Location: viewBlog.php") //redirects to viewBlog.php


?>
</body>
</html>​

