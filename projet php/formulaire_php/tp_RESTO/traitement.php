<?php

include 'pdo.php';

if (isset($_GET['restaurant_id'])) {
    $restaurant_id = $_GET['restaurant_id'];


    if (isset($_POST['exampleFormControlInput1'])
        && isset($_POST['exampleFormControlTextarea1'])) {

        $note = htmlspecialchars($_POST['exampleFormControlInput1']);
        $textarea = htmlspecialchars($_POST['exampleFormControlTextarea1']);

        $sql = "INSERT INTO avis (contenu, note, restaurant_id ) VALUES (:contenu, :note, :restaurant_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'contenu' => $textarea,
            'note' => $note,
            'restaurant_id' => $restaurant_id
        ]);
    }

    header('Location: index.php?success=1');
    exit();
}


