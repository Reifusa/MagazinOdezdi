<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Уникальный образ</title>
    <style>
        /* Кнопка выпадающего списка */
        .dropbtn {

        padding: 16px;
        font-size: 16px;
        border: none;
        }

        /* Контейнер <div> - необходим для размещения выпадающего содержимого */
        .dropdown {
        position: relative;
        display: inline-block;
        }

        /* Выпадающее содержимое (скрыто по умолчанию) */
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        /* Ссылки внутри выпадающего списка */
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        /* Изменение цвета выпадающих ссылок при наведении курсора */
        .dropdown-content a:hover {background-color: #ddd;}

        /* Показать выпадающее меню при наведении курсора */
        .dropdown:hover .dropdown-content {display: block;}

        /* Изменение цвета фона кнопки раскрывающегося списка при отображении содержимого раскрывающегося списка */
        
    </style>
</head>
<?php
    require "lib/connect.php";
    session_start();
    print_r ($_SESSION);
?>
<body style="background-color: #FFF;">
    <div class="line" style="background-color: #FFF; z-index: 2;">
        <div class="sections">
            <a href="login.php" class="profile"></a>
            <a href="stub.html" class="rus"></a>
            <a href="stub.html" class="arrow"></a>
            <div style="margin-left: 592px;">
                <a href="index.php"><h2 class="logotext">Уникальный образ</h2></a>
            </div>
            <a href="stub.html" class="lup"></a>
            <a href="stub.html" class="zvezd"></a>
            <a href="urod.php" class="korz"></a>
        </div>
        <div class="blackline"></div>
        <div class="section2">
            <div style="margin-left: 460px;">
                <a href="stub.html"><h2 class="diz">Дизайнеры</h2></a>
            </div>
            <a href="wear.php"><h2 class="odez" style="width: 84px;">Одежда</h2></a>
            <a href="shoesh.html"><h2 class="odez" style="width: 68px;">Обувь</h2></a>
            <a href="stub.html"><h2 class="odez" style="width: 131px;">Аксессуары</h2></a>
            <a href="stub.html"><h2 class="odez" style="width: 88px;">Детская</h2></a>
            <a href="stub.html"><h2 class="odez" style="width: 132px;">Спортивная</h2></a>
            <a href="stub.html"><h2 class="odez" style="width: 119px;">Домашняя</h2></a>
        </div>
        
    </div>
    <div class="odezd">Одежда</div>
    <div class="opisania">Пополните свой гардероб на новый сезон последними дизайнерскими пальто и куртками, трикотажем, толстовками и элегантными моделями, а также повседневными предметами первой необходимости, такими как футболки, повседневные рубашки, брюки и джинсы. Не забудьте также ознакомиться с нашим ассортиментом обуви, где вы найдете мокасины, ботинки, кроссовки и многое другое.</div>
    <table style="display: flex;">
        <tr>
            <td><a href="jacket.php"><div class="katetere" style="background-image: url('images/image-20.png'); margin-left: 60px;"></div></a></td>
            <td><a href="shirt.php"><div class="katetere" style="background-image: url('images/image-21.png'); margin-left: 75px;"></div></a></td>
            <td><a href="rubash.php"><div class="katetere" style="background-image: url('images/image-22.png'); margin-left: 75px;"></div></a></td>
            <td><a href="korft.php"><div class="katetere" style="background-image: url('images/image-23.png'); margin-left: 75px;"></div></a></td>
            <td><a href="pants.php"><div class="katetere" style="background-image: url('images/image-24.png'); margin-left: 75px;"></div></a></td>
            <td><a href="trikotaz.php"><div class="katetere" style="background-image: url('images/image-26.png'); margin-left: 75px;"></div></a></td>
        </tr>
        <tr>
            <td><div class="podteks" style="margin-left: 115px;">Джакеты</div></td>
            <td><div class="podteks" style="margin-left: 130px;">Футболки</div></td>
            <td><div class="podteks" style="margin-left: 133px;">Рубашки</div></td>
            <td><div class="podteks" style="margin-left: 140px;">Кофты</div></td>
            <td><div class="podteks" style="margin-left: 133px;">Штаны</div></td>
            <td><div class="podteks" style="margin-left: 135px;">Трикотаж</div></td>
        </tr>
    </table>
    <!-- <div class="dropdown">
        <button class="strelka dropbtn" style="background-image: url('images/image-25.png'); margin-left: 442px; margin-top: 140px;">
        <div class="dropdown-content">
            <a href="#">Ссылка 1</a>
            <a href="#">Ссылка 2</a>
            <a href="#">Ссылка 3</a>
        </div>
    </div>
    <div class="strelka" style="background-image: url('images/image-25.png'); margin-left: 442px; margin-top: 215px;"></div>
    <div class="strelka" style="background-image: url('images/image-25.png'); margin-left: 442px; margin-top: 300px;"></div>
    <div class="strelka" style="background-image: url('images/image-25.png'); margin-left: 442px; margin-top: 380px;"></div> -->
    <table  style="display: flex;">
        <tr style="display: flex;">
            <div class="asd" style="margin-left: 60px; margin-top: 80px;">12 213 результатов</div>
            <div class="linepod" style="margin-left: 60px;"></div>
            <td>
                <div class="textkategor" style="margin-left: 60px;">Категория</div>
                <div style="display: flex; margin-left: 60px;" >
                    <div class="asd">Штаны</div>
                </div>
                <div class="linepod" style="margin-left: 60px;"></div>
                <div class="textkategor" style="margin-left: 60px;">Цвет</div>
                <div style="display: flex; margin-left: 60px;" >
                    <div class="asd">Все</div>
                </div>
                <div class="linepod" style="margin-left: 60px;"></div>
                <div class="textkategor" style="margin-left: 60px;">Дизайнеры</div>
                <div style="display: flex; margin-left: 60px;" >
                    <div class="asd">Все</div>
                </div>
                <div class="linepod" style="margin-left: 60px;"></div>
                <div class="textkategor" style="margin-left: 60px;">Размер</div>
                <div style="display: flex; margin-left: 60px;" >
                    <div class="asd">Все</div>
                </div>
                <div class="linepod" style="margin-left: 60px;"></div>
            </td>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id тип`='Штаны1'";
             $all = mysqli_query($db, $queryALL);
             $all = mysqli_fetch_assoc($all); 
            ?>
            <td>
            <?if($all){?><a href="zalast.php?id=<?=$all['id товар']?>"><div class="imgg" style="background-image: url('images/<?=$all['Изображение']?>'); margin-left: 40px; "></div></a><? }?>
            </td>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id тип`='Штаны2'"; 
             $all1 = mysqli_query($db, $queryALL);
             $all1 = mysqli_fetch_assoc($all1); 
            ?>
            <td>
            <?if($all1){?> <a href="zalast.php?id=<?=$all1['id товар']?>"><div class="imgg" style="background-image: url('images/<?=$all1['Изображение']?>'); margin-left: 40px; "></div></a><? }?>
            </td>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id тип`='Штаны3'"; 
             $all2 = mysqli_query($db, $queryALL); 
             $all2 = mysqli_fetch_assoc($all2); 
            ?>
            <td>
            <?if($all2){?><a href="zalast.php?id=<?=$all2['id товар']?>"><div class="imgg" style="background-image: url('images/<?=$all2['Изображение']?>'); margin-left: 40px; "></div></a><? }?>
            </td>
        </tr>
        <tr style="display: flex;">
            <?if($all){?><td style="display: flex;"><div class="txt1" style="margin-left: 512px;"><?=$all['Название']?></div><div class="txt1" style="margin-left: 265px;"><?=$all['Цена']?></div><div class="rubl"></div></td><? }?>
            <?if($all1){?><td style="display: flex;"><div class="txt1" style="margin-left: 42px;"><?=$all1['Название']?></div><div class="txt1" style="margin-left: 265px;"><?=$all1['Цена']?></div><div class="rubl"></div></td><? }?>
            <?if($all2){?><td style="display: flex;"><div class="txt1" style="margin-left: 42px;"><?=$all2['Название']?></div><div class="txt1" style="margin-left: 295px;"><?=$all2['Цена']?></div><div class="rubl"></div></td><? }?>
        </tr>
        <tr style="display: flex;">
            <?if($all){?><td><div class="txt2" style="margin-left: 512px;"><?=$all['Вид']?></div></td><? }?>
            <?if($all1){?><td><div class="txt2" style="margin-left: 398px;"><?=$all1['Вид']?></div></td><? }?>
            <?if($all2){?><td><div class="txt2" style="margin-left: 389px;"><?=$all2['Вид']?></div></td><? }?>
        </tr>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id тип`='Штаны4'"; 
             $all3 = mysqli_query($db, $queryALL); 
             $all3 = mysqli_fetch_assoc($all3); 
            ?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id тип`='Штаны5'"; 
             $all4 = mysqli_query($db, $queryALL); 
             $all4 = mysqli_fetch_assoc($all4); 
            ?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id тип`='Штаны6'"; 
             $all5 = mysqli_query($db, $queryALL); 
             $all5 = mysqli_fetch_assoc($all5); 
            ?>
        <tr>
            <td>
                <?if($all3){?><a href="zalast.php?id=<?=$all3['id товар']?>"><div class="imgg" style="background-image: url('images/<?=$all3['Изображение']?>'); margin-left: 512px; margin-top: 60px;"></div></a><? }?>
            </td>
            <td>
                <?if($all4){?><a href="zalast.php?id=<?=$all4['id товар']?>"><div class="imgg" style="background-image: url('images/<?=$all4['Изображение']?>'); margin-left: 40px; margin-top: 60px;"></div></a><? }?>
            </td>
            <td>
                <?if($all5){?><a href="zalast.php?id=<?=$all5['id товар']?>"><div class="imgg" style="background-image: url('images/<?=$all5['Изображение']?>'); margin-left: 40px; margin-top: 60px;"></div></a><? }?>
            </td>
        </tr>
        <tr style="display: flex;">
            <?if($all3){?><td style="display: flex;"><div class="txt1" style="margin-left: 512px;"><?=$all3['Название']?></div><div class="txt1" style="margin-left: 265px;"><?=$all3['Цена']?></div><div class="rubl"></div></td><? }?>
            <?if($all4){?><td style="display: flex;"><div class="txt1" style="margin-left: 42px;"><?=$all4['Название']?></div><div class="txt1" style="margin-left: 265px;"><?=$all4['Цена']?></div><div class="rubl"></div></td><? }?>
            <?if($all5){?><td style="display: flex;"><div class="txt1" style="margin-left: 42px;"><?=$all5['Название']?></div><div class="txt1" style="margin-left: 295px;"><?=$all5['Цена']?></div><div class="rubl"></div></td><? }?>
        </tr>
        <tr style="display: flex;">
            <?if($all3){?><td><div class="txt2" style="margin-left: 512px;"><?=$all3['Вид']?></div></td><? }?>
            <?if($all4){?><td><div class="txt2" style="margin-left: 398px;"><?=$all4['Вид']?></div></td><? }?>
            <?if($all5){?><td><div class="txt2" style="margin-left: 389px;"><?=$all5['Вид']?></div></td><? }?>
        </tr>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id тип`='Штаны7'"; 
             $all6 = mysqli_query($db, $queryALL); 
             $all6 = mysqli_fetch_assoc($all6); 
            ?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id тип`='Штаны8'"; 
             $all7 = mysqli_query($db, $queryALL); 
             $all7 = mysqli_fetch_assoc($all7); 
            ?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id тип`='Штаны9'"; 
             $all8 = mysqli_query($db, $queryALL); 
             $all8 = mysqli_fetch_assoc($all8); 
            ?>
        <tr>
        <td>
                <?if($all6){?><a href="zalast.php?id=<?=$all6['id товар']?>"><div class="imgg" style="background-image: url('images/<?=$all6['Изображение']?>'); margin-left: 512px; margin-top: 60px;"></div></a><? }?>
            </td>
            <td>
                <?if($all7){?><a href="zalast.php?id=<?=$all7['id товар']?>"><div class="imgg" style="background-image: url('images/<?=$all7['Изображение']?>'); margin-left: 40px; margin-top: 60px;"></div></a><? }?>
            </td>
            <td>
                <?if($all8){?><a href="zalast.php?id=<?=$all8['id товар']?>"><div class="imgg" style="background-image: url('images/<?=$all8['Изображение']?>'); margin-left: 40px; margin-top: 60px;"></div></a><? }?>
            </td>
        </tr>
        <tr style="display: flex;">
            <?if($all6){?><td style="display: flex;"><div class="txt1" style="margin-left: 512px;"><?=$all6['Название']?></div><div class="txt1" style="margin-left: 265px;"><?=$all6['Цена']?></div><div class="rubl"></div></td><? }?>
            <?if($all7){?><td style="display: flex;"><div class="txt1" style="margin-left: 42px;"><?=$all7['Название']?></div><div class="txt1" style="margin-left: 265px;"><?=$all7['Цена']?></div><div class="rubl"></div></td><? }?>
            <?if($all8){?><td style="display: flex;"><div class="txt1" style="margin-left: 42px;"><?=$all8['Название']?></div><div class="txt1" style="margin-left: 295px;"><?=$all8['Цена']?></div><div class="rubl"></div></td><? }?>
        </tr>
        <tr style="display: flex;">
            <?if($all6){?><td><div class="txt2" style="margin-left: 512px;"><?=$all6['Вид']?></div></td><? }?>
            <?if($all7){?><td><div class="txt2" style="margin-left: 398px;"><?=$all7['Вид']?></div></td><? }?>
            <?if($all8){?><td><div class="txt2" style="margin-left: 389px;"><?=$all8['Вид']?></div></td><? }?>
        </tr>
    </table>
    <div class="serline" style="width: 100%; margin-top: 120px;"></div>
    <div style="display: flex; margin-top: 10px;">
        <a href="stub.html"><div class="levooo" style="margin-left: 190px;"></div></a>
        <!--<div class="txtstran" style="margin-top: 5px;">Предыдущая стр</div>-->
        <div class="asa" style="margin-left: 490px;">Страница 2/243</div>
        <!--<div class="txtstran" style="margin-top: 5px; margin-left: 490px;">Следущая стр</div>-->
        <a href="stub.html"><div class="pravooo" style="margin-left: 490px;"></div></a>
    </div>
    <div class="blackbox">
        <div class="podvaltextbel">Уникальный образ</div>
        <div style="display: flex;">
            <div class="pososnmiutext">© 2022 магазин одежды Уникальный образ</div>
            <div class="pososnmiutext">Контакты: 8-800-555-35-35 RetailShop@mail.ru</div>
            <div class="konturbox">
                <div class="pososnmiutext" style="margin-top: 7px; margin-left: 7px;">e-mail</div>
            </div>
            <div class="belbox">
                <a href="stub.html"><div class="podpistext" style="margin-left: 40px; margin-top: 7px;">ПОДПИСАТЬСЯ</div></a>
            </div>
            <a href="stub.html"><div class="telega"></div></a>
            <a href="stub.html"><div class="vk"></div></a>
        </div>
        
    </div>
</body>
</html>