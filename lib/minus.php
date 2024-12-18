<?
require "connect.php";
session_start();
$id = $_POST['id'];
$kolwo = $_POST['kolwo'];
$kolwMinus = $kolwo - 1;
if($kolwMinus >= 0){
    $result = "UPDATE `заказ` SET `Кол`='$kolwMinus' where `заказ`.`id товар`='$id'";
    $repl = mysqli_query($db, $result);
}
header ("Location: ../urod.php");