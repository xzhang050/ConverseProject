<?php
    session_start();
    $key = $_POST['key'];
    $order = $_SESSION['cart'][$key];
    unset($_SESSION['cart'][$key]);
    $size = $_POST["Size"];
    $order[1] = $size;
    $_SESSION['cart'][]=$order;
    header('Location: ../cart.php');
    exit();
?>