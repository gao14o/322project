<?php

	$servername = "localhost";
	$username = "gao14o_322project";
	$password = "123";
   $database ="gao14o_322project";
    //连接想要连接的数据库，localhost是本地服务器，root为数据库的账号，我的密码为0所以是空
    $con = new mysqli($servername, $username, $password,$database);
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query("SET CHARACTER SET utf8");
    
    if ($con) {
       
       

	}
   


    
?>