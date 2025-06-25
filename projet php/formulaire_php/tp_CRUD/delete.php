<?php
include 'pdo.php';

if (isset($_GET['values_id'])) {
    $values_id = $_GET['values_id'];

    $sql = "DELETE FROM game WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $values_id]);

}
header('Location: index.php?success=1');
exit();

