<?php
//include("../controller/config.php");
include("config.php");
$tb_cuinfo = "CREATE TABLE IF NOT EXISTS cu_info( cuid INT auto_increment,
		primary key(cuid),
		name VARCHAR(50) NOT NULL,
		phone VARCHAR(14) NOT NULL,
		uname VARCHAR(20) NOT NULL,
		password VARCHAR(20) NOT NULL)";
		
		$cuinfo=mysqli_query($myconn,$tb_cuinfo);
		
		if($cuinfo===TRUE)
		{
			echo "Cuinfo table created";
		}
		else
		{
			echo "Not Created";
		}
           									

?>