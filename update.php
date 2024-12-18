<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    require "lib/connect.php";
    $id = $_GET["id"];
    //такой же код как в about.php
    $queryUp = "SELECT * FROM `tovar` where `tovar`.`id товар`='$id'";
    $Up = mysqli_query ($db, $queryUp);
    $Up = mysqli_fetch_assoc ($Up);

    if(!$Up){
        die('error');
    }
    ?>
    <div>
        <h2><?=$Up['info']?></h2>
        <h2><?=$Up['tooinfo']?></h2>
    </div>
    <form action="lib/redact.php" method="post">
        <input type="text" name="id" value=<?=$Up['id товар']?>><br>
        <input type="text" name="Название" value=<?=$Up['Название']?>><br>
        <input type="text" name="Цена" value=<?=$Up['Цена']?>><br>
        <input type="text" name="Цвет" value=<?=$Up['Цвет']?>><br>
        <input type="text" name="Тип" value=<?=$Up['Тип']?>><br>
        <input type="text" name="id поставщика" value=<?=$Up['id поставщика']?>><br>
        <input type="text" name="Изображение" value=<?=$Up['Изображение']?>><br>
        <input type="text" name="Описание" value=<?=$Up['Описание']?>><br>
        <input type="text" name="Вид" value=<?=$Up['Вид']?>><br>
        <button type="submit" style="margin-top: 10px;">Отправить</button>
        <!-- <a href="lib/redact.php?id=<?//=$Up['id товар']?>">Update</a> -->
    </form>
</body>
</html>
