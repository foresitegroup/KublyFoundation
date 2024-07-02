<?php
include "login.php";

include_once "../inc/dbconfig.php";

if ($_SERVER['QUERY_STRING'] != "") {
  $PageTitle = "Edit Projects Funded";
  $a = "edit";

  $stmt = $mysqli->prepare("SELECT * FROM projects_funded WHERE id = ?");
  $stmt->bind_param("i", $_SERVER['QUERY_STRING']);
  $stmt->execute();
  $projects = $stmt->get_result();
  $project = $projects->fetch_assoc();
} else {
  $PageTitle = "Add Projects Funded";
  $a = "add";
}

include "header.php";
?>

<div class="site-width">
  <h1><?php echo $PageTitle; ?></h1>

  <form action="projects-funded-db.php" method="POST">
    <div>
      <input type="checkbox" name="current" id="current"<?php if ($_SERVER['QUERY_STRING'] == "" || ($_SERVER['QUERY_STRING'] != "" && $project['current'] == "on")) echo " checked"; ?>>
      <label class="checkbox" for="current">Current</label><br>
      <br>

      <label>
        Title
        <input type="text" name="title" value="<?php if ($_SERVER['QUERY_STRING'] != "") echo htmlspecialchars($project['title']); ?>">
      </label>

      <label>
        Description
        <textarea name="description"><?php if ($_SERVER['QUERY_STRING'] != "") echo htmlspecialchars($project['description']); ?></textarea>
      </label>

      <label>
        Link
        <input type="text" name="link" value="<?php if ($_SERVER['QUERY_STRING'] != "") echo htmlspecialchars($project['link']); ?>">
      </label>

      <label>
        Year
        <input type="text" name="year" value="<?php if ($_SERVER['QUERY_STRING'] != "") echo htmlspecialchars($project['year']); ?>">
      </label>

      <?php
      $pf_cats_stmt = $mysqli->prepare("SELECT * FROM projects_funded_categories ORDER BY category ASC");
      $pf_cats_stmt->execute();
      $pf_cats = $pf_cats_stmt->get_result();

      if ($pf_cats->num_rows > 0) {
        if ($_SERVER['QUERY_STRING'] != "") $cats = explode(" ", $project['categories']);

        foreach ($pf_cats as $pf_cat) {
          echo '<input type="checkbox" name="categories[]" id="categories'.$pf_cat['id'].'" value="'.strtolower(preg_replace("/[^A-Za-z0-9]/", '', $pf_cat['category'])).'"';
          if ($_SERVER['QUERY_STRING'] != "" && in_array(strtolower(preg_replace("/[^A-Za-z0-9]/", '', $pf_cat['category'])), $cats)) echo " checked";
          echo ">\n";
          echo '<label class="checkbox" for="categories'.$pf_cat['id'].'">'.$pf_cat['category']."</label>\n";
        }
      }

      $pf_cats->close();
      $pf_cats_stmt->close();
      ?>
      
      <?php if ($_SERVER['QUERY_STRING'] != "") { ?>
      <input type="hidden" name="id" value="<?php echo $_SERVER['QUERY_STRING']; ?>">
      <?php } ?>
      <input type="hidden" name="a" value="<?php echo $a; ?>">

      <br><br>

      <button type="submit">Submit</button>
    </div>
  </form>
</div>

<?php
if ($_SERVER['QUERY_STRING'] != "") {
  $projects->close();
  $stmt->close();
}

include "footer.php";
?>