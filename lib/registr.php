<?

require "connect.php";

$login = $_POST['Почта'];
$pass = $_POST['Пароль'];
$confirm = $_POST['Парольроль'];

if($pass !== $confirm){
    die('Пароли не совпали');
} elseif ($pass == null){
    die('Не был введён пароль');
} elseif($login == null){
    die('Не была введена почта');
} elseif($login == null && $pass == null){
    die('Не была введена почта и пароль');
}

$queyUser = "SELECT * FROM `клиент` where `клиент`.`Почта`='$login'";
$user = mysqli_query($db, $queyUser);
$user = mysqli_fetch_assoc($user);


if($user){
    die('Такой пользователь уже есть');
}else{
    $queyREG = "INSERT INTO `клиент` (`id клиента`, `Дата рождение`, `ФИО`, `Пол`, `Адрес`, `Деньги`, `Почта`, `Пароль`, `role`) values (null, 'null', '$login', 'null', 'null', 'null', '$login', '$pass', 'user')";
    $REG = mysqli_query($db, $queyREG);
    header('Location: /index.php');
}