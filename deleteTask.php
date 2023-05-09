<?php
$file_path = 'tasks.json';

if (isset($_POST['completeTask'])) {
    $index = $_POST['completeTask'];

    // Leggi il contenuto del file JSON
    $tasks_string = file_get_contents($file_path);
    // Decodifica il JSON in un array associativo
    $tasks_array = json_decode($tasks_string, true);

    // Rimuovi il task dall'array
    unset($tasks_array[$index]);

    // Converti l'array in una stringa JSON
    $tasks_json = json_encode($tasks_array);

    // Scrivi la stringa JSON nel file
    file_put_contents($file_path, $tasks_json);

    // Invia la nuova lista dei task come risposta JSON
    header('Content-Type: application/json');
    echo $tasks_json;
}
