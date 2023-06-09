<?php

if (isset($_POST['new_task'])) {
    $task = $_POST['new_task'];
    //conversione in booleano
    $task['completed'] = filter_var($task['completed'], FILTER_VALIDATE_BOOLEAN);
    // read the json file with file_get_contents
    $tasks_string = file_get_contents('tasks.json');
    // convert the json_string into an associative array with json_decode()
    $tasks_array = json_decode($tasks_string, true);
    //add the new task to the array
    array_unshift($tasks_array, $task);

    // convert the array back into a json string
    $new_tasks_json_string = json_encode($tasks_array);
    // replace the file content using file_put_contents()
    file_put_contents('tasks.json', $new_tasks_json_string);
    // add header application/json
    header('Content-Type: application/json');
    // echo json
    echo $new_tasks_json_string;
}
