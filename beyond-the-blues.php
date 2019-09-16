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
      <span class="btb-blue"><div>THE</div> BLUES</span> <?php echo date("Y", $GLOBALS['btbdate']); ?>
    </div>

    <div class="header-right">
      <!-- Save the Date<br>
      Beyond the Blues 2019<br> -->

      <?php echo strtoupper(date("l<b\\r>F j<\s\up>S</\s\up> Y", $GLOBALS['btbdate'])); ?><br>
      <div>
        6:30pm - 11:00pm<br>
        Short program at 8:30<br>
        <br>
        DISCOVERY WORLD PIER WISCONSIN PAVILION<br>
        <br>
        500 N. Harbor Drive, Milwaukee, WI
      </div>
      <br>

      <!-- <a href="#btb-video">BTB 2016</a> -->
      <!-- <a href="tickets.php" class="tickets">PURCHASE TICKETS</a><br> -->
      <small style="font-size: 60%;">Tickets Available at the Door</small><br>

      <i class="fa fa-long-arrow-down" aria-hidden="true"></i><br>
    </div>

    <div class="btb-banner-spacer"></div>

    <div class="left">
      <div class="btb-video" id="btb-video" style="background-image: url(https://img.youtube.com/vi/FLu97T4y6Jk/maxresdefault.jpg);">
        <script src="inc/swipebox/jquery.swipebox.min.js"></script>
        <link rel="stylesheet" href="inc/swipebox/swipebox.css">
        <script type="text/javascript">
          $(document).ready(function() { $('.swipebox').swipebox({autoplayVideos: true, hideBarsDelay : 0}); });
        </script>
        <a href="https://www.youtube.com/watch?v=FLu97T4y6Jk" class="swipebox"><i class="fa fa-play" aria-hidden="true"></i></a>
      </div><br>
      <br>

      <!-- <h3>A SPECIAL THANK YOU TO:</h3>
      The Turner Hall Staff, Saz's Catering, Canopies Rentals, Keehn's Valet Service, the Rhythm Kings, the Dan Dance Trio and Jon Edquist for their Creativity, Excellent Service and GOOD TIMES!<br> -->

      <!-- <i class="fa fa-long-arrow-down" aria-hidden="true"></i> -->
    </div>

    <div class="right">
      <!-- <h3>THE CHARLES E. KUBLY FOUNDATION WOULD LIKE TO THANK EVERYONE WHO SPONSORED, ATTENDED, VOLUNTEERED OR MADE A DONATION TO BEYOND THE BLUES 2016.</h3>

      It was a great success again this year and your support will allow us to continue to fund important mental health projects within SE Wisconsin. -->

      <!-- <h4>FEATURING THE DAN DANCE TRIO AND THE KRIS CROW BAND</h4>
      <br>

      <h4>CATERED BY BARTOLOTTA</h4>
      <br>

      Cash Bar<br>
      Complimentary Valet Parking<br>
      Tickets sold at the door - $80 per person -->

      <h4>Check out a video reflection of our 15th year</h4><br>

      We are blown away every year at the amount of support we receive for the Charles E. Kubly Foundation. Thank you to everyone who made this year as memorable as ever! We could not do it without you!
    </div>
  </div>
</div>

<div class="btb-gallery" style="position: relative;">
  <!-- <div class="footer-arrow"><div class="footer-arrow-mask purple"></div></div>x -->
  <div class="site-width">
    <?php
    $main_dir = "images/galleries/btb2018";

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
    Dennis Felber Photography
  </div>
</div>
<!--
<div class="site-width btb-newsletter" id="newsletter">
  <script type="text/javascript">
    $(document).ready(function() {
      var form = $('#newsletter-form');
      var formMessages = $('#newsletter-form-messages');
      $(form).submit(function(event) {
        event.preventDefault();

        function formValidation() {
          if ($('#email').val() === '') { alert('Email address required.'); $('#email').focus(); return false; }
          return true;
        }

        if (formValidation()) {
          var formData = $(form).serialize();
          formData += '&src=ajax';

          $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
          })
          .done(function(response) {
            $(formMessages).html(response);
            $('#email').val('');
          })
          .fail(function(data) {
            if (data.responseText !== '') {
              $(formMessages).html(data.responseText);
            } else {
              $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
          });
        }
      });
    });
  </script>

  <?php
  // Settings for randomizing form field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "KublyNewsletterForm";
  ?>

  <noscript>
  <?php
  $nlfeedback = (!empty($_SESSION['nlfeedback'])) ? $_SESSION['nlfeedback'] : "";
  unset($_SESSION['nlfeedback']);
  ?>
  </noscript>

  <h3>NOTIFY ME WHEN TICKETS BECOME AVAILABLE.</h3>

  Sign me up for Beyond the Blues updates and the Charles E. Kubly Foundation newsletter.<br>

  <div id="newsletter-form-messages"><?php echo $nlfeedback; ?></div>

  <form action="form-newsletter.php" method="POST" id="newsletter-form">
    <div>
      <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email Address">
      <input type="submit" name="submit" value="SIGN UP">

      <input type="text" name="confirmationCAP" style="display: none;">
      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
    </div>
  </form>
</div>
-->

<div class="footer-call btb-thanks" id="sponsors">
  <div class="footer-arrow"><div class="footer-arrow-mask"></div></div>
  <div class="site-width">
    <h1>INTERESTED IN BEING A SPONSOR OF 2019 BEYOND THE BLUES?<br><span>CONTACT KRIS RICK at (414) 477-9959</span><!--<a href="pdf/Beyond_the_Blues_Sponsorship_2018.pdf">LEARN MORE</a>--></h1>

    <h2>2019 SPONSORS TO DATE</h2>

    <div class="one-third">
      <h3>Sapphire Level - $20,000</h3>
      <ul>
        <li>Colony Brands, Inc.</li>
        <li>Meg Fetherston Kasch &amp; Libby Kasch</li>
        <li>Billie Kubly</li>
      </ul>

      <h3>Aqua Level - $10,000</h3>
      <ul>
        <li>William &amp; Sandy Heitz Family Foundation</li>
      </ul>

      <h3>Teal Level - $5,000</h3>
      <ul>
        <li>National Center for Housing Management Charities</li>
        <li>Michael Schmitz</li>
      </ul>

      <h3>Turquoise Level - $2,500</h3>
      <ul>
        <li>Baird</li>
        <li>Children's Hospital of Wisconsin</li>
        <li>Crescent Grove Advisors</li>
        <li>Executive Benefits Network</li>
        <li>Charlie &amp; Jean Gorham</li>
        <li>Hauske Family Foundation</li>
        <li>Sally &amp; Chip Kubly</li>
        <li>Will &amp; Beth Kubly</li>
        <li>Anne Luber</li>
        <li>College of Health Sciences at Marquette University</li>
        <li>Medical College of Wisconsin Department of Psychiatry &amp; Behavioral Medicine</li>
        <li>Milwaukee Admirals</li>
        <li>Rogers Behavioral Health</li>
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
        <li>Susy &amp; John Brennan</li>
        <li>Jose Carlino Design</li>
        <li>Continental Properties, Inc.</li>
        <li>State Senator Alberta Darling</li>
        <li>Susie Gebhardt</li>
        <li>Godfrey &amp; Khan, S.C.</li>
        <li>Ann Goris</li>
        <li>Patty &amp; Mike Grebe</li>
        <li>Ann &amp; Jon Hammes</li>
        <li>Susan Hawkins &mdash; in memory of Debbie Thom
        <li>Lee &amp; Susie Jennings</li>
        <li>Debbie &amp; Mike Judge</li>
        <li>Mary &amp; Ted Kellner</li>
        <li>Mary Ann &amp; Charles P. LaBahn</li>
        <li>Tom &amp; Elizabeth Long</li>
        <li>Linda &amp; John Mellowes</li>
        <li>Candy &amp; Bruce Pindyck</li>
        <li>Peggy &amp; Ned Purtell</li>
        <li>Nancy &amp; Greg Smith</li>
        <li>Julie &amp; Steve Spadafora</li>
        <li>Mary &amp; Chris Tornehl</li>
        <li>Kathleen &amp; Frank Thometz</li>
        <li>Mary &amp; Chris Tornehl</li>
        <li>Julie Uihlein</li>
        <li>Diane &amp; Ed Zore</li>
      </ul>
    </div>

    <div class="one-third">
      <h3>Denim Level - $500</h3>
      <ul>
        <li>Ace Worldwide Elite Relocation Services/Steiner Group</li>
        <li>Al Hurvis/ADAMM Education Foundation</li>
        <li>Aversa - Bayshore Town Center</li>
        <li>Joan Bell</li>
        <li>Ginny Bolger</li>
        <li>Deanna Braeger</li>
        <li>William &amp; Marilyn Haker</li>
        <li>Jenny &amp; Bob Hillis</li>
        <li>Ann Homstad</li>
        <li>Richard &amp; Carolyn Jacobus
        <li>Phil &amp; Kiki Jennings</li>
        <li>Evelyn Kelly</li>
        <li>Lori Kilian</li>
        <li>Evelyn Kelly</li>
        <li>Laura &amp; Pat Koppa</li>
        <li>Mary S. Lillydahl</li>
        <li>Henrik &amp; Barbara Moe</li>
        <li>The Naegele Family</li>
        <li>Mitchell &amp; Jennifer Prosk</li>
        <li>Kris &amp; Robert Rick</li>
        <li>The Samaritan Family Wellness Foundation</li>
        <li>Jen &amp; Todd Schoon</li>
        <li>Jane &amp; Johan Segerdahl</li>
        <li>Barbara Sullivan</li>
        <li>Betsy Trimble</li>
        <li>Debbie &amp; Camp Van Dyke</li>
        <li>Brooke &amp; Bob Walker</li>
        <li>Abby &amp; Scott Williams</li>
      </ul>

<!--       <div class="btb-sponsorship">
        INTERESTED IN SPONSORSHIP?<br>
        <a href="pdf/Beyond_the_Blues_Sponsorship_2018.pdf">LEARN MORE</a>
      </div> -->
    </div>
  </div>
</div>

<?php include "footer.php"; ?>