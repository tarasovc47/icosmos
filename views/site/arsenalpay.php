<!doctype html>
<html lang="ru">

<head>
    <!-- скрипт виджета подключаем в любом месте,
         например, в head-->
</head>
    <div id='arsenalpay-widget'></div>
    <script src='https://arsenalpay.ru/widget/script.js'></script>
    <script>
        var widget = new ArsenalpayWidget();
        widget.element = 'arsenalpay-widget';
        widget.widget = 674;
        widget.render();
    </script>
</body>
</html>
