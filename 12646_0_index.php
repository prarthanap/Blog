<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head> <title> Prarthana's Blog </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<style type = "text/css">

    body,
    html {
    margin:0;
    padding:0;
    color:#000;
    background:#E6E6E6;
    }


   #wrap {
    width:750px;
    margin:0 auto;
    background:#D0BCFE;
    }

   #header {
    padding:20px 220px;
    background:#E6DBFF;
    }
    
    h1 {
    margin:0;
    float:center;
    }


    #main {
    float:left;
    width:480px;
    padding: 50px;
    padding-bottom: 750px;    
    background:#D0BCFE;
    height:0;
    }

    #sidebar {
    float:right;
    width:150px;
    padding:10px;
    padding-bottom:800px;
    background:#BCA9F5;
    height:0;
    }


    #footer {
    clear:both;
    padding:5px 10px;
    background: #D3D3D3;
    }
    #footer p {
    color: white;
    margin:0;
    font-weight: bold;	
    }
</style>
<body>


    <div id="wrap">
    <div id="header">
    <img src ="header.png"></div>
    
    <div id="main">



<?php

	$numberOfHits = "hitcounter.txt";
	if (!file_exists($numberOfHits))
	{
	$put = fopen($numberOfHits, 'w') or die("Error: File not found");
	fwrite($put,"0");
	fclose($put);
	}	
	$hits = file($numberOfHits);
	$hits[0] ++;
	$put = fopen($numberOfHits , "w");
	fputs($put , "$hits[0]");
	fclose($put);
	echo '<center>' .'<font color="purple">' .'<strong>'. "Hit Count:  $hits[0]" .'<p>' .'</strong>'. '</font color>'.'</center>' ;

	
 	//output entries
	$text = file_get_contents("addentry.txt");
	echo  "$text";
?>

    </div>
    <div id="sidebar">
    
  
    
   <ul> 
	<li><a href="index.php">        Home </a></li>
	<li><a href="login.html">       Login </a></li>
	
 </ul>
   
    </div>
    <div id="footer">
    <p> Prarthana Prakash</p>
    </div>
    </div>

</body>
</html>

