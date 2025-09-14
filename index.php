<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <!-- Meta и links (как в оригинале, без изменений) -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ГУДВИН - ПОСТАВКА ПРОМЫШЛЕННОГО ОБОРУДОВАНИЯ</title>
    <!-- Подключение стилей отдельно (пока заглушки — в этапе 3 сделаем реальные файлы) -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="css/site.css" rel="stylesheet"> Здесь будут BEM-стили -->
    <!-- ... другие CSS, как fonts -->
</head>
<body>
    <header class="header">
        <!-- Шапка: навбары, логотип, меню, телефон -->
        <div class="container">
            <div class="container">
                <div class="navbar-header">
                    <!-- Toggle, логотип, телефон -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-toggle" style="padding-top: 5px; padding-right:0">
                        <a href="tel:+78124480810"><img src="/images/phone.png" style="height: 42px; margin-top: -10px"></a>
                    </div>
                    <a class="navbar-brand" href="/">
                        <span class="hidden-xs"><img src="/images/logo.png" style="width: 160px;"></span>
                        <span class="visible-xs"><img src="/images/logo.png" style="width: 130px; margin-top: -5px"></span>
                    </a>
                </div>
                <div id="w0-collapse" class="collapse navbar-collapse">
                    <!-- Меню, телефон, кнопка "Перезвоните мне" -->
                    <!-- ... код из твоего index.html -->
                </div>
            </div>
        </div>
        <nav id="navbar-cat" class="navbar-inverse hidden-xs navbar">
            <!-- Категорийный навбар -->
            <!-- ... код из index.html -->
        </nav>
    </header>

    <main>
        <!-- Основной контент: заголовок, слайдер, плитки -->
        <div class="container-fluid container-white">
            <div class="container">
                <h1>ГУДВИН - ПОСТАВКА ПРОМЫШЛЕННОГО ОБОРУДОВАНИЯ</h1>
                <p>РВД, ремни, автоэлектрика и промышленное оборудование для Вас</p>
                <!-- Здесь слайдер (как ты прислал) и плитки — в этапе 2 разделим на sections -->
                <div class="carousel-inner">
                    <!-- Код слайдера из твоего сообщения -->
                    <div class="item">
                        <img src="/images/main/slider/main3.png" class="img-slider center-block hidden-xs">
                        <img src="/images/main/slider/mobile/main3.png" class="img-slider center-block visible-xs">
                        <div class="carousel-caption">
                            <div class="carousel-text">
                                <h2 class="h2-slider">РУКВА И ШЛАНГИ<br>ВЫСОКОГО ДАВЛЕНИЯ</h2>
                                <div style="padding:10px;"></div>
                                <a href="/rukava-vysokogo-davleniya" class="btn btn-default btn-more">ПОДРОБНЕЕ<img src="/images/arrow-narrow-right.png" style="padding-left: 20px; margin-top: -2px;"></a>
                            </div>
                        </div>
                    </div>
                    <!-- ... другие item из твоего кода -->
                </div>
                <!-- Плитки категорий -->
                <div class="row">
                    <!-- ... код плиток из index.html, как "Оборудование для производства РВД" -->
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <!-- Подвал: логотип, ссылки, контакты, копирайт -->
        <div class="container">
            <div class="row">
                <!-- ... код из index.html -->
            </div>
            <p class="pull-left footer-copy">© Гудвин Групп 2025</p>
        </div>
    </footer>

    <!-- Modals, social, cookie (вне основных тегов для позиционирования) -->
    <!-- Scripts (jQuery, Bootstrap для слайдера — пока оставим, уберём позже) -->
</body>
</html>