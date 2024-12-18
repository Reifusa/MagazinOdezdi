<?  
          session_start();
      require "lib/connect.php";
    ?><!DOCTYPE html>
<html lang="und">
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kurale:wght@400" />
    <link rel="stylesheet" href="style.css">
    <title>Уникальный образ</title>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

    <style>
      div {
        margin-bottom: 0;
        margin-top: 0;
        margin-left: 0;
        margin-right: 0;
        padding-top: 0;
        padding-bottom: 0;
        padding-left: 0;
        padding-right: 0;
        border: 0;
      }
      p {
        margin-bottom: 0;
        margin-top: 0;
        margin-left: 0;
        margin-right: 0;
        padding-top: 0;
        padding-bottom: 0;
        padding-left: 0;
        padding-right: 0;
        border: 0;
      }
      :root {
        --color-white: rgba(255, 255, 255, 1);
        --color-black: rgba(0, 0, 0, 1);
        --color-lightsteelblue-a60fcd3d: rgba(174, 192, 205, 1);
        --color-aliceblue-993f0590: rgba(237, 246, 253, 1);
        --color-darkslategrey-9a715387: rgba(59, 87, 89, 1);
        --font-size-48: 48px;
        --font-size-20: 20px;
        --font-size-14: 14px;
        --font-size-24: 24px;
        --font-size-16: 16px;
        --font-weight-400: 400;
        --border-radius-3: 3px;
        --border-radius-5: 5px;
      }

      .shopping-cart-container1 {
        box-sizing: border-box;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: flex-end;
        max-width: 1440px;
        padding: 60px 23px 1228px;
        background: var(--color-white);
      }
      .shopping-cart-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        gap: 29px;
        align-items: stretch;
        justify-content: flex-start;
        padding-bottom: 97px;
        margin-right: 38px;
      }
      .shopping-cart-title {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-48) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .sweater-description {
        flex: 0 0 auto;
        margin-top: -19px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .shopping-cart-header {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: 1316px;
        border-top: 1px solid rgba(0, 0, 0, 0.3);
      }
      .sweater-info-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        align-items: flex-start;
        justify-content: flex-start;
      }
      .number-container {
        flex: 0 0 auto;
      }
      .image-container1 {
        box-sizing: border-box;
        display: block;
        width: 117px;
        max-width: initial;
        height: 156px;
        border: none;
        object-fit: cover;
      }
      .sweater-info {
        box-sizing: border-box;
        display: flex;
        flex: 0 1 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        max-width: 564px;
        padding-bottom: 20px;
        margin-left: 30px;
      }
      .price-text {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .wool-cashmere-sweater {
        flex: 0 0 auto;
        margin-top: 2px;
        font: var(--font-weight-400) var(--font-size-14) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .beige-size-and-quantity {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        gap: 30px;
        align-items: center;
        justify-content: flex-start;
        margin-top: 10px;
      }
      .beige-text {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-14) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .product-actions {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        margin-top: 30px;
      }
      .image-thumbnail {
        box-sizing: border-box;
        display: block;
        width: 13px;
        max-width: initial;
        height: 13px;
        border: none;
        object-fit: cover;
      }
      .remove-from-cart-button {
        box-sizing: border-box;
        flex: 0 1 208px;
        margin-left: 39px;
        font: var(--font-weight-400) var(--font-size-18) Kurale;
        color: var(--color-black);
        text-align: left;
        text-decoration-line: underline;
        white-space: pre-wrap;
      }
      .favorite-button {
        box-sizing: border-box;
        flex: 0 1 252px;
        font: var(--font-weight-400) var(--font-size-18) Kurale;
        color: var(--color-black);
        text-align: left;
        text-decoration-line: underline;
        white-space: pre-wrap;
      }
      .order-summary {
        display: flex;
        flex: 0 1 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        padding-top: 54px;
      }
      .order-summary-heading {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-24) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .price-section {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        gap: 29px;
        align-items: stretch;
        justify-content: flex-start;
        margin-top: 42px;
      }
      .price-container3 {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
      }
      .price-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        gap: 8px;
        align-items: flex-start;
        justify-content: space-between;
      }
      .price-container1 {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
      }
      .price-container2 {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: 300px;
        margin-top: -2px;
        border-top: 1px solid rgba(0, 0, 0, 0.3);
      }
      .price-heading {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        text-transform: uppercase;
        white-space: pre-wrap;
      }
      .payment-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        align-items: flex-start;
        justify-content: flex-end;
        padding-top: 8px;
        padding-bottom: 7px;
        background: var(--color-aliceblue-993f0590);
        border: 1px solid var(--color-lightsteelblue-a60fcd3d);
        border-radius: var(--border-radius-3);
      }
      .tax-disclaimer-container {
        flex: 0 0 auto;
        padding-top: 5px;
        margin-right: 19px;
      }
      .image-container {
        box-sizing: border-box;
        display: block;
        width: 29px;
        max-width: initial;
        height: 29px;
        border: none;
        object-fit: cover;
      }
      .tax-agreement-text {
        flex: 0 1 auto;
        font: var(--font-weight-400) var(--font-size-16) Kurale;
        color: var(--color-darkslategrey-9a715387);
        text-align: left;
        white-space: pre-wrap;
      }
      .continue-button {
        flex: 0 0 auto;
        padding: 4px 48px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-white);
        white-space: pre-wrap;
        background: var(--color-black);
        border: 1px solid var(--color-black);
        border-radius: var(--border-radius-5);
      }
      .button1 {
        display: inline-block;
        border: none;
        border-radius: 4px;
        padding: 12px 20px;
        font-size: 12px;
        text-align: center;
        text-decoration: none;
        background-color: white;
        color: black;
        transition: background-color 0.3s ease;
        border: 1px solid var(--color-black);
        
      }     

      .button1:hover {
        background-color: black;
        color: white;
        cursor: pointer;
      }

    </style>
  </head>
  <body>
  
    <script src="js\jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
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
    <?
      $idus = $_SESSION['user']['id клиента'];
      $queryALL = "SELECT * FROM `заказ` where `заказ`.`id клиента`='$idus'"; 
      $all = mysqli_query($db, $queryALL); 
      $all = mysqli_fetch_all($all); 
      // if(!$all){
      //   die('gfy');
      // }
      $queryALLL = "SELECT * FROM `чек` where `заказ`.`id клиента`='$idus'"; 
      $alll = mysqli_query($db, $queryALL); 
      $alll = mysqli_fetch_all($alll); 
    ?>
    <div style="display: inline-block; width: 1440px; margin-top: 50px; margin-left: 300px;" data-ignore="used only for top most containter width">
      <div class="shopping-cart-container1">
        <div class="shopping-cart-container">
          <p class="shopping-cart-title">Корзина</p>
          <p class="sweater-description"></p>
          <div class="shopping-cart-header"></div>
          <?
          
          foreach($all as $val){?>
          <div class="sweater-info-container">
            <div class="number-container">
              <img src="images/<?=$val[7]?>" class="image-container1" />
            </div>
            <div class="sweater-info">
              <p class="price-text"><?=$val[3]?></p>
              <p class="wool-cashmere-sweater"><?=$val[8]?></p>
              <div class="beige-size-and-quantity">
                <p class="beige-text"><?=$val[5]?></p>
                <p class="beige-text">Кол-во: <?=$val[10]?></p>
                <form action="lib/plus.php" method="post">
                  <input type="hidden" name="id" value="<?= $val[1] ?>">
                  <input type="hidden" name="kolwo" value="<?= $val[10] ?>">
                  <button type="submit" name="action" value="add" class="button1">Добавить +1</button>
                </form>
                <form action="lib/minus.php" method="post">
                  <input type="hidden" name="id" value="<?= $val[1] ?>">
                  <input type="hidden" name="kolwo" value="<?= $val[10] ?>">
                  <button type="submit" name="action" value="add" class="button1">Убрать -1</button>
                </form>
                
              </div>
              <div class="product-actions">
                <p class="price-text"><?=$val[4]?></p>
                <div class="number-container">
                  <img src="assets/img_537_236_afbb16.png" class="image-thumbnail" />
                </div>
                <a href="lib/removetov.php?id=<?=$val[1]?>"><p class="remove-from-cart-button">Удалить из корзины</p></a>
              </div>    
            </div>
          </div>
          <?
            $chislo = $val[4] * $val[10];
            $summ = $summ + $chislo;
          ?>
        <?}?>
          <!-- <div class="sweater-info-container">
            <div class="number-container">
              <img src="assets/img_537_265_5fbc07.png" class="image-container1" />
            </div>
            <div class="sweater-info">
              <p class="price-text">aaaaaaaaaaaaa</p>
              <p class="wool-cashmere-sweater">Свитер из шерсти и кашемира с меланжевой вязкой</p>
              <div class="beige-size-and-quantity">
                <p class="beige-text">Бежевый</p>
                <p class="beige-text">M 46</p>
                <p class="beige-text">Кол-во: 1</p>
                <button type="submit" name="action" value="add" class="button1">Добавить +1</button>
                <button type="submit" name="action" value="add" class="button1">Убрать -1</button>
              </div>
              <div class="product-actions">
                <p class="price-text">2,235</p>
                <div class="number-container">
                  <img src="assets/img_537_236_afbb16.png" class="image-thumbnail" />
                </div>
                <p class="remove-from-cart-button">Удалить из корзины</p>
                <p class="favorite-button">Переместить в избранное</p>
              </div>
            </div>
          </div> -->
          
        </div>

        <div class="order-summary">
          <p class="order-summary-heading">Итоги заказа</p>
          <div class="price-section">
            <div class="price-container3">
              <div class="price-container">
                <p class="price-text">Цена до скидок</p>
                <div class="price-container1">
                  <p class="price-text"><?print_r($summ)?></p>
                  <div class="number-container">
                    <img src="assets/img_537_236_afbb16.png" class="image-thumbnail" />
                  </div>
                </div>
              </div>
              <div class="price-container2"></div>
            </div>
            <div class="price-container3">
              <div class="price-container">
                <p class="price-heading">Итоговая цена</p>
                <div class="price-container1">
                  <p class="price-text"><?print_r($summ)?></p>
                  <div class="number-container">
                    <img src="assets/img_537_236_afbb16.png" class="image-thumbnail" />
                  </div>
                </div>
              </div>
              <div class="price-container2"></div>
            </div>
            <div class="payment-container">
              <div class="tax-disclaimer-container">
                <img src="assets/img_537_261_24f077.png" class="image-container" />
              </div>
              <p class="tax-agreement-text">Я согласен оплатить все применимые налоги и/или пошлины, когда мой заказ поступит на таможню.</p>
            </div>
            <p class="continue-button">Продолжить покупку</p>
          </div>
        </div>
      </div>
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
