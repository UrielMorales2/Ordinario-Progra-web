<?php 
    $conn = new mysqli('localhost','root','','ordinarioweb');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>