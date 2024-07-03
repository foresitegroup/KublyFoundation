<?php
include "login.php";

include_once "../inc/dbconfig.php";

$PageTitle = "BTB Sponsors";
include "header.php";

$stmt = $mysqli->prepare("SELECT * FROM sponsors WHERE id = 1");
$stmt->execute();
$sponsors = $stmt->get_result();
$sponsor = $sponsors->fetch_assoc();
?>

<div class="site-width">
  <h1><?php echo $PageTitle; ?></h1>

  <form action="sponsors-db.php" method="POST">
    <div>
      <div id="sponsors">
        <label>
          Sapphire
          <textarea name="sapphire"><?php if ($sponsor['sapphire'] != "") echo htmlspecialchars($sponsor['sapphire']); ?></textarea>
        </label>

        <label>
          Aqua
          <textarea name="aqua"><?php if ($sponsor['aqua'] != "") echo htmlspecialchars($sponsor['aqua']); ?></textarea>
        </label>

        <label>
          Teal
          <textarea name="teal"><?php if ($sponsor['teal'] != "") echo htmlspecialchars($sponsor['teal']); ?></textarea>
        </label>

        <label>
          Turquoise
          <textarea name="turquoise"><?php if ($sponsor['turquoise'] != "") echo htmlspecialchars($sponsor['turquoise']); ?></textarea>
        </label>

        <label>
          Navy
          <textarea name="navy"><?php if ($sponsor['navy'] != "") echo htmlspecialchars($sponsor['navy']); ?></textarea>
        </label>

        <label>
          Denim
          <textarea name="denim"><?php if ($sponsor['denim'] != "") echo htmlspecialchars($sponsor['denim']); ?></textarea>
        </label>
      </div>

      <input type="hidden" name="id" value="1">

      <button type="submit">Update</button>
    </div>
  </form>
</div>

<?php
$sponsors->close();
$stmt->close();

include "footer.php";
?>