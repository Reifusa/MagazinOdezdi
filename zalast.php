<!DOCTYPE html>
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
        --color-grey-b54ff344: rgba(127, 127, 127, 1);
        --color-991c5d52: transparent;
        --color-darkgrey-d9ae56b0: rgba(157, 157, 157, 1);
        --font-size-20: 20px;
        --font-size-40: 40px;
        --font-size-24: 24px;
        --font-size-32: 32px;
        --font-size-16: 16px;
        --font-weight-400: 400;
        --border-radius-5: 5px;
      }

      .product-details-container {
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        max-width: 1440px;
        padding-right: 19px;
        padding-left: 19px;
        background: var(--color-white);
      }
      .product-card3 {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        gap: 8px;
        align-items: flex-start;
        justify-content: space-between;
        padding: 27px 40px 97px 41px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.3);
      }
      .product-card1 {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        padding-top: 3px;
        padding-bottom: 26px;
      }
      .image-container4 {
        box-sizing: border-box;
        display: block;
        flex: 0 0 auto;
        width: 666px;
        max-width: initial;
        height: 888px;
        border: none;
        object-fit: cover;
      }
      .product-categories {
        flex: 0 0 auto;
        margin-top: 30px;
      }
      .more-link {
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .product-categories1 {
        display: flex;
        flex-direction: row;
        gap: 30px;
        align-items: center;
        justify-content: flex-start;
      }
      .loropiana-heading {
        box-sizing: border-box;
        flex: 0 1 113px;
        max-width: 82px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-grey-b54ff344);
        text-align: left;
        text-decoration-line: underline;
        white-space: pre-wrap;
      }
      .loro-piana-clothing {
        box-sizing: border-box;
        flex: 0 1 76px;
        max-width: 82px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-grey-b54ff344);
        text-align: left;
        text-decoration-line: underline;
        white-space: pre-wrap;
      }
      .loro-piana-triktag-sweaters {
        box-sizing: border-box;
        flex: 0 1 82px;
        max-width: 82px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-grey-b54ff344);
        text-align: left;
        text-decoration-line: underline;
        white-space: pre-wrap;
      }
      .product-card2 {
        box-sizing: border-box;
        display: flex;
        flex: 0 1 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        width: 536px;
      }
      .sweater-container {
        flex: 0 0 auto;
      }
      .loro-piana-title {
        font: var(--font-weight-400) var(--font-size-40) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .sweater-description {
        margin-top: 7px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .sweater-price-container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        margin-top: 3px;
      }
      .kurale-text {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-24) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .value-container {
        flex: 0 0 auto;
        margin-left: 5px;
      }
      .image-container2 {
        box-sizing: border-box;
        display: block;
        width: 16px;
        max-width: initial;
        height: 16px;
        border: none;
        object-fit: cover;
      }
      .beige-color-text {
        margin-top: 30px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .neutral-text {
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-grey-b54ff344);
        text-align: left;
      }
      .size-guide-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        margin-top: 37px;
      }
      .size-guide-container1 {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        gap: 8px;
        align-items: flex-start;
        justify-content: space-between;
      }
      .size-label {
        flex: 0 0 auto;
        padding-bottom: 4px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-grey-b54ff344);
        white-space: pre-wrap;
      }
      .size-guide-link {
        flex: 0 1 auto;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-grey-b54ff344);
        text-align: left;
        text-decoration-line: underline;
        white-space: pre-wrap;
      }
      .size-selector {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: center;
        margin-top: 22px;
      }
      .size-buttons-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        gap: 30px;
        align-items: center;
        justify-content: space-between;
      }
      .size-button {
        box-sizing: border-box;
        display: block;
        flex: 0 0 auto;
        width: 111px;
        min-width: 111px;
        height: 52px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        cursor: pointer;
        background: var(--color-991c5d52);
        border: 1px solid var(--color-black);
        border-radius: var(--border-radius-5);
      }
      .size-buttons-container1 {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        gap: 30px;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
      }
      .product-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        gap: 19px;
        align-items: stretch;
        justify-content: flex-start;
        margin-top: 60px;
      }
      .product-card {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: center;
      }
      .add-to-cart-button {
        box-sizing: border-box;
        display: block;
        flex: 0 0 auto;
        width: 534px;
        min-width: 534px;
        height: 52px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-white);
        cursor: pointer;
        background: var(--color-black);
        border: 1px solid var(--color-black);
        border-radius: var(--border-radius-5);
      }
      .favorite-container {
        box-sizing: border-box;
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        height: 52px;
        padding-right: 17px;
        padding-left: 17px;
        margin-top: 20px;
        border: 1px solid var(--color-black);
        border-radius: var(--border-radius-5);
      }
      .favorite-button {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: 10.6%;
        padding-right: 15px;
      }
      .image-container {
        box-sizing: border-box;
        display: block;
        width: 38px;
        max-width: initial;
        height: 38px;
        border: none;
        object-fit: cover;
      }
      .favorite-button1 {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: 89.4%;
        padding-right: 92px;
        padding-left: 92px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .product-details {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: 534px;
        margin-top: 10px;
        border-top: 1px solid rgba(0, 0, 0, 0.3);
      }
      .editor-notes-container1 {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        gap: 19px;
        align-items: stretch;
        justify-content: flex-start;
      }
      .editor-notes-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
      }
      .editor-notes-section {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        gap: 8px;
        justify-content: space-between;
      }
      .editor-notes-value {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-32) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .image-container3 {
        box-sizing: border-box;
        display: block;
        width: 30px;
        max-width: initial;
        height: 30px;
        border: none;
        object-fit: cover;
      }
      .content-divider {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: 534px;
        margin-top: 22px;
        border-top: 1px solid rgba(0, 0, 0, 0.3);
      }
      .product-code-label {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-grey-b54ff344);
        white-space: pre-wrap;
      }
      .product-card-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        padding-top: 14px;
        padding-bottom: 117px;
      }
      .product-grid {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        gap: 30px;
        align-items: center;
        justify-content: space-between;
        margin-top: 24px;
      }
      .product-image {
        box-sizing: border-box;
        display: block;
        flex: 0 0 auto;
        width: 256px;
        max-width: initial;
        height: 335px;
        border: none;
        object-fit: cover;
      }
      .fashion-product-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: center;
        padding-right: 3px;
      }
      .brand-info {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        gap: 8px;
        align-items: center;
        justify-content: space-between;
      }
      .brand-name {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-16) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .brand-info1 {
        display: flex;
        flex: 0 0 auto;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
      }
      .image-container1 {
        box-sizing: border-box;
        display: block;
        width: 12px;
        max-width: initial;
        height: 12px;
        border: none;
        object-fit: cover;
      }
      .burberry-jacket {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-16) Kurale;
        color: var(--color-darkgrey-d9ae56b0);
        white-space: pre-wrap;
      }
      .content-wrapper {
        flex: 0 0 auto;
        margin-left: 2px;
      }
    </style>
  </head>
  <body>
  <?php
    require "lib/connect.php";
    // session_start();
    
  ?>
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
  <?php
    $id = $_GET['id'];
    $queryALL = "SELECT * FROM `tovar` where `tovar`.`id товар`='$id'"; 
    $all = mysqli_query($db, $queryALL); 
    $all = mysqli_fetch_assoc($all); 
  ?>
    <div style="display: inline-block; width: 1440px; margin-top: 100px; margin-left: 200px;" data-ignore="used only for top most containter width">
      <div class="product-details-container">
        <div class="product-card3">
          <div class="product-card1">
            <img src="images/<?=$all['Изображение']?>" class="image-container4" />
            <div class="product-categories">
              <p class="more-link">Смотреть больше</p>
              <div class="product-categories1">
                <p class="loropiana-heading"><?=$all['Название']?></p>
                <p class="loro-piana-clothing">Одежда</p>
                <p class="loro-piana-triktag-sweaters">Триктаж</p>
                <p class="loro-piana-triktag-sweaters">Свитеры</p>
              </div>
            </div>
          </div>
          <div class="product-card2">
            <div class="sweater-container">
              <p class="loro-piana-title"><?=$all['Название']?></p>
              <p class="sweater-description"><?=$all['Описание']?></p>
              <div class="sweater-price-container">
                <p class="kurale-text"><?=$all['Цена']?></p>
                <div class="value-container">
                  <img src="assets/img_537_115_3459f6.png" class="image-container2" />
                </div>
              </div>
              <p class="beige-color-text"><span class="neutral-text">Цвет: </span><span><?=$all['Цвет']?></span></p>
            </div>
            <div class="size-guide-container">
              <div class="size-guide-container1">
                <p class="size-label">Размер:</p>
                <p class="size-guide-link">Посмотреть руководство по размерам</p>
              </div>
              <div class="size-selector">
                <div class="size-buttons-container">
                  <Button className="size-button" class="size-button">XS 40</Button>
                  <Button className="size-button" class="size-button">S 42</Button>
                  <Button className="size-button" class="size-button">M 46</Button>
                  <Button className="size-button" class="size-button">L 48</Button>
                </div>
                <div class="size-buttons-container1">
                  <Button className="size-button" class="size-button">L 50</Button>
                  <Button className="size-button" class="size-button">XL52</Button>
                  <Button className="size-button" class="size-button">XXL 54</Button>
                  <Button className="size-button" class="size-button">XXL 56</Button>
                </div>
              </div>
            </div>
            
            <div class="product-container">
              <div class="product-card">
                <form method="get" action="/lib/korz.php?id=<?=$all['id товар']?>">
                  <input type="hidden" name="id" value="<?=$all['id товар']?>">
                  <!-- <a href="korz.php?id=<?//=$all['id товар']?>"> --><Button className="add-to-cart-button" class="add-to-cart-button" type="submit">Добавить в корзину</Button></a>
                </form>
                <div class="favorite-container">
                  <div class="favorite-button">
                    <img src="assets/img_537_65_75a9c9.png" class="image-container" />
                  </div>
                  <p class="favorite-button1">Добавить в избранное</p>
                </div>
              </div>
              <div class="product-details"></div>
              <div class="editor-notes-container1">
                <!-- Repeated elements detected. These are rendered using loops & conditions in the React tab -->
                <div class="editor-notes-container">
                  <div class="editor-notes-section" style="align-items: flex-end">
                    <p class="editor-notes-value">Примечания редакторов</p>
                    <div class="sweater-container" style="padding-top: 10px; padding-bottom: 3px">
                      <img class="image-container3" src="assets/img_537_68_9f6a3d.svg" />
                    </div>
                  </div>
                  <div class="content-divider"></div>
                </div>
                <div class="editor-notes-container">
                  <div class="editor-notes-section" style="align-items: center">
                    <p class="editor-notes-value">Размер и форма</p>
                    <div class="sweater-container">
                      <img class="image-container3" src="assets/img_537_73_1e8113.svg" />
                    </div>
                  </div>
                  <div class="content-divider"></div>
                </div>
                <div class="editor-notes-container">
                  <div class="editor-notes-section" style="align-items: center">
                    <p class="editor-notes-value">Детали и уход</p>
                    <div class="sweater-container">
                      <img class="image-container3" src="assets/img_537_77_656225.svg" />
                    </div>
                  </div>
                  <div class="content-divider"></div>
                </div>
                <div class="editor-notes-container">
                  <div class="editor-notes-section" style="align-items: flex-end">
                    <p class="editor-notes-value">Доставка и возврат</p>
                    <div class="sweater-container" style="padding-top: 10px; padding-bottom: 3px">
                      <img class="image-container3" src="assets/img_537_81_2a6f66.svg" />
                    </div>
                  </div>
                  <div class="content-divider"></div>
                </div>
              </div>
              <p class="product-code-label">Код товара: 1233 5945 0230 9696</p>
            </div>
          </div>
        </div>
        <div class="product-card-container">
          <p class="editor-notes-value">Носите с этим</p>
          <div class="product-grid">
            <div class="product-card">
              <img src="assets/img_537_91_43aa85.png" class="product-image" />
              <div class="fashion-product-container">
                <div class="brand-info">
                  <p class="brand-name">BURBERRY</p>
                  <div class="brand-info1">
                    <p class="brand-name">4,235</p>
                    <div class="sweater-container">
                      <img src="assets/img_537_115_3459f6.png" class="image-container1" />
                    </div>
                  </div>
                </div>
                <p class="burberry-jacket">Куртка</p>
              </div>
            </div>
            <div class="product-card">
              <img src="assets/img_537_92_5f392f.png" class="product-image" />
              <div class="fashion-product-container">
                <div class="brand-info">
                  <p class="brand-name">BRUNELLO CUCINELLI</p>
                  <div class="brand-info1">
                    <p class="brand-name">2,335</p>
                    <div class="sweater-container">
                      <img src="assets/img_537_115_3459f6.png" class="image-container1" />
                    </div>
                  </div>
                </div>
                <p class="burberry-jacket">Свитер</p>
              </div>
            </div>
            <div class="product-card">
              <img src="assets/img_537_93_7e1e58.png" class="product-image" />
              <div class="fashion-product-container">
                <div class="brand-info">
                  <p class="brand-name">BRUNELLO CUCINELLI</p>
                  <div class="brand-info1">
                    <p class="brand-name">2,635</p>
                    <div class="sweater-container">
                      <img src="assets/img_537_115_3459f6.png" class="image-container1" />
                    </div>
                  </div>
                </div>
                <p class="burberry-jacket">Кожанные ботинки</p>
              </div>
            </div>
            <div class="product-card">
              <img src="assets/img_537_94_cac7f9.png" class="product-image" />
              <div class="fashion-product-container">
                <div class="brand-info">
                  <p class="brand-name">LORO PIANA</p>
                  <div class="brand-info1">
                    <p class="brand-name">5,635</p>
                    <div class="sweater-container">
                      <img src="assets/img_537_115_3459f6.png" class="image-container1" />
                    </div>
                  </div>
                </div>
                <p class="burberry-jacket">Пальто</p>
              </div>
            </div>
            <div class="product-card">
              <img src="assets/img_537_95_d3f644.png" class="product-image" />
              <div class="fashion-product-container">
                <div class="brand-info">
                  <p class="brand-name">INCOTEX</p>
                  <div class="brand-info1">
                    <p class="brand-name">1,635</p>
                    <div class="content-wrapper">
                      <img src="assets/img_537_115_3459f6.png" class="image-container1" />
                    </div>
                  </div>
                </div>
                <p class="burberry-jacket">Жилет</p>
              </div>
            </div>
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
