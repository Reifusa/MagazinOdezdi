<?php
require "connect.php";
$id = $_GET['id'];
$queryUp = "DELETE from `tovar` where `tovar`.`id товар`='$id'";
$Up = mysqli_query($db,$queryUp);
header ("Location: /urodstvo.php");