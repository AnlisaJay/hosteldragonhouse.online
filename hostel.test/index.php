<?php require 'public/contact.php' ?>

    <?php
        require_once './functions/connect.php';
        session_start();

        $main = $pdo->prepare("SELECT * FROM header");
        $main->execute();
        $result = $main->fetch(PDO::FETCH_OBJ);

    ?>


<style>

    .btn-primary {
        font-weight: bold;
        padding: 7px 20px; /* You can adjust the padding values as needed */
        background-color: orange;
        border: none;
        margin-top: 20px;
    }
</style>

<div class="intro-section" style="background-image: url('/admin/img/<?php echo $result->filename?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                <h1><?php echo $result->name?></h1>
                <a href="/catalog.php" class="btn btn-primary">Наши номера</a>
            </div>
        </div>
    </div>
</div>


<?php require 'public/uslugi.php' ?>
<?php require 'public/header.php' ?>
<?php require 'public/footer.php' ?>




    

    
    
    
