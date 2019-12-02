<?php
    session_start();

    $key = ($_GET['key']);

    if(isset($_SESSION['orderDetails'])){
        unset($_SESSION['orderDetails']['orderItems'][$key]); 
    }

?>