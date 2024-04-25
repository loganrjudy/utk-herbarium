<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Herbarium = "localhost";
$database_Herbarium = "herbariumweb_2024";
$username_Herbarium = "herbariumweb";
$password_Herbarium = "C0ll3ct1on$2022!";
$Herbarium = new mysqli_connect($hostname_Herbarium, $username_Herbarium, $password_Herbarium, $database_Herbarium); 
$result = mysqli_query($Herbarium, $sqlQuery);
?>
