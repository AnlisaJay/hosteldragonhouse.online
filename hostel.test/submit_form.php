<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "testing";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO orders (name, phone) VALUES ('$name', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Заявка принята. <a href='index.php'>Вернуться на главную страницу</a>";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();
