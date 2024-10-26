<?php
define('DB_SERVER','192.168.29.4');
define('DB_USER','devopsuser');
define('DB_PASS' ,'Password#321@');
define('DB_NAME', 'onlinecourse');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>