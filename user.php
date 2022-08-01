<?php
if(isset($_GET["user"])){
    $name = htmlentities( $_POST["user"]["name"]);
    $surname = htmlentities($_POST["user"]["surname"]);
    $course = $_POST["user"]["course"];
    $dates = $_POST ["user"] ["dates"];
    $data =$_POST["user"]["data"];  
}

?>