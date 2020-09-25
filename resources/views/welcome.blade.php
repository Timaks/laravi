<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Барбершоп "Бородинский"</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic" rel="stylesheet">
  <!--  <link href="css/normalize.css" rel="stylesheet">-->
    <link href="css/app.css" rel="stylesheet">
</head>

<body>
<header class="main-header">
    <nav class="main-navigation">
        <a class="main-header-logo">
            <img src="../css/img/index-logo.svg" width="368" height="153" alt="Логотип барбершопа Бородинский">
        </a>
        <div class="main-navigation-wrapper">
            <div class="container">
                <ul class="site-navigation">
                    <li><a href="info.html">Информация</a></li>
                    <li><a href="news.html">Новости</a></li>
                    <li><a href="price.html">Прайс-лист</a></li>
                    <li><a href="catalog.html">Магазин</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>

                <ul class="user-navigation">
                    <li><a class="login-link" href="login.html">Войти</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container">
    <h1 class="visually-hidden">Барбершоп Бородинский</h1>
    <section class="features">
        <h2 class="visually-hidden">Преимущества</h2>
        <ul class="features-list">
            <li class="feature-item">
                <h3>Быстро</h3>
                <p> Мы делаем свою работу быстро! Два часа пролетят незаметно, и вы  - счастливый обладатель стильной стрижки-минутки!</p>
            </li>
            <li class="feature-item">
                <h3>Круто</h3>
                <p>Забудьте как вы стриглись раньше. Мы сделаем из вас звезду футбола или кино! Во всяком случае внешне.</p>
            </li>
            <li class="feature-item">
                <h3>Дорого</h3>
                <p>Наши мастера - профессионалы своего дела и не могут стоить дешево. К тому же разве цена не дает определенный статус?</p>

            </li>
        </ul>
    </section>


    <div class="index-columns">
        <section class="news">
            <h2>Новости</h2>
            <ul class="news-list">
                <li class="news-item">
                    <p>Нам наконец завезли Ягермастер! Теперь вы можете пропустить стаканчик во время стрижки</p>
                    <time datetime="2019-01-11">11 января</time>
                </li>
                <li class="news-item">
                    <p>В нашей команде пополнение, Борис "Бритва" Стригунец, обладатель множества титулов в и наград пополнил наши ряды</p>
                    <time datetime="2019-01-19">19 января</time>
                </li>
            </ul>
            <a class="button" href="news.html">Все новости</a>
        </section>

        <section class="gallery">
            <h2>Фотогалерея</h2>
            <figure class="gallery-content">
                <a href="#"><img src="../css/img/studio.jpg" width="286" height="164" alt="Интерьер"></a>
            </figure>
            <button class="button gallery-button gallery-button-back" type="button">Назад</button>
            <button class="button gallery-button gallery-button-next" type="button">Вперед</button>
        </section>
    </div>
    <div class="index-columns">
        <section class="contacts">
            <h2>Контактная информация</h2>
            <p>
                Барбершоп Бородинский <br>
                Адрес: Санкт-Петербург, Б. Конюшенная, д.19/8<br>
                Телефон: +7 (812) 666-02-66
            </p>
            <p>Время работы: <br>
                пн-пт: с 10:00 до 22:00 <br>
                сб-вс: с 10:00 до 19:00
            </p>
            <a class="button" href="map.html">Как проехать</a>
            <a  class="button" href="contacts.html">Обратная связь</a>
        </section>
        <section class="appointment">
            <h2>Записаться</h2>
            <p class="appointment-info">Укажите желаемую дату и время и мы свяжемся с вами для подтверждения брони</p>
            <form class="appointment-form" action="index.html" method="post">
                <p class="appointment-item">
                    <label for="appointment-date">Дата</label>
                    <input id ="appointment-date" type="date" name="date" value="2017-10-08">
                </p>
                <p class="appointment-item">
                    <label for="appointment-time">Время</label>
                    <input id ="appointment-time" type="time"  name="time" value="10:00">
                </p>
                <p class="appointment-item">
                    <label for="appointment-name">Ваше имя</label>
                    <input id="appointment-name" type="text" name="name" value="" placeholder="Борода">
                </p>
                <p class="appointment-item">
                    <label for="appointment-phone">Телефон</label>
                    <input id ="appointment-phone" type=tel" name="phone" value="" placeholder="+7 123 456-78-90">
                </p>

                <button class="button" type="submit">Отправить</button>


            </form>

        </section>
    </div>
</main>
<footer class="main-footer">
    <div class="container">
        <p class="footer-contacts">
            Барбершоп Бородинский <br>
            Адрес: Санкт-Петербург, Б. Конюшенная, д.19/8<br>
            <a href="map.html">Где нас найти?</a> <br>
            Телефон: +7 (812) 666-02-66
        </p>
    </div>
    <div class="footer-social">
        <p class="footer-copyright">Давайте дружить!</p>
        <ul>
            <li><a class="social-button" href="#">Вконтакте</a> </li>
            <li><a class="social-button" href="#">Фейсбук</a></li>
            <li><a class="social-button" href="#">Инстраграм</a></li>
            </li>
        </ul>
    </div>
</footer>
<section class="modal modal-login">
    <h2>Личный кабинет</h2>
    <p>Введите свой логин и пароль</p>
    <form class="login-form" action="index.html" method="post">
        <p>
            <label class="visually-hidden" for="user-login">Логин</label>
            <input class="login-icon-user" id="user-login" type="email" name="login" placeholder="email@example.com">
        </p>
        <p>
            <label class="visually-hidden" for="user-password">Пароль</label>
            <input class="login-icon-password" id="user-login" type="password" name="password" placeholder ="*********">
        </p>
        <p class="login-password-info">

            <input type="checkbox" name="remember" id="login-password-info">
            <label for="login-password-info">Запомните меня</label>
            <a class="restore" href="#">Я забыл пароль</a>
        </p>
        <button class="button" type="submit">Войти</button>
    </form>
    <button type="button">Закрыть</button>
</section>
<section class="modal modal-map">
    <h2 class=visually-hidden">Как до нас добраться</h2>
    <p>
        <img src="img/map.jpg" width="780" height="560" alt="Офис компании по адресу ул. Большая Конюшенная 19/8, Санкт-Петербург">
    </p>
    <button type="button">Закрыть</button>
</section>
</body>
</html>
