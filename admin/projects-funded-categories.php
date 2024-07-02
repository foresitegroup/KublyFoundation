<?php
include "login.php";

$PageTitle = "Projects Funded Categories";
include "header.php";
include_once "../inc/dbconfig.php";
?>

<div class="site-width">
  <a href="projects-funded-categories-edit.php" class="btn">Add New Category</a><br>
  <br>

  <h1>Projects Funded Categories</h1>

  <?php
  $stmt = $mysqli->prepare("SELECT * FROM projects_funded_categories ORDER BY category ASC");
  $stmt->execute();
  $pf_cats = $stmt->get_result();

  if ($pf_cats->num_rows > 0) {
    foreach ($pf_cats as $pf_cat) {
      echo '<div class="row"><a href="projects-funded-categories-db.php?id='.$pf_cat['id'].'&a=delete" onClick="return(confirm(\'Are you sure you want to delete this category?\'));" class="delete"></a> <a href="projects-funded-categories-edit.php?'.$pf_cat['id'].'" class="edit"></a> '.$pf_cat['category']."</div>\n";
    }
  } else {
    echo "Sorry, no categories found.\n";
  }
  ?>
</div>

<?php include "footer.php"; ?>