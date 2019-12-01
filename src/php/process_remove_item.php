<?php
    session_start();

    array_values($_SESsion['orderDetails']['orderItems']);
    $key = ($_GET['key']);
    echo "<script> console.log(".count($_SESSION['orderDetails']['orderItems']).")</script>";
    echo "<script> console.log(".$key.")</script>";
    if(isset($_SESSION['orderDetails'])){
        
        unset($_SESSION['orderDetails']['orderItems'][$key]); 
        array_values($_SESSION['orderDetails']['orderItems']);
    }
    echo "<script> console.log(".count($_SESSION['orderDetails']['orderItems']).")</script>";
?>