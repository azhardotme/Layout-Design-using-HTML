<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="customer";

$myconn=mysqli_connect("$db_host","$db_user","$db_password","$db_name");
$sql="Create DATABASE customer";
$result=mysqli_query($myconn,$sql);

if(mysqli_connect_error())
{
	echo mysqli_connect_error();
}
else{
	echo "Connected";
}


?>