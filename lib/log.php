<?
session_start();
require "connect.php";

$login = $_POST['Почта'];
$pass = $_POST['Пароль'];

if($login == null && $pass == null){
    die('Поля пустые');
} elseif($login == null){
    die('Почта не была введена');
} elseif($pass == null){
    die('Не был введён пароль');
}

$queryUser = "SELECT * from `клиент` where `клиент`.`Почта`='$login'";
$mbUser = mysqli_query($db, $queryUser);
$mbUser = mysqli_fetch_assoc($mbUser);

if($mbUser){
    if($mbUser['Почта'] == $login && $mbUser['Пароль'] == $pass){

        $_SESSION['user'] = [
            'Почта' => $mbUser['Почта'],
            'Пароль' => $mbUser['Пароль'],
            'id клиента' =>$mbUser['id клиента'],
        ];}else{
            die('Неверный логин или пароль');
        }}else{
            die('Такого пользователя не существует');
        }

header('Location: /index.php');
