<?php
global $connection;
global $errors;
$host="localhost";
$user="test";
$pass="t3st3r123";
$db="test";
$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));


if (!empty($_POST['lisa'])) {
    $note = mysqli_real_escape_string($connection ,$_POST['note']);
    $sql = "INSERT INTO maile_notes (Notes) VALUES ('$note')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
    } else {
        $errors[] = "lisamine ei õnnestunud";
    }
    header("Location: index.php");
}


