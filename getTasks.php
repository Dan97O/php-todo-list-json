<?php

$tasks_json_string = file_get_contents('tasks.json');

header('Content-Type: application/json');
echo $tasks_json_string;
