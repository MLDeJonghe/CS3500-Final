<?php
session_start();
array_values($_SESSION['orderDetails']['orderItems']);
$dishId = ($_GET['id']);

if (isset($_SESSION['orderDetails'])) {
    array_push($_SESSION['orderDetails']['orderItems'],  $dishId);
    array_values($_SESSION['orderDetails']['orderItems']);
}

