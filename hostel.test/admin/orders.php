<?php session_start(); ?>
<?php require_once '../functions/connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <style>
        /* Стилизация таблицы и кнопки удаления */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete-form {
            display: flex;
            align-items: center;
            border: 1px solid transparent;
            margin-top: 10px;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
<div style="text-align: center">
    <h1>Входящие заявки</h1>
    <?php if (!empty($_SESSION["login"])) : ?>
        <?php echo "Добрый день, " . $_SESSION['login']; ?>
        <br>
        <a href="/logout.php">Выйти</a><br>

        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Действия</th>
                </tr>
                <?php
                $sql = $pdo->prepare("SELECT * FROM orders ORDER BY id DESC");
                $sql->execute();
                while ($res = $sql->fetch(PDO::FETCH_OBJ)) : ?>
                    <tr>
                        <td><?php echo $res->id ?></td>
                        <td><?php echo $res->name ?></td>
                        <td><?php echo $res->phone ?></td>
                        <td>
                            <form action="/admin/orders/orders.php/<?php echo $res->id ?>"
                                  method="post" enctype="multipart/form-data" class="delete-form">
                                <form action="/admin/orders/delete.php" method="post" class="delete-form">
                                    <input type="hidden" name="id" value="<?php echo $res->id ?>">
                                    <button type="submit" name="delete" class="delete-btn">Удалить</button>
                                </form>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    <?php else: ?>
        <h2>Вы что хакер?</h2>
        <a href="/">На главную</a>
    <?php endif; ?>
</div>
</body>
</html>
