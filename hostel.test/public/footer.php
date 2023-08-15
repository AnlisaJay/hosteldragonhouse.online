</div>


<?php
require_once './functions/connect.php';
session_start();

$sql3 = $pdo->prepare("SELECT * FROM footer");
$sql3->execute();
$footer = $sql3->fetchAll(PDO::FETCH_OBJ);

?>

<style>
    .footer-container {
        display: flex;
        justify-content: space-between; /* Чтобы элементы равномерно распределялись по ширине футера */
        width: 100%;
    }

    .footer-item {
        width: 100%; /* Здесь вы можете указать ширину элементов, чтобы они занимали равную часть ширины футера */
    }

    .footer-link {
        display: block;
        height: 100px;
        background-color: black;
        text-align: center;
        padding-top: 20px;
        color: white;
        font-size: 20px;
    }
</style>

<div class="footer-container">
    <?php foreach ($footer as $footers): ?>
        <div class="footer-item">
            <a href="<?php echo $footers->link ?>" class="footer-link">
                <?php echo $footers->title ?>
            </a>
        </div>
    <?php endforeach ?>
</div>




</body>

</html>