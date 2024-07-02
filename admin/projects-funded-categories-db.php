<?php
include_once "../inc/dbconfig.php";

switch ($_REQUEST['a']) {
  case "add":
    $sql = "INSERT INTO projects_funded_categories (category) VALUES (?)";
    $array = [gremlins($_POST['category'])];
    $types = "s";
    break;

  case "edit":
    $sql = "UPDATE projects_funded_categories SET category = ? WHERE id = ?";
    $array = [gremlins($_POST['category']), $_POST['id']];
    $types = "si";
    break;

  case "delete":
    $sql = "DELETE FROM projects_funded_categories WHERE id = ?";
    $array = [$_REQUEST['id']];
    $types = "i";
    break;
}

$stmt = $mysqli->prepare($sql);
$stmt->bind_param($types, ...$array);
$stmt->execute();

$stmt->close();
$mysqli->close();

header("Location: projects-funded-categories.php");
?>