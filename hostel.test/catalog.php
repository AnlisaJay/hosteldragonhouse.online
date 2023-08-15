<?php
require_once './functions/connect.php';
session_start();

$sql2 = $pdo->prepare("SELECT * FROM catalog");
$sql2->execute();
$catalog = $sql2->fetchAll(PDO::FETCH_OBJ);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Подключение библиотек Bootstrap и jQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Наши номера</title>
</head>
<body>

<?php require 'public/contact.php' ?>

<div class="container">

    <div class="row">

        <?php foreach($catalog as $catalogi):?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow text-center">
                <img class="card-img-top" src="/admin/img/<?php echo $catalogi->filename?>" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <p class="card-text"><?php echo $catalogi->title?></p>
                    <p class="card-text"><?php echo $catalogi->price?></p>
                    <div class="mx-auto">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#myModal">Забронировать</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Модальное окно -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Заказать звонок для бронирования</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="submit_form.php">
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Как к вам обращаться?">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="phone" class="form-control" placeholder="Ваш номер телефона">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Оставить заявку</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>



        <?php endforeach ?>


    </div>
</div>

</body>
</html>



<?php require 'public/footer.php' ?>
