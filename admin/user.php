<?php
if(isset($_POST["user"])){
    $name = htmlentities( $_POST["user"]["name"]);
    $desc = htmlentities($_POST["user"]["desc"]);
    $image = htmlentities( $_POST["user"]["image"]);
    $price = htmlentities($_POST["user"]["price"]);
   
    echo "$name <br> $desc <br> $image <br>$price";
}

?>