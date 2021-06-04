<?php
include './addtask.php';

$titre = $_POST['titre'];
$description = $_POST['desc'];
$date = $_POST['jour']."/".$_POST['mois']."/".$_POST['annee'];
$prio = $_POST['prio'];

addTask($titre,$description,$date,$prio);

?>