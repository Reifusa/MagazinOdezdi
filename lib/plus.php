<?
require "connect.php";
session_start();
$id = $_POST['id'];
$kolwo = $_POST['kolwo'];
$kolwPlus = $kolwo + 1;
$result = "UPDATE `заказ` SET `Кол`='$kolwPlus' where `заказ`.`id товар`='$id'";
$repl = mysqli_query($db, $result);
header ("Location: ../urod.php");