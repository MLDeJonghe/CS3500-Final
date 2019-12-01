<?php
    $key = ($_GET['key']);

    session_start();
    if(isset($_SESSION['orderDetails'])){
        
        unset($_SESSION['orderDetails']['orderItems'][$key]); 
        array_values($_SESSION['orderDetails']['orderItems']);
    }

?>