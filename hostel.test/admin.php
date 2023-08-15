<?php session_start();?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>

<body>

<div style="text-align: center">

    <?php if (!empty($_SESSION["login"])) :?>

    <?php echo "Добрый день,".$_SESSION['login']; ?>
    <br>
        <a href="/logout.php">Выйти</a> <br>
        <a href="/admin/contact.php">Контакты</a>
        <a href="admin/uslugi.php">Услуги</a>
        <a href="/admin/about.php">О нас</a>
        <a href="/admin/catalog.php">Каталог</a>
        <a href="/admin/orders.php">Заявки на бронь</a>



    <?php  else:
        echo '<h2>Вы что хакер?</h2>';
        echo '<a href="/">На главную</a>';
        ?>

    <?php endif ?>


</div>


</body>
</html>
