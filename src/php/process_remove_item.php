<?php
    session_start();

    $key = ($_GET['key']);
    foreach($_SESSION as $k => $value){
        print_r($value);
    }
    if(isset($_SESSION['orderDetails'])){
        $arr= $_SESSION['orderDetails']['orderItems'];
        unset($arr[$key]);
        $_SESSION['orderDetails']['orderItems']=$arr;
        unset($_SESSION['orderDetails']['orderItems'][$key]); 
        array_values($_SESSION['orderDetails']['orderItems']);
    }

?>