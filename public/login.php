<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/style.css">
    <title>GroomRoom - logIn</title>
  </head>
  <body>
    <div id="app">
      <div class="main">
        <div class="header">
          <div class="logo">
            <div class="logo-title">
              <h1>GROOMING</h1>
              <p>Service for dogs and cats</p>
            </div>
          </div>
          <div class="nav-menu">
            <a href="#">
              <img class="icon" src="icon/home.png" />
              Главная</a
            >
            <a href="#">
              <img class="icon" src="icon/key.png" />
              Вход</a
            >
          </div>
        </div>
        <hr />
        <div class="first-section-login">
          <div class="section-left-login">
            <p>Войдите или зарегистрируйтесь</p>
            <span>Чтобы получить возможность добавить заявку</span>
          </div>
          <div class="section-right-login">
            <img class="animal" src="img/animal.png" alt="" />
            <div class="form-box-login">
              <div class="login-botton">
                <a href="#">Вход</a>
                <a href="#">Регистрация</a>
              </div>
              <form action="">
                <input
                  type="email"
                  v-bind:value="valueEmail"
                  v-on:input="inputEmail"
                  placeholder="Введите почту"
                />
                <input
                  type="password"
                  v-bind:value="valuePassword"
                  v-on:input="inputPassword"
                  placeholder="Введите пароль"
                />
                <button type="button" v-on:click="consoleConclusion">
                  <p>Записаться</p>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <p>groom-salon.com 2000-2999</p>
      </div>
    </div>
    <script src="js/script.js"></script>
    <script src="js/vue.js"></script>
  </body>
</html>
