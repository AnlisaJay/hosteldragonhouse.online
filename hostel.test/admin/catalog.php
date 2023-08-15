<?php session_start();?>
<?php
require_once '../functions/connect.php';
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>

<body>

<div style="text-align: center">
    <h1>Админка редактирование "Каталог"</h1>
    <?php if (!empty($_SESSION["login"])) :?>

        <?php echo "Добрый день,".$_SESSION['login']; ?>
        <br>
        <a href="/logout.php">Выйти</a><br>

        <?php
        $sql=$pdo->prepare("SELECT * FROM catalog");
        $sql->execute();
        while($res=$sql->fetch(PDO::FETCH_OBJ)):
            ?>

            <form action="/admin/catalog/catalog.php/<?php echo $res->id ?>" method="post" enctype="multipart/form-data">
                <?php echo $res->id ?> <br>
                <input type="text" name="title" value="<?php echo $res->title ?>">
                <input type="text" name="price" value="<?php echo $res->price ?>">
                <p>
                    <input type="file" name="im">
                </p>
                <input type="submit" name="save" value="Сохранить">

            </form>
            <br>
            <img src="/admin/img/<?php echo $res->filename ?>"width="200">

        <?php endwhile?>


    <?php  else:
        echo '<h2>Вы что хакер?</h2>';
        echo '<a href="/">На главную</a>';
        ?>

    <?php endif ?>


</div>


</body>
</html>
