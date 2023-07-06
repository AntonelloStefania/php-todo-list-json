<?php
$string = file_get_contents('data/to_do.json');

$array = json_decode($string, true);


if(isset($_POST['newTask'])){
    $newTask = [
    'toDo' => $_POST['newTask']['toDo'],
    'status'=> false,
    ];
    array_push($array, $newTask);
    file_put_contents('data/to_do.json', json_encode($array));
}


if(isset($_POST['delElem'])){
    $index = $_POST['delElem'];
    array_splice($array, $index, 1);
    file_put_contents('data/to_do.json', json_encode($array));
}


 header('Content-Type: application/json');
 echo json_encode($array);

?>