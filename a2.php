<?php
require 'a3.php';
$code=$_POST['itemcode'];
$name=$_POST['name'];

$sql="INSERT INTO stud1(Item_code,Item_name)VALUES('$code','$name')";
if($res = mysqli_query($link,$sql)){
    
        echo "sucess";
    }


?>