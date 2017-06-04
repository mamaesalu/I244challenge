<?php
global $connection;
$notes = array();
$sql = "SELECT * FROM maile_notes";
$db_notes = mysqli_query($connection, $sql) or die ("ei saanud andmebaasist kätte");
while ($db_note = mysqli_fetch_assoc($db_notes)){
    $notes[] = $db_note;
}