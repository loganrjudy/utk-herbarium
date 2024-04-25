<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Herbarium = "mariadbx0.oit.utk.edu";
$database_Herbarium = "herbariumweb_wordpress";
$username_Herbarium = "herbariumweb";
$password_Herbarium = "Jup1t3r!";
$Herbarium = mysql_pconnect($hostname_Herbarium, $username_Herbarium, $password_Herbarium) or trigger_error(mysqli_error(),E_USER_ERROR); 
?>
