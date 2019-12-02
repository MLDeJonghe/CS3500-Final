<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] === "POST"){

        if($_GET['proceed'] === "true"){
            header('Location: ./checkout.php');
        }else{
            session_destroy();
            header('Location: ./order.php');
        }
    }
        
?>