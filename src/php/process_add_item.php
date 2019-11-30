<?php
    $dishId = ($_GET['id']);

    session_start();
    if(isset($_SESSION['orderDetails'])){
        $itemCount = count($_SESSION['orderDetails']['orderItems']);

        $_SESSION['orderDetails']['orderItems'][$itemCount + 1] = $dishId; 

        echo $_SESSION['orderDetails']['orderItems'][$itemCount + 1];
    }

?>