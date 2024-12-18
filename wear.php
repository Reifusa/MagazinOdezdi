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
                    <div class="asd">Все</div>
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
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='1'"; 
             $all = mysqli_query($db, $queryALL); 
             $all = mysqli_fetch_all($all); 
             foreach($all as $val){
            ?>
            <td>
                <a href="zalast.php?id=<?=$val[0]?>"><div class="imgg" style="background-image: url('images/<?=$val[6]?>'); margin-left: 40px; "></div></a>
            </td>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='2'"; 
             $all = mysqli_query($db, $queryALL); 
             $all = mysqli_fetch_all($all); 
             foreach($all as $val1){
            ?>
            <td>
                <a href="zalast.php?id=<?=$val1[0]?>"><div class="imgg" style="background-image: url('images/<?=$val1[6]?>'); margin-left: 40px; "></div></a>
            </td>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='3'"; 
             $all = mysqli_query($db, $queryALL); 
             $all = mysqli_fetch_all($all); 
             foreach($all as $val2){
            ?>
            <td>
                <a href="zalast.php?id=<?=$val2[0]?>"><div class="imgg" style="background-image: url('images/<?=$val2[6]?>'); margin-left: 40px; "></div></a>
            </td>
        </tr>
        <tr style="display: flex;">
            <td style="display: flex;"><div class="txt1" style="margin-left: 512px;"><?=$val[1]?></div><div class="txt1" style="margin-left: 265px;"><?=$val[2]?></div><div class="rubl"></div></td>
            <td style="display: flex;"><div class="txt1" style="margin-left: 42px;"><?=$val1[1]?></div><div class="txt1" style="margin-left: 265px;"><?=$val1[2]?></div><div class="rubl"></div></td>
            <td style="display: flex;"><div class="txt1" style="margin-left: 42px;"><?=$val2[1]?></div><div class="txt1" style="margin-left: 295px;"><?=$val2[2]?></div><div class="rubl"></div></td>
        </tr>
        <tr style="display: flex;">
            <td><div class="txt2" style="margin-left: 512px;"><?=$val[8]?></div></td>
            <td><div class="txt2" style="margin-left: 398px;"><?=$val1[8]?></div></td>
            <td><div class="txt2" style="margin-left: 389px;"><?=$val2[8]?></div></td>
        </tr>
        <? }?>
        <? }?>
        <? }?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='4'"; 
             $all = mysqli_query($db, $queryALL); 
             $all = mysqli_fetch_all($all); 
             foreach($all as $val3){
            ?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='5'"; 
             $all = mysqli_query($db, $queryALL); 
             $all = mysqli_fetch_all($all); 
             foreach($all as $val4){
            ?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='6'"; 
             $all = mysqli_query($db, $queryALL); 
             $all = mysqli_fetch_all($all); 
             foreach($all as $val5){
            ?>
        <tr>
            <td>
                <a href="zalast.php?id=<?=$val3[0]?>"><div class="imgg" style="background-image: url('images/<?=$val3[6]?>'); margin-left: 512px; margin-top: 60px;"></div></a>
            </td>
            <td>
                <a href="zalast.php?id=<?=$val4[0]?>"><div class="imgg" style="background-image: url('images/<?=$val4[6]?>'); margin-left: 40px; margin-top: 60px;"></div></a>
            </td>
            <td>
                <a href="zalast.php?id=<?=$val5[0]?>"><div class="imgg" style="background-image: url('images/<?=$val5[6]?>'); margin-left: 40px; margin-top: 60px;"></div></a>
            </td>
        </tr>
        <tr style="display: flex;">
            <td style="display: flex;"><div class="txt1" style="margin-left: 512px;"><?=$val3[1]?></div><div class="txt1" style="margin-left: 265px;"><?=$val3[2]?></div><div class="rubl"></div></td>
            <td style="display: flex;"><div class="txt1" style="margin-left: 38px;"><?=$val4[1]?></div><div class="txt1" style="margin-left: 290px;"><?=$val4[2]?></div><div class="rubl"></div></td>
            <td style="display: flex;"><div class="txt1" style="margin-left: 38px;"><?=$val5[1]?></div><div class="txt1" style="margin-left: 295px;"><?=$val5[2]?></div><div class="rubl"></div></td>
        </tr>
        <tr style="display: flex;">
            <td><div class="txt2" style="margin-left: 512px;"><?=$val3[8]?></div></td>
            <td><div class="txt2" style="margin-left: 391px;"><?=$val4[8]?></div></td>
            <td><div class="txt2" style="margin-left: 384px;"><?=$val5[8]?></div></td>
        </tr>
        <? }?>
        <? }?>
        <? }?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='7'"; 
             $all = mysqli_query($db, $queryALL); 
             $all = mysqli_fetch_all($all); 
             foreach($all as $val6){
            ?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='8'"; 
             $all = mysqli_query($db, $queryALL); 
             $all = mysqli_fetch_all($all); 
             foreach($all as $val7){
            ?>
            <?php
             $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='9'"; 
             $all = mysqli_query($db, $queryALL); 
             $all = mysqli_fetch_all($all); 
             foreach($all as $val8){
            ?>
        <tr>
            <td>
                <a href="zalast.php?id=<?=$val6[0]?>"><div class="imgg" style="background-image: url('images/<?=$val6[6]?>'); margin-left: 512px; margin-top: 60px;"></div></a>
            </td>
            <td>
                <a href="zalast.php?id=<?=$val7[0]?>"><div class="imgg" style="background-image: url('images/<?=$val7[6]?>'); margin-left: 40px; margin-top: 60px;"></div></a>
            </td>
            <td>
                <a href="zalast.php?id=<?=$val8[0]?>"><div class="imgg" style="background-image: url('images/<?=$val8[6]?>'); margin-left: 40px; margin-top: 60px;"></div></a>
            </td>
        </tr>
        <tr style="display: flex;">
            <td style="display: flex;"><div class="txt1" style="margin-left: 512px;"><?=$val6[1]?></div><div class="txt1" style="margin-left: 265px;"><?=$val6[2]?></div><div class="rubl"></div></td>
            <td style="display: flex;"><div class="txt1" style="margin-left: 38px;"><?=$val7[1]?></div><div class="txt1" style="margin-left: 290px;"><?=$val7[2]?></div><div class="rubl"></div></td>
            <td style="display: flex;"><div class="txt1" style="margin-left: 38px;"><?=$val8[1]?></div><div class="txt1" style="margin-left: 295px;"><?=$val8[2]?></div><div class="rubl"></div></td>
        </tr>
        <tr style="display: flex;">
            <td><div class="txt2" style="margin-left: 512px;"><?=$val6[8]?></div></td>
            <td><div class="txt2" style="margin-left: 398px;"><?=$val7[8]?></div></td>
            <td><div class="txt2" style="margin-left: 402px;"><?=$val8[8]?></div></td>
        </tr>
        <? }?>
        <? }?>
        <? }?>
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