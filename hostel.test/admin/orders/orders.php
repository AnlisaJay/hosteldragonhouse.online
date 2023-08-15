<?php
require_once '../../functions/connect.php'; // Путь к файлу с подключением к базе данных

if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = $_POST['id'];

    // SQL-запрос на удаление записи по идентификатору
    $sql = $pdo->prepare("DELETE FROM orders WHERE id = :id");
    $sql->bindParam(':id', $id, PDO::PARAM_INT);

    if ($sql->execute()) {
        echo "Запись успешно удалена.";
    } else {
        echo "Ошибка при удалении записи: " . $sql->errorInfo()[2];
    }
} else {
    echo "Неверные данные для удаления.";
}
