<?php
$PageTitle = "Beyond the Blues";
$Keywords = "";
$Description = "";
$PageMod = "btb";

include "header.php";
?>

<div class="btb-banner">
  <div class="site-width">
    <div class="header-left">
      <span class="btb-green">B</span><span class="btb-yellow">E</span><span class="btb-orange">Y</span><span class="btb-red">O</span><span class="btb-pink">N</span><span class="btb-purple">D</span>
      <span class="btb-blue"><div>THE</div> BLUES</span>
      <!-- <div class="year"><?php //echo date("Y", $GLOBALS['btbdate']); ?></div> -->

      <a href="donate.php" class="button">DONATE</a>
    </div> <!-- /.header-left -->

    <div class="header-right">
      <h1>Save the Date</h1>

      <h2 style="margin: 0.5em 0 0; text-transform: uppercase;"><?php echo date("F j, Y", $GLOBALS['btbdate']); ?></h2>
      <br>

       Discovery World Pavilion at Pier Wisconsin, Milwaukee<br>
       Tickets on sale August 1<sup>ST</sup><br>
       <br>

       Sponsorships available! Contact Kris Rick at 414-477-9959 or <a href="mailto:krick@cekf.org">krick@cekf.org</a>.
    </div> <!-- /.header-right -->
  </div> <!-- /.site-width -->
</div> <!-- /.btb-banner -->

<!-- <div id="btb-video-banner">
  <div class="site-width">
    <div class="text">
      A message from <h3>John McGivern &amp; Billie Kubly</h3>
    </div>

    <div class="btb-video" id="btb-video">-->
      <script src="inc/swipebox/jquery.swipebox.min.js"></script>
      <link rel="stylesheet" href="inc/swipebox/swipebox.css">
      <script type="text/javascript">
        $(document).ready(function() { $('.swipebox').swipebox({autoplayVideos: true, hideBarsDelay : 0}); });
      </script>
      <!--<a href="https://www.youtube.com/watch?v=QzhJ4obhcg4&rel=0" class="swipebox"><i class="fa fa-play" aria-hidden="true"></i></a>
    </div>
  </div>
</div> -->

<div class="footer-call btb-thanks" id="sponsors">
  <!-- <div class="footer-arrow"><div class="footer-arrow-mask"></div></div> -->
  <div class="site-width">
    <!-- <h1>If you would like information about sponsoring Beyond the Blues 2021, please contact Kris Rick at<br>414-477-9959 or<br><a href="https://charlesekublyfoundation.harnessapp.com/wv2/donate?checkout=1857&campaign_id=4517">visit our donation page</a></h1> -->

    <h2>BEYOND THE BLUES 2025 SPONSORS TO DATE</h2>

    <?php
    include_once "inc/dbconfig.php";

    $stmt = $mysqli->prepare("SELECT * FROM sponsors WHERE id = 1");
    $stmt->execute();
    $sponsors = $stmt->get_result();
    $sponsor = $sponsors->fetch_assoc();
    ?>

    <div class="one-third">
      <?php if ($sponsor['sapphire'] != "") { ?>
      <h3>Sapphire Level - $20,000</h3>
      <ul>
        <?php echo '<li>'.str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['sapphire'],"\n\r")).'</li>'."\n"; ?>
      </ul>
      <?php } ?>

      <?php if ($sponsor['aqua'] != "") { ?>
      <h3>Aqua Level - $10,000</h3>
      <ul>
        <?php echo '<li>'.str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['aqua'],"\n\r")).'</li>'."\n"; ?>
      </ul>
      <?php } ?>

      <?php if ($sponsor['teal'] != "") { ?>
      <h3>Teal Level - $5,000</h3>
      <ul>
        <?php echo '<li>'.str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['teal'],"\n\r")).'</li>'."\n"; ?>
      </ul>
      <?php } ?>

      <?php if ($sponsor['turquoise'] != "") { ?>
      <h3>Turquoise Level - $2,500</h3>
      <ul>
        <?php echo '<li>'.str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['turquoise'],"\n\r")).'</li>'."\n"; ?>
      </ul>
      <?php } ?>
    </div>

    <?php if ($sponsor['navy'] != "") { ?>
    <div class="one-third">
      <h3>Navy Level - $1,000</h3>
      <ul>
        <?php echo '<li>'.str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['navy'],"\n\r")).'</li>'."\n"; ?>
      </ul>
    </div>
    <?php } ?>

    <?php if ($sponsor['denim'] != "") { ?>
    <div class="one-third">
      <h3>Denim Level - $500</h3>
      <ul>
        <?php echo '<li>'.str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($sponsor['denim'],"\n\r")).'</li>'."\n"; ?>
      </ul>
    </div>
    <?php } ?>

    <?php
    $sponsors->close();
    $stmt->close();
    ?>
  </div>
</div>

<div class="btb-gallery" style="position: relative;">
  <!-- <div class="footer-arrow"><div class="footer-arrow-mask purple"></div></div> -->
  <div class="site-width">
    <h2 style="margin-top: 0; color: #FFFFFF; text-transform: uppercase;">Beyond the Blues 2024</h2>
    <?php
    $main_dir = "images/galleries/btb2024";

    $files = scandir($main_dir);

    foreach($files as $file) {
      if ($file == "." || $file == "..") continue;
      $results[] = $main_dir . "/" . $file;
    }

    natcasesort($results);

    foreach($results as $result) {
      ?>
      <a href="<?php echo $result; ?>" class="swipebox" style="background-image: url(<?php echo $result; ?>)"></a>
      <?php
    }
    ?>
  </div>
</div>

<?php $shin = "legacy"; include "footer.php"; ?>