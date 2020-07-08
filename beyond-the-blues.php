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
      <h1 style="margin: 0; transform: translateY(-0.5em);">Save the Date</h1>

      <?php echo strtoupper(date("l<b\\r>F j<\s\up>S</\s\up> Y", $GLOBALS['btbdate'])); ?><br>
      <div>
        6:30pm - 11:00pm<br>
        <br>
        DISCOVERY WORLD PIER WISCONSIN PAVILION<br>
        <br>
        500 N. Harbor Drive, Milwaukee, WI
      </div>
      <br>

      <!-- <a href="#btb-video">BTB 2016</a> -->
      <!-- <a href="tickets.php" class="tickets">PURCHASE TICKETS</a><br> -->
      <!-- <small style="font-size: 60%;">Tickets Available at the Door</small><br> -->

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
    <h1>INTERESTED IN BEING A SPONSOR OF 2020 BEYOND THE BLUES?<br><span>CONTACT KRIS RICK at (414) 477-9959</span></h1>

    <h2>2020 SPONSORS TO DATE</h2>

    <div class="one-third">
      <h3>Sapphire Level - $20,000</h3>
      <ul>
        <li>Colony Brands, Inc.</li>
        <li>Meg &amp; Libby Kasch</li>
      </ul>

<!--       <h3>Aqua Level - $10,000</h3>
      <ul>
        <li>William &amp; Sandy Heitz Family Foundation</li>
      </ul> -->

      <h3>Teal Level - $5,000</h3>
      <ul>
        <li>William &amp; Sandy Heitz Family Foundation</li>
        <li>Michael J. Schmitz</li>
      </ul>

      <h3>Turquoise Level - $2,500</h3>
      <ul>
        <li>Julie &amp; Andy Gusho</li>
        <li>Hauske Family Foundation</li>
        <li>The Kellner Family</li>
        <li>Milwaukee Admirals</li>
        <li>Betsie &amp; Patrick O'Brien</li>
        <li>Kate Schuett Wasmer &amp; John Wasmer</li>
      </ul>

      <!-- <br>
      <h3 style="font-size: 200%; text-decoration: none;">Beyond the Blues 2018 Media Sponsor</h3>
      <img src="images/milwaukee-magazine.png" alt="Milwaukee Magazine" style="max-width: 80%;"> -->
    </div>

    <div class="one-third">
      <h3>Navy Level - $1,000</h3>
      <ul>
        <li>The Bourne Family</li>
        <li>Jose Carlino Design</li>
        <li>Mary &amp; William Cullinan</li>
        <li>Dean Fitzgerald</li>
        <li>Godfrey &amp; Kahn, S.C.</li>
        <li>Ann M. Goris</li>
        <li>Patty &amp; Mike Grebe</li>
        <li>Ann &amp; Jon Hammes</li>
        <li>In loving memory of Debbie Thom &mdash; Susie Hawkins</li>
        <li>Susie &amp; Lee Jennings</li>
        <li>Laura &amp; Pat Koppa</li>
        <li>Mary Ann &amp; Charles La Bahn</li>
        <li>The Naegele Family</li>
        <li>Nancy &amp; Greg Smith</li>
        <li>Julianne &amp; Stephen Spadafora</li>
      </ul>
    </div>

    <div class="one-third">
      <h3>Denim Level - $500</h3>
      <ul>
        <li>Ace Worldwide Elite Relocation Services/Steinergroup</li>
        <li>Christiane Endres</li>
        <li>Susie Gebhardt</li>
        <li>Ellen &amp; Richard Glaisner</li>
        <li>Diane &amp; Bob Jenkins</li>
        <li>Mary Lillydahl</li>
        <li>Linda &amp; John Mellowes</li>
        <li>Jen &amp; Todd Schoon</li>
        <li>Jane &amp; Johan Segerdahl</li>
        <li>Betsy Trimble &amp; Family</li>
        <li>Debbie &amp; Camp Van Dyke</li>
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