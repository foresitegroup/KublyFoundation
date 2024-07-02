<?php
include "login.php";

include_once "../inc/dbconfig.php";

if ($_SERVER['QUERY_STRING'] != "") {
  $PageTitle = "Edit Projects Funded Category";
  $a = "edit";

  $stmt = $mysqli->prepare("SELECT * FROM projects_funded_categories WHERE id = ?");
  $stmt->bind_param("i", $_SERVER['QUERY_STRING']);
  $stmt->execute();
  $pf_cats = $stmt->get_result();
  $pf_cat = $pf_cats->fetch_assoc();
} else {
  $PageTitle = "Add Projects Funded Category";
  $a = "add";
}

include "header.php";
?>

<div class="site-width">
  <h1><?php echo $PageTitle; ?></h1>

  <form action="projects-funded-categories-db.php" method="POST">
    <div>
      <label>
        Category
        <input type="text" name="category" value="<?php if ($_SERVER['QUERY_STRING'] != "") echo htmlspecialchars($pf_cat['category']); ?>">
      </label>
      
      <?php if ($_SERVER['QUERY_STRING'] != "") { ?>
      <input type="hidden" name="id" value="<?php echo $_SERVER['QUERY_STRING']; ?>">
      <?php } ?>
      <input type="hidden" name="a" value="<?php echo $a; ?>">

      <button type="submit">Submit</button>
    </div>
  </form>
</div>

<?php
if ($_SERVER['QUERY_STRING'] != "") {
  $pf_cats->close();
  $stmt->close();
}

include "footer.php";
?>