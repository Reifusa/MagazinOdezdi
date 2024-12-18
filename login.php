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
        --color-darkgrey-d48aeb57: rgba(156, 156, 156, 1);
        --font-size-48: 48px;
        --font-size-20: 20px;
        --font-size-24: 24px;
        --font-weight-400: 400;
        --border-radius-10: 10px;
      }

      .login-container1 {
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        min-width: 1440px;
        padding: 87px 472px 110px;
        background: var(--color-white);
      }
      .login-title {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-48) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .login-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        margin-top: 46px;
      }
      .address-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        align-self: stretch;
        justify-content: flex-start;
      }
      .postal-address {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .address-container1 {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: 496px;
        height: 56px;
        border: 1px solid var(--color-darkgrey-d48aeb57);
        border-radius: var(--border-radius-10);
      }
      .password-section {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        align-self: stretch;
        justify-content: flex-start;
        margin-top: 34px;
      }
      .password-container {
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
      }
      .forgot-password-text {
        flex: 0 0 auto;
        margin-top: 26px;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .login-container2 {
        box-sizing: border-box;
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        align-self: stretch;
        justify-content: center;
        height: 52px;
        padding-right: 161px;
        padding-left: 161px;
        margin-top: 67px;
        background: var(--color-black);
        border: 1px solid var(--color-black);
        border-radius: var(--border-radius-10);
      }
      .login-title1 {
        flex: 0 0 auto;
        font: var(--font-weight-400) var(--font-size-20) Kurale;
        color: var(--color-white);
        white-space: pre-wrap;
      }
      .account-creation-button {
        flex: 0 0 auto;
        padding-right: 4px;
        padding-left: 4px;
        margin-top: 51px;
      }
      .border-box-container {
        box-sizing: border-box;
        width: 487px;
        border-top: 1px solid rgba(0, 0, 0, 0.3);
      }
      .create-account-message {
        flex: 0 0 auto;
        margin-top: 33px;
        font: var(--font-weight-400) var(--font-size-24) Kurale;
        color: var(--color-black);
        white-space: pre-wrap;
      }
      .create-account-container {
        box-sizing: border-box;
        display: flex;
        flex: 0 0 auto;
        flex-direction: column;
        align-items: stretch;
        align-self: stretch;
        justify-content: center;
        height: 52px;
        padding-right: 168px;
        padding-left: 168px;
        margin-top: 48px;
        border: 1px solid var(--color-black);
        border-radius: var(--border-radius-10);
      }
    </style>
  </head>
  <body>
  <?php
    require "lib/connect.php";
    session_start();
    print_r ($_SESSION);
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
    <div style="display: inline-block; width: 1440px; margin-top: 100px; margin-left: 200px;" data-ignore="used only for top most containter width">
      <div class="login-container1">
        <p class="login-title">Вход в аккаунт</p>
        <form method="post" action="lib/log.php">
            <div class="login-container">
              <div class="address-container">
                <p class="postal-address">Почтовый адрес</p>
                <input type="text" name="Почта" class="address-container1" style="font-size: large;">
              </div>
              <div class="password-section">
                <div class="password-container">
                  <p class="postal-address">Пароль</p>
                  <input type="password" name="Пароль" class="address-container1" style="font-size: large;">
                </div>
                <p class="forgot-password-text">Забыли свой пароль?</p>
              </div>
              <button class="login-container2" type="submit">
                <p class="login-title1">Войти в аккаунт</p>
              </div>
              <div class="account-creation-button">
                <div class="border-box-container"></div>
              </div>
              <p class="create-account-message">У вас нет аккаунта?</p>
              <a href="reg.php"><div class="create-account-container">
                <p class="postal-address">Создать аккаунт</p>
              </div></a>
            </div>
        </form>
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
