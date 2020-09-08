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
      This year only! Our much-loved, annual Beyond the Blues event transforms into a weeklong campaign to support mental health and suicide prevention. Every year donor contributions to Beyond the Blues provide a significant amount of funding for our work&mdash;including the grants we make to organizations in Southeastern Wisconsin and beyond.<br>
      <br>

      Help ramp up our efforts in a year where mental health concerns are rising! Click Donate to make a donation of any size or to become a Blues Backer or Campaign Sponsor.
    </div> <!-- /.header-right -->
  </div> <!-- /.site-width -->
</div> <!-- /.btb-banner -->

<div class="footer-call btb-thanks" id="sponsors">
  <!-- <div class="footer-arrow"><div class="footer-arrow-mask"></div></div> -->
  <div class="site-width">
    <h1>INTERESTED IN BEING A SPONSOR OF 2020 BEYOND THE BLUES?<br><span>CONTACT KRIS RICK at (414) 477-9959</span></h1>

    <h2>2020 SPONSORS TO DATE</h2>

    <div class="one-third">
      <h3>Sapphire Level - $20,000</h3>
      <ul>
        <li>Colony Brands, Inc.</li>
        <li>Meg &amp; Libby Kasch</li>
        <li>Billie Kubly</li>
      </ul>

<!--       <h3>Aqua Level - $10,000</h3>
      <ul>
        <li>William &amp; Sandy Heitz Family Foundation</li>
      </ul> -->

      <h3>Teal Level - $5,000</h3>
      <ul>
        <li>Elaine Burke</li>
        <li>William &amp; Sandy Heitz Family Foundation</li>
        <li>Sandy & Dennis Kuester</li>
        <li>Michael J. Schmitz</li>
      </ul>

      <h3>Turquoise Level - $2,500</h3>
      <ul>
        <li>Jean &amp; Charlie Gorham</li>
        <li>Julie &amp; Andy Gusho</li>
        <li>Hauske Family Foundation</li>
        <li>The Kellner Family</li>
        <li>Beth &amp; Will Kubly</li>
        <li>Milwaukee Admirals</li>
        <li>Betsie &amp; Patrick O'Brien</li>
        <li>Power Test</li>
        <li>Kate Schuett Wasmer &amp; John Wasmer</li>
        <li>Angela &amp; Ross Williams</li>
      </ul>

      <!-- <br>
      <h3 style="font-size: 200%; text-decoration: none;">Beyond the Blues 2018 Media Sponsor</h3>
      <img src="images/milwaukee-magazine.png" alt="Milwaukee Magazine" style="max-width: 80%;"> -->
    </div>

    <div class="one-third">
      <h3>Navy Level - $1,000</h3>
      <ul>
        <li>The Bourne Family</li>
        <li>Suzy &amp; John Brennan</li>
        <li>Jose Carlino Design</li>
        <li>Mary &amp; William Cullinan</li>
        <li>Sue & Russ Darrow</li>
        <li>Dean Fitzgerald</li>
        <li>Godfrey &amp; Kahn, S.C.</li>
        <li>Ann M. Goris</li>
        <li>Thomas Gould</li>
        <li>Patty &amp; Mike Grebe</li>
        <li>Ann &amp; Jon Hammes</li>
        <li>In loving memory of Debbie Thom &mdash; Susie Hawkins</li>
        <li>Kathy &amp; Al Hentzen</li>
        <li>Susie &amp; Lee Jennings</li>
        <li>Laura &amp; Pat Koppa</li>
        <li>Mary Ann &amp; Charles La Bahn</li>
        <li>Mary Lillydahl</li>
        <li>Anne Luber</li>
        <li>The Naegele Family</li>
        <li>Peggy &amp; Ned Purtell</li>
        <li>Peggy &amp; Bob Schuemann</li>
        <li>Nancy &amp; Greg Smith</li>
        <li>Julianne &amp; Stephen Spadafora</li>
        <li>Mary &amp; Chris Tornehl</li>
        <li>Debbie & Camp Van Dyke</li>
        <li>Abby & Scott Williams</li>
      </ul>
    </div>

    <div class="one-third">
      <h3>Denim Level - $500</h3>
      <ul>
        <li>Ace Worldwide Elite Relocation Services/Steinergroup</li>
        <li>Linda &amp; John Awe</li>
        <li>Deanna Braeger</li>
        <li>Maripat &amp; Tom Dalum</li>
        <li>Christiane Endres</li>
        <li>Susie Gebhardt</li>
        <li>Ellen &amp; Richard Glaisner</li>
        <li>Marilyn &amp; William Haker</li>
        <li>Andy Jaekels</li>
        <li>Diane &amp; Bob Jenkins</li>
        <li>Evie Kelly</li>
        <li>Linda &amp; John Mellowes</li>
        <li>Linda &amp; Jeff Perrigo</li>
        <li>Mary &amp; John Rickmeier</li>
        <li>Jen &amp; Todd Schoon</li>
        <li>Jane &amp; Johan Segerdahl</li>
        <li>Barbie Sullivan</li>
        <li>Kathryn Szeflinski</li>
        <li>Jennifer &amp; Joseph Teglia</li>
        <li>Betsy Trimble &amp; Family</li>
        <li>Laura &amp; Scott Vuchetich</li>
        <li>Sarah &amp; Michael Weiss</li>
        <li>Carol K. Wythes</li>
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