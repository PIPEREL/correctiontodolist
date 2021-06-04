<?php

const dataFile = "../csv/task.csv";


function addTask($titre, $desc , $date, $priority){


    $taskData= [$titre, $desc , $date, $priority];

    saveTaskcsv($taskData);
}

function saveTaskcsv (array $taskData){

    $file= fopen( dataFile, "a" );

    fputcsv($file,$taskData);

    fclose($file);

    header('location: ../index.php');
}



?>