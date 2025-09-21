<?php

$host='sql212.epizy.com';
$user='epiz_27249791';
$pass='ilefXSl9QIE3MA8';
$db='epiz_27249791_MyDatabase';

$con=mysqli_connect($host,$user,$pass,$db);
if(!$con) {
echo "Not connected to the database"; 
}

else{
echo "Connection successful"; 
}
?>
