<?php
session_start();
array_values($_SESsion['orderDetails']['orderItems']);
$dishId = ($_GET['id']);

if (isset($_SESSION['orderDetails'])) {
    $itemCount = count($_SESSION['orderDetails']['orderItems']);

    array_push($_SESSION['orderDetails']['orderItems'],  $dishId);
    array_values($_SESsion['orderDetails']['orderItems']);
}
