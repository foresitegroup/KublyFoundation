<?php
include_once "../inc/dbconfig.php";

$array = [
  gremlins($_POST['sapphire']),
  gremlins($_POST['aqua']),
  gremlins($_POST['teal']),
  gremlins($_POST['turquoise']),
  gremlins($_POST['navy']),
  gremlins($_POST['denim']),
  $_POST['id']
];

$sql = "UPDATE sponsors SET sapphire = ?, aqua = ?, teal = ?, turquoise = ?, navy = ?, denim =? WHERE id = ?";

$types = "ssssssi";


$stmt = $mysqli->prepare($sql);
$stmt->bind_param($types, ...$array);
$stmt->execute();

$stmt->close();
$mysqli->close();

header("Location: sponsors.php");
?>