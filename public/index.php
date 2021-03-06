<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/style.css">
    <title>GroomRoom - Home</title>
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
        <div class="first-section">
          <div class="section-left">
            <p>
              Профессиональная укладка<br />для ваших домашних<br />питомцев
            </p>
          </div>
          <div class="section-right">
            <div class="form-box">
              <p>Создайте заявку</p>
              <form action="">
                <input type="text" v-bind:value="valueName" v-on:input="inputName" placeholder="Как зовут вашего питомца?"/>
                <input type="text" v-bind:value="valueService" v-on:input="inputService" placeholder="Услуга"/>
                <button type="button" v-on:click="submissionForm">
                  <p>Записаться</p>
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="second-section">
          <div class="title-second-section">
            <p>Наши работы</p>
          </div>
          <div class="parent">
            <div class="dog" v-for="myjobs in parents">
              <img :src="myjobs.img" class="dog-pictures" />
              <div class="name-project"><p>{{myjobs.nickname}}</p></div>
              <select>
                <option>
                  <div class="service">Услуга: <b>{{myjobs.service}}</b></div>
                </option>
              </select>
              <div class="status"><p>{{myjobs.status}}</p></div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <p>groom-salon.com 2000-2999</p>
      </div>
    </div>
    <script src="public/js/script.js"></script>
    <script src="public/js/vue.js"></script>
  </body>
</html>
