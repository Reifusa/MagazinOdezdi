<?php
require "connect.php";
$id = $_GET["id"];
print_r($id);
$idtov = $_POST['id'];
$naz = $_POST['Название'];
$chen = $_POST['Цена'];
$chvet = $_POST['Цвет'];
$type = $_POST['Тип'];
$post = $_POST['id поставщика'];
$izo = $_POST['Изображение'];
$opis = $_POST['Описание'];
$vid =$_POST['Вид'];
$queryUp = "UPDATE `tovar` SET `id товар`='$idtov', `Название`='$naz', `Цена`='$chen', `Цвет`='$chvet', `Тип`='$type', `Изображение`='$izo', `Описание`='$opis', `Вид`='$vid' where `tovar`.`id товар`='$idtov'";
print_r($queryUp);
$Up = mysqli_query($db,$queryUp);

// header ("Location: /urodstvo.php");