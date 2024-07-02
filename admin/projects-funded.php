<?php
include "login.php";

$PageTitle = "Projects Funded";
include "header.php";
include_once "../inc/dbconfig.php";
?>

<div class="site-width">
  <a href="projects-funded-edit.php" class="btn">Add New Project</a><br>
  <br>

  <h1>Projects Funded</h1>

  <?php
  $stmt = $mysqli->prepare("SELECT * FROM projects_funded ORDER BY current DESC, CASE WHEN title REGEXP '^(A|An|The)[[:space:]]' = 1 THEN TRIM(SUBSTR(title , INSTR(title ,' '))) ELSE title END ASC, year DESC");
  $stmt->execute();
  $projects = $stmt->get_result();

  if ($projects->num_rows > 0) {
    foreach ($projects as $project) {
      echo '<div class="row">'."\n";
        echo '<a href="projects-funded-db.php?id='.$project['id'].'&a=delete" onClick="return(confirm(\'Are you sure you want to delete this project?\'));" class="delete"></a>'."\n";
        echo '<a href="projects-funded-edit.php?'.$project['id'].'" class="edit"></a>'."\n";
        echo '<a href="projects-funded-db.php?id='.$project['id'].'&a=current" class="';
        echo (empty($project['current'])) ? "current-n" : "current-y";
        echo '"></a>'."\n";
        echo ' '.$project['title'];
        if ($project['year'] != "") echo " (".$project['year'].")";
        echo "\n";
      echo "</div>\n";
    }
  } else {
    echo "Sorry, no projects found.\n";
  }

  $projects->close();
  $stmt->close();
  ?>
</div>

<?php include "footer.php"; ?>