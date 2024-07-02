<?php
include_once "../inc/dbconfig.php";

if ($_REQUEST['a'] == "add" || $_REQUEST['a'] == "edit") {
  $current = (isset($_POST['current'])) ? "on" : "";
  $categories = implode(" ", $_POST['categories']);

  $array = [
    gremlins($_POST['title']),
    gremlins($_POST['description']),
    gremlins($_POST['link']),
    gremlins($_POST['year']),
    $categories,
    $current
  ];
}

switch ($_REQUEST['a']) {
  case "add":
    $sql = "INSERT INTO projects_funded (title, description, link, year, categories, current) VALUES (?,?,?,?,?,?)";
    $types = "ssssss";
    break;

  case "edit":
    $sql = "UPDATE projects_funded SET title = ?, description = ?, link = ?, year = ?, categories = ?, current =? WHERE id = ?";
    $array[] = $_REQUEST['id'];
    $types = "ssssssi";
    break;

  case "delete":
    $sql = "DELETE FROM projects_funded WHERE id = ?";
    $array = [$_REQUEST['id']];
    $types = "i";
    break;

  case "current":
    $sql = "UPDATE projects_funded SET current = IF(current='on', '', 'on') WHERE id = ?";
    $array = [$_REQUEST['id']];
    $types = "i";
    break;
}

$stmt = $mysqli->prepare($sql);
$stmt->bind_param($types, ...$array);
$stmt->execute();

$stmt->close();
$mysqli->close();

header("Location: projects-funded.php");
?>