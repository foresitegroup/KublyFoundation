<?php
$PageTitle = "Beyond the Blues";
$Description = "Beyond the Blues is CEKF's annual fundraising event with live music, casual dinner fare and a brief program highlighting our work at the Foundation.";
$PageMod = "btb";

include "header.php";
?>

<section id="btb-hero">
  <div class="site-width">
    <div class="header">
      <h1>
        <span class="btb-green">B</span><span class="btb-yellow">e</span><span class="btb-orange">y</span><span class="btb-red">o</span><span class="btb-pink">n</span><span class="btb-purple">d</span>
        <div>The</div>
        Blues
      </h1>

      <!-- <a href="donate.php" class="button">Donate</a> -->
      <a href="https://www.eventbrite.com/e/beyond-the-blues-2026-tickets-1996119265457" class="button">Tickets Here</a>
    </div>

    <div class="content">
      Join us Friday, September 18th, 2026 for our 23rd annual Beyond the Blues fundraising event.<br>
      <br>
      <ul>
        <li>Discovery World Pier Wisconsin, 500 N. Harbor Drive, Milwaukee</li>
        <li>6:30 - 10:30 p.m.</li>
        <li>Bartolotta fare, cash bar & musical entertainment</li>
      </ul>
      <br>
      Sponsorships available - contact Kris Rick for information at <?php email("krick@cekf.org"); ?> or 414-477-9959
    </div>
  </div>
</section>

<section id="sponsors">
  <h2>Beyond The Blues 2026 Sponsors To Date</h2>

  <div class="site-width">
    <?php
    include_once "inc/dbconfig.php";

    $stmt = $mysqli->prepare("SELECT * FROM sponsors WHERE id = 1");
    $stmt->execute();
    $sponsors = $stmt->get_result();
    $sponsor = $sponsors->fetch_assoc();

    echo '<div class="col">'."\n";
      if ($sponsor['sapphire'] != "") {
        echo "<h3>Sapphire Level - $20,000</h3>\n";
        echo "<ul>\n";
          echo "<li>".str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['sapphire'],"\n\r"))."</li>\n";
        echo "</ul>\n";
      }

      if ($sponsor['aqua'] != "") {
        echo "<h3>Aqua Level - $10,000</h3>\n";
        echo "<ul>\n";
          echo "<li>".str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['aqua'],"\n\r"))."</li>\n";
        echo "</ul>\n";
      }

      if ($sponsor['teal'] != "") {
        echo "<h3>Teal Level - $5,000</h3>\n";
        echo "<ul>\n";
          echo "<li>".str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['teal'],"\n\r"))."</li>\n";
        echo "</ul>\n";
      }

      if ($sponsor['turquoise'] != "") {
        echo "<h3>Turquoise Level - $2,500</h3>\n";
        echo "<ul>\n";
          echo "<li>".str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['turquoise'],"\n\r"))."</li>\n";
        echo "</ul>\n";
      }
    echo "</div>\n";

    if ($sponsor['navy'] != "") {
      echo '<div class="col">'."\n";
        echo "<h3>Navy Level - $1,000</h3>\n";
        echo "<ul>\n";
          echo "<li>".str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['navy'],"\n\r"))."</li>\n";
        echo "</ul>\n";
      echo "</div>\n";
    }

    if ($sponsor['denim'] != "") {
      echo '<div class="col">'."\n";
        echo "<h3>Denim Level - $500</h3>\n";
        echo "<ul>\n";
          echo "<li>".str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['denim'],"\n\r"))."</li>\n";
        echo "</ul>\n";
      echo "</div>\n";
    }

    $sponsors->close();
    $stmt->close();
    ?>
  </div>
</section>

<section id="btb-gallery">
  <h2>Beyond the Blues 2025</h2>

  <div class="site-width">
    <?php
    $main_dir = "images/galleries/btb2025";

    $files = scandir($main_dir);

    foreach($files as $file) {
      if ($file == "." || $file == "..") continue;
      $results[] = $main_dir . "/" . $file;
    }

    natcasesort($results);

    foreach($results as $result) {
      ?>
      <a href="<?php echo $result; ?>" data-fancybox="gallery" style="background-image: url(<?php echo $result; ?>)"></a>
      <?php
    }
    ?>
  </div>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css"/>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>

<script>
  // Header on scroll
  const btbob = new IntersectionObserver(function(btbtarget) {
    if (btbtarget[0].isIntersecting) {
      document.body.classList.remove('scrolling');
    } else {
      document.body.classList.add('scrolling');
    }
  }, { threshold: 0.90 });
  btbob.observe(document.getElementById("btb-hero"));

  Fancybox.bind("[data-fancybox]", {});
</script>

<?php $shin = "legacy"; include "footer.php"; ?>