<?php

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        session_start();
    
        if(!isset($_SESSION['orderDetails'])){
            $orderDataArray = array(
                "firstName" => htmlspecialchars($_POST['firstName']), "lastName" => htmlspecialchars($_POST['lastName']),
                "email" => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), "phoneNumber" => htmlspecialchars($_POST['phoneNumber']),
                "orderType" => htmlspecialchars($_POST['orderType']), "orderItems" => array(),
                "orderLocation" => array(
                    "address1" => htmlspecialchars($_POST['address1']),
                    "address2" => htmlspecialchars($_POST['address2']),
                    "city" => htmlspecialchars($_POST['city']),
                    "state" => htmlspecialchars($_POST['state']),
                    "zip" => htmlspecialchars($_POST['city'])
                ), "paymentType" => htmlspecialchars($_POST['paymentType'])
            );
        }
    }
?>