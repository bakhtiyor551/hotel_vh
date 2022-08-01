<?php
$q[0] = $_REQUEST["q"];
$q[1] = $_REQUEST["surname"];
$q[2] = $_REQUEST["data"];
$q[3] = $_REQUEST["dates"];
$q[4] = $_REQUEST["number"];
$q[5] = $_REQUEST["course"];
$q[6] = $_REQUEST["out"];
$q[7] = $_REQUEST["prices"];

echo("<script>console.log('PHP: " . $_REQUEST["price"]. "');</script>");
require 'dsn.php';

$sql = "INSERT INTO bron(`Name`,`Surname`,`StartDate`,`EndDate`,`Msisdn`,`RoomId`,`out`,`price`) VALUES('$q[0]','$q[1]','$q[2]','$q[3]','$q[4]','$q[5]','$q[6]','$q[7]')";

$query = $pdo->exec($sql);
echo 'uspeshna';

?>