<?php
    require "connect.php";
    session_start();

    $idus = $_SESSION['user']['id клиента'];
    if(!$idus){
        die('ыаыаыаыа');
    }
    $id = $_GET['id'];
    $queryOne = "SELECT * FROM `tovar` where `tovar`.`id товар`='$id'";
    $shop = mysqli_query($db, $queryOne);
    $shop = mysqli_fetch_assoc($shop);
    $idtov = $shop['id товар'];
    $naz = $shop['Название'];
    $chen = $shop['Цена'];
    $chvet = $shop['Цвет'];
    $type = $shop['Тип'];
    $izo = $shop['Изображение'];
    $opis = $shop['Описание'];
    $vid =$shop['Вид'];
    $kol = 1;
    $queryAdd = "INSERT into `заказ` (`id заказ`,`id товар`,`id клиента`,`Название`,`Цена`,`Цвет`,`Тип`,`Изображение`,`Описание`,`Вид`,`Кол`) values (NULL, '$idtov', '$idus', '$naz', '$chen', '$chvet', '$type', '$izo', '$opis', '$vid', '$kol')";
    $add = mysqli_query ($db, $queryAdd);
    
    header('Location: /index.php');
    // require "../zalast.php";
    // // session_start();
    // $id = $_POST['id товар'];
    // print_r($id);
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    //     if (isset($_POST['submit'])) {
    //         $queryAll = "SELECT * FROM `tovar` where `tovar`.`id товар`='$id'";  
    //         $all = mysqli_query ($db, $queryAll);
    //         $all = mysqli_fetch_all($all); 
    //         foreach($all as $val){
    //             $naz = $val[1];
    //             $chen = $val[2];
    //             $chvet = $val[3];
    //             $type = $val[4];
    //             $izo = $val[6];
    //             $opis = $val[7];
    //             $vid = $val[8];
    //         }
    //         $queryAdd = "INSERT into `заказ` (`id заказ`,`id товар`,`id клиента`,`id сотрудника`,`Название`,`Цена`,`Цвет`,`Тип`,`Изображение`,`Описание`,`Вид`) values (NULL, NULL, NULL, NULL,'$naz','$chen','$chvet','$type','$izo','$opis','$vid')";
    //         $add = mysqli_query ($db, $queryAdd);

           
    //     }
    // }else{
    //     die('пиздец');
    // }
    // // header ("Location: ../urod.php");