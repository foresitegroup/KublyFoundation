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
      Save the date for Beyond the Blues 2021 &mdash; LIVE at Discovery World Pier Wisconsin Pavilion on Friday, September 10th! See you there!
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
    <h1>If you would like information about sponsoring Beyond the Blues 2021, please contact Kris Rick at 414-477-9959</h1>

    <h2>BEYOND THE BLUES 2020 SPONSORS</h2>

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
        <li>Kathryn M. Burke</li>
        <li>William & Sandy Heitz Family Foundation</li>
        <li>Sandy & Dennis Kuester</li>
        <li>Rite Hite Foundation</li>
        <li>Michael J. Schmitz</li>
      </ul>

      <h3>Turquoise Level - $2,500</h3>
      <ul>
          <li>Jean & Charlie Gorham</li>
          <li>Julie & Andy Gusho</li>
          <li>Hauske Family Foundation</li>
          <li>The Kellner Family</li>
          <li>Dr. Rosa Kim & Dr. Matthew Kleban</li>
          <li>Sally & Chip Kubly</li>
          <li>Beth & Will Kubly</li>
          <li>Milwaukee Admirals</li>
          <li>Betsie & Patrick O'Brien</li>
          <li>Catherine & Bill Perez</li>
          <li>Power Test</li>
          <li>Rogers Behavioral Health</li>
          <li>Schwanke-Kasten Jewelers</li>
          <li>Kate Schuett Wasmer & John Wasmer</li>
          <li>Angela & Ross Williams</li>
      </ul>

      <!-- <br>
      <h3 style="font-size: 200%; text-decoration: none;">Beyond the Blues 2018 Media Sponsor</h3>
      <img src="images/milwaukee-magazine.png" alt="Milwaukee Magazine" style="max-width: 80%;"> -->
    </div>

    <div class="one-third">
      <h3>Navy Level - $1,000</h3>
      <ul>
        <li>Lisa & Souheil Badran</li>
        <li>Baird</li>
        <li>The Bourne Family</li>
        <li>Suzy & John Brennan</li>
        <li>Kathleen & Jim Caragher</li>
        <li>Jose Carlino Design</li>
        <li>Mary & William Cullinan</li>
        <li>David Michael Darrow Memorial Fund at the Greater Milwaukee Foundation</li>
        <li>Sue & Russ Darrow</li>
        <li>Executive Benefits Network -- David Fritz</li>
        <li>Dean Fitzgerald</li>
        <li>Katie Frommelt in memory of Garrett Kelley</li>
        <li>Godfrey & Kahn, S.C.</li>
        <li>Ann M. Goris</li>
        <li>Thomas Gould</li>
        <li>Patty & Mike Grebe</li>
        <li>Marilyn & William Haker</li>
        <li>Ann & Jon Hammes</li>
        <li>Jean & Thomas Harbeck Family Foundation</li>
        <li>Susie Hawkins in memory of Debbie Thom</li>
        <li>Kathy & Al Hentzen</li>
        <li>Susie & Lee Jennings</li>
        <li>Susan Kasten</li>
        <li>Laura & Pat Koppa</li>
        <li>Mary Ann & Charles La Bahn</li>
        <li>Mary Lillydahl</li>
        <li>Anne Luber</li>
        <li>Linda & Curt Lundeen</li>
        <li>Keith and Dee Miller Fund</li>
        <li>Shelley & Mike Muranyi</li>
        <li>The Naegele Family</li>
        <li>Candy & Bruce Pindyck</li>
        <li>Peggy & Ned Purtell</li>
        <li>Peggy & Bob Schuemann</li>
        <li>Nancy & Greg Smith</li>
        <li>Julianne & Stephen Spadafora</li>
        <li>Mary & Chris Tornehl</li>
        <li>Julia Uihlein in honor of Chucker Aring</li>
        <li>Debbie & Camp Van Dyke</li>
        <li>Abby & Scott Williams</li>
        <li>Jessica Wirtz & Lily Kubly</li>
        <li>Diane & Ed Zore</li>
      </ul>
    </div>

    <div class="one-third">
      <h3>Denim Level - $500</h3>
      <ul>
        <li>Ace Worldwide Elite Relocation Services/Steinergroup</li>
        <li>Amy Argall in memory of Dan Argall</li>
        <li>Linda & John Awe</li>
        <li>Deanna Braeger</li>
        <li>Geralyn & Bill Cannon</li>
        <li>Maripat & Tom Dalum</li>
        <li>Christiane Endres</li>
        <li>Mr. & Mrs. Gary Fandek</li>
        <li>Anna Claire & George Gaspar</li>
        <li>Susie Gebhardt</li>
        <li>Ellen & Richard Glaisner</li>
        <li>Cynthia & Jeff Harris</li>
        <li>Ann Homstad</li>
        <li>Andy Jaekels</li>
        <li>Diane & Bob Jenkins</li>
        <li>Evie Kelly</li>
        <li>Maryglen and Robert Kieckhefer</li>
        <li>Lori Kilian in memory of Debbie Thom</li>
        <li>The Lanigan Family</li>
        <li>Mitchell Lindstrom in memory of Joey Van Susteren</li>
        <li>Nancy Lucas</li>
        <li>Mr. Peter Mahler, Sotheby's</li>
        <li>Linda & John Mellowes</li>
        <li>Susan & Bob Mikulay</li>
        <li>Barbara & Rik Moe</li>
        <li>Maribeth & Bill Naleid</li>
        <li>Linda & Jeff Perrigo</li>
        <li>Randy Perry</li>
        <li>Constance & Reik Read</li>
        <li>Kristin & Kerry Rick</li>
        <li>Kris & Robert Rick</li>
        <li>Mary & John Rickmeier</li>
        <li>Elizabeth Robbins</li>
        <li>Julie & Mason Ross</li>
        <li>Jen & Todd Schoon</li>
        <li>Jane & Johan Segerdahl</li>
        <li>Barbie Sullivan</li>
        <li>Kathryn Szeflinski</li>
        <li>Jennifer & Joseph Teglia</li>
        <li>Susan & Stacy Terris</li>
        <li>Betsy Trimble & Family</li>
        <li>Laura & Scott Vuchetich</li>
        <li>Brooke & Robert Walker</li>
        <li>Mary & Willard Walker</li>
        <li>Sarah & Michael Weiss</li>
        <li>Lindsay & Steve Wojciechowski</li>
        <li>Devin Wolf</li>
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