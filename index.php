<!DOCTYPE html>
<html>
<head>
    <title>DeliveryCost | Расчёт стоимости доставки для вашего бизнеса</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--
        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=dd39f7f9-148c-4fd3-9bcd-5cb40cafcbe2" type="text/javascript"></script>
    <script src="main.js" type="text/javascript"></script>
    <script>
        ymaps.ready(function () {
            init("<?= $_GET["from"] ?>", "<?= $_GET["to"] ?>", "<?= $_GET["cost"] ?>");
        });
    </script>
    <style>
        @font-face {
            font-family: Blogger; /* Имя шрифта */
            src: url(f/Bloggersanslight.ttf); /* Путь к файлу со шрифтом */
        }

        html, body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            font-family: "Blogger", "Calibri Light", "Tahoma", "Arial"  ;
        }

        #map {
            width: 100%;
            height: 90%;
            padding: 0;
            margin: 0;
        }
        .container{overflow:hidden;}

        .footer {
            white-space:nowrap;
            padding: 5px 15px;
            height: 10%;
        }
        .footer div{display:inline-block;}

        .logo{
            height: 50px;
        }

        .promo {
            margin: 0 0 8px 10px;
            width: 60%;
        }
    </style>
</head>
<body>
<div id="map"></div>
<div class="container">
    <div class="footer">
        <div><a href="http://33kita.ru"><img class="logo" src="i/logo.png"></a></div>
        <div class="promo">
            <a href="http://amocrm.33kita.ru">Автоматизация отделов продаж</a>,
            <a href="http://b24.33kita.ru">внедрение Битрикс24</a><br/>
            консалтинг, крупные внедрения по всей территории РФ удалённо
        </div>
    </div>
</div>

</body>
</html>
