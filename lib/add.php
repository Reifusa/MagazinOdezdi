<?php
    require "connect.php";
    $id = $_POST['id'];
    $name = $_POST['Название'];
    $cost = $_POST['Цена'];
    $color = $_POST['Цвет'];
    $type = $_POST['Тип'];
    $post = $_POST['Поставщик'];
    $image = $_POST['Изображение'];
    $op = $_POST['Описание'];
    $vid = $_POST['Вид'];

    $queryAdd = "INSERT into `tovar` (`id товар`, `Название`, `Цена`, `Цвет`, `id тип`, `id поставщика`, `Изображение`, `Описание`, `id категории`) values ('$id', '$name', '$cost', '$color', '$type', '$post', '$image', '$op', '$vid')";
    $add = mysqli_query($db, $queryAdd);
    header ("Location: /urodstvo.php");