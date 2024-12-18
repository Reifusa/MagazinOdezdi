<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
         .dropbtn {

        /* padding: 16px;
        font-size: 16px; */
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
    </style>
</head>
<body>
<?php
    require "lib/connect.php";
    session_start();
?>
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
    <table style="border-radius: 1;">
    <h2>Товары</h2>
        <tr>
        <td>id </td>
        <td>Название </td>
        <td>Цена </td>
        <td>Цвет </td>
        <td>Тип </td>
        <td>id поставщика </td>
        <td>Изображение </td>
        <td>Описание </td>
        <td>Вид </td><br>
        </tr>
        <?
        $queryALL = "SELECT * FROM `tovar`"; 
        $all = mysqli_query($db, $queryALL); 
        $all = mysqli_fetch_all($all); 
        foreach($all as $val){ 

        ?>
            <tr>
                <td><?= $val[0] ?></td>
                <td><?= $val[1] ?></td> 
                <td><?= $val[2] ?></td>
                <td><?= $val[3] ?></td>
                <td><?= $val[4] ?></td> 
                <td><?= $val[5] ?></td>
                <td><?= $val[6] ?></td>
                <td><?= $val[7] ?></td> 
                <td><?= $val[8] ?></td>
                <td><a href="zalast.php?id=<?=$val[0]?>">Открыть</a></td>
                <td><a href="update.php?id=<?=$val[0]?>">Обновить</a></td>
                <td><a href="lib/delete.php?id=<?=$val[0]?>">Удалить</a></td>
                <!-- <td>
                    <div class="dropdown">
                        <?
                            // $id = $val[0];
                            // $queryUp = "SELECT * FROM `tovar` where `tovar`.`id товар`='$id'";
                            // $Up = mysqli_query ($db, $queryUp);
                            // $Up = mysqli_fetch_assoc ($Up);
                        ?>
                        <button class="strelka dropbtn" style="background-color:white; margin-top: 70px; width: 15px;height: 15px;">Редактировать
                        <div class="dropdown-content">
                            <form action="lib/redact.php" method="post">
                                <input type="text" name="id товар" value=<?//=$Up['id товар']?>><br>
                                <input type="text" name="Название" value=<?//=$Up['Название']?>><br>
                                <input type="text" name="Цена" value=<?//=$Up['Цена']?>><br>
                                <input type="text" name="Цвет" value=<?//=$Up['Цвет']?>><br>
                                <input type="text" name="Тип" value=<?//=$Up['Тип']?>><br>
                                <input type="text" name="id поставщика" value=<?//=$Up['id поставщика']?>><br>
                                <input type="text" name="Изображение" value=<?//=$Up['Изображение']?>><br>
                                <input type="text" name="Описание" value=<//?=$Up['Описание']?>><br>
                                <input type="text" name="Вид" value=<?//=$Up['Вид']?>><br>
                                <button type="submit" style="margin-top: 10px;">Send
                            </form>
                            <form action="lib/remove.php" method="post">
                                <button type="submit">Delete</button>
                                <input type="hidden" name="id товар" value=<?//=$Up['id товар']?>><br>
                                <input type="hidden" name="Название" value=<?//=$Up['Название']?>><br>
                                <input type="hidden" name="Цена" value=<?//=$Up['Цена']?>><br>
                                <input type="hidden" name="Цвет" value=<?//=$Up['Цвет']?>><br>
                                <input type="hidden" name="Тип" value=<?//=$Up['Тип']?>><br>
                                <input type="hidden" name="id поставщика" value=<?//=$Up['id поставщика']?>><br>
                                <input type="hidden" name="Изображение" value=<?//=$Up['Изображение']?>><br>
                                <input type="hidden" name="Описание" value=<?//=$Up['Описание']?>><br>
                                <input type="hidden" name="Вид" value=<?//=$Up['Вид']?>><br>
                            </form>
                         $idtov = $shop['id товар'];
                        $naz = $shop['Название'];
                        $chen = $shop['Цена'];
                        $chvet = $shop['Цвет'];
                        $type = $shop['Тип'];
                        $post = $shop['id поставщика'];
                        $izo = $shop['Изображение'];
                        $opis = $shop['Описание'];
                        $vid =$shop['Вид']; 
                        </div>
                    </div>
                </td> -->
            </tr>
            <?
        }  
        ?>
        </table>
        <h2>Добавление товаров</h2>
        <form action="lib/add.php" method="post">
        <input type="text" name="id" placeholder="Введите id отвечающий на расположение товара"><br>
        <input type="text" name="Название" placeholder="Название товара"><br>
        <input type="text" name="Цена" placeholder="Цена"><br>
        <input type="text" name="Цвет" placeholder="Цвет"><br>
        <select name="Тип" >
            <option value="">Выбирите тип</option>
            <?php
                $queryPost = "SELECT * FROM `тип`";
                $myaaaaa = mysqli_query ($db, $queryPost);
                $myaaaaa = mysqli_fetch_all($myaaaaa);
                foreach ($myaaaaa as $jij) {
            ?>
            <option value="<?=$jij[0]?>"><?=$jij[1]?></option><? }?>
        </select><br>
        <select name="Поставщик" >
            <option value="">Выбирите поставщика</option>
            <?php
                $queryPost = "SELECT * FROM `postavshik`";
                $myaaaaa = mysqli_query ($db, $queryPost);
                $myaaaaa = mysqli_fetch_all($myaaaaa);
                foreach ($myaaaaa as $jij) {
            ?>
            <option value="<?=$jij[0]?>"><?=$jij[1]?></option><? }?>
        </select><br>
        <input type="text" name="Изображение" value="image-27.png" placeholder="Изображение"><br>
        <input type="text" name="Описание" placeholder="Описание товара"><br>
        <select name="Вид" >
            <option value="">Выбирите вид</option>
            <?php
                $queryPost = "SELECT * FROM `категория`";
                $myaaaaa = mysqli_query ($db, $queryPost);
                $myaaaaa = mysqli_fetch_all($myaaaaa);
                foreach ($myaaaaa as $jij) {
            ?>
            <option value="<?=$jij[0]?>"><?=$jij[1]?></option><? }?>
        </select><br>
        <button type="submit">Отправить</button>
        <button type="reset">Очистить</button>
    </form>
        <h2>Добавление поставщика</h2>
    <form action="/lib/addpostavshik.php" method="post">
        <input type="text" name="Наименование" placeholder="Enter info"><br>
        <input type="text" name="Адресс" placeholder="Enter tooinfo"><br>
        <input type="text" name="Контактные" placeholder="Enter tooinfo"><br>
        <button type="submit">Send</button>
        <button type="reset">Clear</button>
    </form>
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