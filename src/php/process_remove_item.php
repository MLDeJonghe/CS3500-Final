<?php
    session_start();

    array_values($_SESsion['orderDetails']['orderItems']);
    $key = ($_GET['key']);

    if(isset($_SESSION['orderDetails'])){
        
        unset($_SESSION['orderDetails']['orderItems'][$key]); 
        array_values($_SESSION['orderDetails']['orderItems']);
    }
?>