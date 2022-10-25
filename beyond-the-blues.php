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
      <br><br>

      20th Anniversary Beyond the Blues - 2023<br>
      <br>

      Save the Date

      <!-- Discovery World Pier Wisconsin Pavilion<br>
      500 N. Harbor Drive<br>
      Milwaukee, WI 53202<br> -->
      <br>

      <h2 style="margin: 0.5em 0 0; text-transform: uppercase;"><?php echo date("l, F jS", $GLOBALS['btbdate']); ?><!-- <br>6:30PM --></h2>
      <br>

      <!-- Tickets may be purchased at the door -->
      <!-- <a href="tickets.php" class="button">PURCHASE TICKETS</a> --><br>
      <br>

      To sponsor Beyond the Blues, contact Kris Rick @ 414-477-9959
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

    <h2>BEYOND THE BLUES 2022 SPONSORS</h2>

    <div class="one-third">
      <h3>Sapphire Level - $20,000</h3>
      <ul>
        <li>Colony Brands</li>
        <li>Meg Fetherston Kasch & Libby Kasch</li>
        <li>Billie Kubly</li>
      </ul>

      <h3>Aqua Level - $10,000</h3>
      <ul>
        <li>Julie & David Uihlein - in memory of Chucker Aring</li>
      </ul>

      <h3>Teal Level - $5,000</h3>
      <ul>
        <li>Hauske Family Foundation</li>
        <li>William & Sandy Heitz Family Foundation</li>
        <li>Sandy & Dennis Kuester</li>
        <li>Cathy & Paul Luber </li>
        <li>Rogers Behavioral Health</li>
        <li>Andrea & Jim Schloemer/Sue & Dan Minahan</li>
        <li>Michael J. Schmitz</li>
        <li>Kate & John Wasmer</li>
      </ul>

      <h3>Turquoise Level - $2,500</h3>
      <ul>
        <li>Suzy & John Brennan</li>
        <li>Children's Wisconsin</li>
        <li>Crescent Grove Advisors</li>
        <li>Executive Benefits Network -- Molly & David Fritz</li>
        <li>Godfrey & Kahn, S.C.</li>
        <li>Cookie Goris</li>
        <li>Thomas J. Gould</li>
        <li>Sally & Chip Kubly</li>
        <li>Beth & Will Kubly</li>
        <li>Anne Luber & Family</li>
        <li>Marquette University College of Health Sciences</li>
        <li>Milwaukee Admirals/ANON Charitable Trust</li>
        <li>Betsie & Patrick O'Brien</li>
        <li>Catherine & Bill Perez</li>
        <li>Power Test</li>
        <li>The Peggy & Ned Purtell Family</li>
        <li>Kelly Sherwood Family Fund</li>
        <li>Angela & Ross Williams</li>
      </ul>

      <!-- <br>
      <h3 style="font-size: 200%; text-decoration: none;">Beyond the Blues 2018 Media Sponsor</h3>
      <img src="images/milwaukee-magazine.png" alt="Milwaukee Magazine" style="max-width: 80%;"> -->
    </div>

    <div class="one-third">
      <h3>Navy Level - $1,000</h3>
      <ul>
        <li>Kerry & John Bolger</li>
        <li>The Bourne Family</li>
        <li>Kathleen & Jim Caragher</li>
        <li>Jose Carlino Design</li>
        <li>Dr. William Cullinan</li>
        <li>Thayre Faust & Friends in memory of Sam Vertelka</li>
        <li>Anne & Dean Fitzgerald</li>
        <li>Katie Frommelt & Friends in memory of Garrett Kelley</li>
        <li>Pamela & Tom Goris </li>
        <li>Hammes Family Foundation</li>
        <li>Kathy & Al Hentzen</li>
        <li>Susie & Lee Jennings</li>
        <li>Lily Kubly & Friends</li>
        <li>Susan Kasten</li>
        <li>Garry Kelley in memory of Garrett Kelley</li>
        <li>Kopmeier Family Fund</li>
        <li>Laura & Pat Koppa</li>
        <li>Mary Ann & Charles La Bahn</li>
        <li>Mary Lillydahl</li>
        <li>Curt & Linda Lundeen</li>
        <li>Katie & Mark Mohr</li>
        <li>Candy & Bruce Pindyck</li>
        <li>Jennifer & Mitchell Prosk</li>
        <li>Pamela & Robert Reily</li>
        <li>Mary & John Rickmeier</li>
        <li>Nancy & Greg Smith</li>
        <li>Julie & Steve Spadafora</li>
        <li>Kathleen & Frank Thometz</li>
        <li>Mary & Chris Tornehl</li>
        <li>Debbie & Camp Van Dyke</li>
        <li>Brooke & Robert Walker</li>
        <li>Mary & Willard Walker</li>
        <li>Carol K. Wythes</li>
        <li>Diane & Ed Zore</li>
      </ul>
    </div>

    <div class="one-third">
      <h3>Denim Level - $500</h3>
      <ul>
        <li>Ace Worldwide Elite Relocation Services/Steinergroup</li>
        <li>Linda & Jack Anick</li>
        <li>Amy Argall & Family</li>
        <li>Bank Five Nine</li>
        <li>Joan Bell</li>
        <li>Sally & Peter Blommer</li>
        <li>Mary & Jeff Brown</li>
        <li>Elizabeth and Andrew Bruce</li>
        <li>Burke Candy & Ingredients, Inc.</li>
        <li>Ginny Bolger</li>
        <li>Deanna B. Braeger</li>
        <li>Gretchen & William Burns</li>
        <li>Kristine H. Cleary & Peter L. Coffey</li>
        <li>Senator Alberta Darling</li>
        <li>Ellen & Richard Glaisner</li>
        <li>Mrs. Marilyn Haker</li>
        <li>Sharon & Don Hansen</li>
        <li>Catherine & Phillip Heston</li>
        <li>Diane & Bob Jenkins</li>
        <li>Jayne Jordan</li>
        <li>Evelyn Kelly</li>
        <li>Julie & John Kennedy</li>
        <li>Lori Kilian in memory of Debbie Thom</li>
        <li>Rosa Kim</li>
        <li>Michael Klinker</li>
        <li>Autumn & David Kwasny</li>
        <li>The Lanigan Family</li>
        <li>LFF Foundation</li>
        <li>Margaret & Will Lidstone</li>
        <li>Peter L. Mahler</li>
        <li>Debbie & John McGregor</li>
        <li>Abby Millman & Friends in memory of Debbie Thom</li>
        <li>Milwaukee Institute of Art & Design</li>
        <li>Barbara & Henrik Moe</li>
        <li>Newport Healthcare</li>
        <li>Linda & Jeffrey Perrigo</li>
        <li>Kristin Rick & Friends</li>
        <li>Kris & Robert Rick</li>
        <li>Lisa & Robbie Robbins</li>
        <li>Julie & Mason Ross</li>
        <li>Chloe Salvino & Friends in memory of Debbie Thom</li>
        <li>Jen & Todd Schoon</li>
        <li>Patty & Peter Schuyler</li>
        <li>Stalle Realty Group</li>
        <li>Joe Ann Stein</li>
        <li>Barbie Sullivan</li>
        <li>Betsy Trimble & Family</li>
        <li>Ellen & Bob Venable</li>
        <li>Barb & Bob Whealon</li>
        <li>Abby & Scott Williams</li>
        <li>Sunny & Sandy Williams</li>
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
    <h2 style="margin-top: 0; color: #FFFFFF; text-transform: uppercase;">Beyond the Blues 2022</h2>
    <?php
    $main_dir = "images/galleries/btb2022";

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