 <?php
//Using SQL to log in to add an entry to my blog.

$host   =   "dbprojects.eecs.qmul.ac.uk"  ;
$username   =   "pp307"  ;
$password   =   "pVXMaKhVAOzcq"  ;
$db_name   =   "pp307"  ;
$table="logon";


mysql_connect("$host", "$username", "$password")or die("Cannot connect to server");
mysql_select_db("$db_name")or die("The database cannot be selected");

// Getting username and password from the form created on login.html
$myUser=$_POST['myusername'];
$myPass=$_POST['mypassword'];

//Used for SQL protection
$myUser = stripslashes($myUser);
$myPass = stripslashes($myPass);
$myUser = mysql_real_escape_string($myUser);
$myPass = mysql_real_escape_string($myPass);

$sql="SELECT * FROM $table WHERE username='$myUser' and password='$myPass'";
$outcome=mysql_query($sql);

// Count table rows
$count=mysql_num_rows($outcome);

// If $outcome matches $myUser and $myPass, the table row must be 1

if($count==1){

// Redirect to file "add_entry.html" if user name and password match, otherwise stay go to "login.html"
header("location:add_entry.html");
}
else {
header("location:login.html");
}

mysql_close ( $link );
?>

