<!DOCTYPE html>
<html>
<head>
    <title>DeliveryCost | Расчёт стоимости доставки для вашего бизнеса</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--
        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=dd39f7f9-148c-4fd3-9bcd-5cb40cafcbe2" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        ymaps.ready(function () {
            init("<?= $_GET["from"] ?>",
                "<?= $_GET["to"] ?>",
                "<?= $_GET["cost"] ?>",
                "<?= $_GET["mincost"] ?>");
        });
    </script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" id="StyleLink" title="CSS" media="all" />
</head>
<body>
<div class="container-fluid">
    <div id="map"></div>
    <div class="hidden">
        <div class="row">
            <div class="col-2">
                <a href="http://33kita.ru"><img class="logo" src="i/logo.png"></a>
            </div>
            <div class="col-9">
                <a href="http://amocrm.33kita.ru">Автоматизация отделов продаж</a>,
                <a href="http://b24.33kita.ru">внедрение Битрикс24</a><br/>
                консалтинг, крупные внедрения по всей территории РФ удалённо
            </div>
        </div>
    </div>
</div>


</body>
</html>
