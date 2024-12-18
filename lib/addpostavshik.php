<?php
    require "connect.php";
    $name = $_POST['Наименование'];
    $adress = $_POST['Адресс'];
    $kontakt = $_POST['Контактные'];
    $queryAdd = "INSERT into `postavshik` (`id поставщик`,`Наименование компании`,`Адрес`,`Контактные данные`) values (NULL, '$name', '$adress', '$kontakt')";
    $add = mysqli_query ($db, $queryAdd);
    header ("Location: /index.php");
?>