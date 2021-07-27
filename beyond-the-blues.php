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
      <div class="year"><?php echo date("Y", $GLOBALS['btbdate']); ?></div>

      <a href="donate.php" class="button">DONATE</a>
    </div> <!-- /.header-left -->

    <div class="header-right">
      <br><br><br><br><br><br>
      Save the date for Beyond the Blues 2021 &mdash; LIVE at Discovery World Pier Wisconsin Pavilion on Friday, September 10th! See you there!<br>
      <br>

      <a href="tickets.php" class="button">TICKETS AVAILABLE NOW</a>
    </div> <!-- /.header-right -->
  </div> <!-- /.site-width -->
</div> <!-- /.btb-banner -->

<div id="btb-video-banner">
  <div class="site-width">
    <div class="text">
      A message from <h3>John McGivern &amp; Billie Kubly</h3>
    </div>

    <div class="btb-video" id="btb-video">
      <script src="inc/swipebox/jquery.swipebox.min.js"></script>
      <link rel="stylesheet" href="inc/swipebox/swipebox.css">
      <script type="text/javascript">
        $(document).ready(function() { $('.swipebox').swipebox({autoplayVideos: true, hideBarsDelay : 0}); });
      </script>
      <a href="https://www.youtube.com/watch?v=QzhJ4obhcg4&rel=0" class="swipebox"><i class="fa fa-play" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="footer-call btb-thanks" id="sponsors">
  <!-- <div class="footer-arrow"><div class="footer-arrow-mask"></div></div> -->
  <div class="site-width">
    <h1>If you would like information about sponsoring Beyond the Blues 2021, please contact Kris Rick at<br>414-477-9959 or<br><a href="https://charlesekublyfoundation.harnessapp.com/wv2/donate?checkout=1857&campaign_id=4517">visit our donation page</a></h1>

    <h2>BEYOND THE BLUES 2021 SPONSORS</h2>

    <div class="one-third">
      <h3>Sapphire Level - $20,000</h3>
      <ul>
        <li>Colony Brands</li>
        <li>Meg & Libby Kasch</li>
        <li>Billie Kubly</li>
      </ul>

      <h3>Aqua Level - $10,000</h3>
      <ul>
        <li>William &amp; Sandy Heitz Family Foundation</li>
        <li>Julie & David Uihlein</li>
      </ul>

      <h3>Teal Level - $5,000</h3>
      <ul>
        <li>Continental Properties Company, Inc.</li>
        <li>Sandy & Dennis Kuester</li>
        <li>Michael Schmitz</li>
        <li>Kate & John Wasmer</li>
      </ul>

      <h3>Turquoise Level - $2,500</h3>
      <ul>
        <li>Executive Benefits Network</li>
        <li>Hauske Family Foundation</li>
        <li>Kelben Foundation</li>
        <li>Beth & Will Kubly</li>
        <li>Sally & Chip Kubly</li>
        <li>Anne Luber</li>
        <li>Milwaukee Admirals</li>
        <li>Betsie & Patrick O'Brien</li>
        <li>Power Test, Inc.</li>
        <li>Peggy & Ned Purtell</li>
        <li>Rogers Behavioral Health</li>
      </ul>

      <!-- <br>
      <h3 style="font-size: 200%; text-decoration: none;">Beyond the Blues 2018 Media Sponsor</h3>
      <img src="images/milwaukee-magazine.png" alt="Milwaukee Magazine" style="max-width: 80%;"> -->
    </div>

    <div class="one-third">
      <h3>Navy Level - $1,000</h3>
      <ul>
        <li>The Bourne Family</li>
        <li>Kathleen & Jim Caragher</li>
        <li>Jose Carlino Design</li>
        <li>Children's Wisconsin</li>
        <li>Samantha Erickson & Friends</li>
        <li>Godfrey & Kahn, S.C.</li>
        <li>Ann & Jon Hammes</li>
        <li>Susie Hawkins in memory of Debbie Thom</li>
        <li>The Hutchinson Family</li>
        <li>Susie & Lee Jennings</li>
        <li>Susan Kasten</li>
        <li>Kopmeier Family Fund</li>
        <li>Laura & Pat Koppa</li>
        <li>Mary Ann & Charles La Bahn</li>
        <li>Mary Lillydahl</li>
        <li>Katie & Mark Mohr</li>
        <li>Mary & John Rickmeier</li>
        <li>Peggy & Bob Schuemann</li>
        <li>Nancy & Greg Smith</li>
        <li>Julianne & Stephen Spadafora</li>
        <li>Joy Tector</li>
        <li>Kathleen & Frank Thometz</li>
        <li>Mary & Chris Tornehl</li>
        <li>Jen & Jim Walker</li>
        <li>Brooke & Robert Walker</li>
        <li>Diane & Ed Zore</li>
      </ul>
    </div>

    <div class="one-third">
      <h3>Denim Level - $500</h3>
      <ul>
        <li>Ace Worldwide Elite Relocation Services/Steinergroup</li>
        <li>Amy L. Argall</li>
        <li>Bank Five Nine</li>
        <li>Christiane Endres</li>
        <li>Ellen & Richard Glaisner</li>
        <li>Evelyn Kelly</li>
        <li>Linda & Curt Lundeen</li>
        <li>Jennifer & Mitchell Prosk</li>
        <li>Kris & Robert Rick</li>
        <li>Jen & Todd Schoon</li>
        <li>Barbie Sullivan</li>
        <li>Susan & Stacy Terris</li>
        <li>Betsy Trimble & Family</li>
        <li>Abby & Scott Williams</li>
        <li>Amy & Devin Wolf</li>
      </ul>

<!--       <div class="btb-sponsorship">
        INTERESTED IN SPONSORSHIP?<br>
        <a href="pdf/Beyond_the_Blues_Sponsorship_2018.pdf">LEARN MORE</a>
      </div> -->
    </div>
  </div>
</div>

<div class="btb-gallery" style="position: relative;">
  <div class="footer-arrow"><div class="footer-arrow-mask purple"></div></div>
  <div class="site-width">
    <h2 style="margin-top: 0; color: #FFFFFF; text-transform: uppercase;">Beyond the Blues 2019</h2>
    <?php
    $main_dir = "images/galleries/btb2019";

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

<?php include "footer.php"; ?>