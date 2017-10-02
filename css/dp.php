<?php
$hostname="localhost";
$database="School2";
$username="root";
$password="sara";
$con=mysql_connect($hostname,$username,$password);
if(!$con)
{
die("could not connect".mysql_error());
}
$select_db=mysql_select_db($database,$con);
if(!$select_db)
{mysql_close($con);
die("could not connect".mysql_error());
}
?>