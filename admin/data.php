<?php
$q[0] = $_REQUEST["q"];
$q[1] = $_REQUEST["desc"];
$q[2] = $_REQUEST["image"];
$q[3] = $_REQUEST["price"];


$data =  ['name' =>$q[0], "desc"=>$q[1],"image"=>$q[2],'price'=>$q[3]];


require 'dns.php';

$sql = "INSERT INTO rooms(`name`,`desc`,`image`,price) VALUES('.$q[0].','.$q[1].','.$q[2].','.$q[3].')";

$query = $pdo->exec($sql);
echo 'uspeshna';

?>