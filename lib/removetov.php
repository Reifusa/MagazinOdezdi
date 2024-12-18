<?php
    require "connect.php";
    session_start();
    $id = $_GET['id'];
    $queryUp = "DELETE from `заказ` where `заказ`.`id товар`='$id'";
    $Up = mysqli_query($db,$queryUp);
    header ("Location: ../urod.php");