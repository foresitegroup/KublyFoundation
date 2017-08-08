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
      <span class="btb-blue"><div>THE</div> BLUES</span> 2017
    </div>

    <div class="header-right">
      SATURDAY<br>
      SEPTEMBER 16<sup>TH</sup> 2017<br>
      <div>
        6:30pm - 11:00pm<br>
        <br>
        AT DISCOVERY WORLD - PIER WISCONSIN<br>
        <br>
        500 N. Harbor Drive, Milwaukee, WI
      </div>
      <br>

      <!-- <a href="#btb-video">BTB 2016</a> -->
      <a href="tickets.php" class="tickets">BUY TICKETS</a><br>

      <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
    </div>

    <div class="btb-banner-spacer"></div>

    <div class="left">
      <div class="btb-video" id="btb-video">
        <script src="inc/swipebox/jquery.swipebox.min.js"></script>
        <link rel="stylesheet" href="inc/swipebox/swipebox.css">
        <script type="text/javascript">
          $(document).ready(function() { $('.swipebox').swipebox({autoplayVideos: true, hideBarsDelay : 0}); });
        </script>
        <a href="https://www.youtube.com/watch?v=jHhtyXikxb8" class="swipebox"><i class="fa fa-play" aria-hidden="true"></i></a>
      </div><br>
      <br>

      <!-- <h3>A SPECIAL THANK YOU TO:</h3>
      The Turner Hall Staff, Saz's Catering, Canopies Rentals, Keehn's Valet Service, the Rhythm Kings, the Dan Dance Trio and Jon Edquist for their Creativity, Excellent Service and GOOD TIMES!<br> -->

      <!-- <i class="fa fa-long-arrow-down" aria-hidden="true"></i> -->
    </div>

    <div class="right">
      <!-- <h3>THE CHARLES E. KUBLY FOUNDATION WOULD LIKE TO THANK EVERYONE WHO SPONSORED, ATTENDED, VOLUNTEERED OR MADE A DONATION TO BEYOND THE BLUES 2016.</h3>

      It was a great success again this year and your support will allow us to continue to fund important mental health projects within SE Wisconsin. -->

      <h4>MUSIC BY THE DAN DANCE TRIO AND THE KRIS CROW BAND</h4>
      <br>

      <h4>FARE BY BARTOLOTTA CATERING</h4>
      <br>

      Cash Bar<br>
      Complimentary Valet Parking<br>
      Blue Jean Casual
    </div>
  </div>
</div>

<!--
<div class="btb-gallery">
  <div class="site-width">
    <?php
    $main_dir = "images/galleries/btb2016";

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
    <h1>INTERESTED IN BEING A SPONSOR OF 2017 BEYOND THE BLUES?<br><a href="pdf/Sponsor_Reply_Sheet_2017.pdf">LEARN MORE</a></h1>

    <h2>2017 SPONSORS TO DATE</h1>

    <div class="one-third">
      <h3>Sapphire Level - $20,000</h3>
      <ul>
        <li>Meg Fetherston Kasch &amp; Libby Kasch</li>
        <li>Billie &amp; Mike Kubly</li>
      </ul>

      <h3>Aqua Level - $10,000</h3>
      <ul>
        <li>Colony Brands, Inc.</li>
        <li>Michael &amp; Jeanne Schmitz</li>
      </ul>

      <h3>Teal Level - $5,000</h3>
      <ul>
        <li>William &amp; Sandy Heitz Family Foundation</li>
        <li>Sandy &amp; Dennis Kuester</li>
        <li>Windhover Foundation</li>
      </ul>

      <h3>Turquoise Level - $2,500</h3>
      <ul>
        <li>Children's Hospital of Wisconsin</li>
        <li>College of Health Sciences at Marquette University</li>
        <li>Crescent Grove Advisors</li>
        <li>Daniel &amp; Laura Gruber Charitable Lead Trust 2</li>
        <li>Executive Benefits Network</li>
        <li>Hauske Family Foundation</li>
        <li>Diane &amp; Robert Jenkins</li>
        <li>Sally &amp; Chip Kubly</li>
        <li>Anne &amp; Fred Luber Foundation</li>
        <li>Medical College of Wisconsin &mdash; Department of Psychiatry &amp; Behavioral Medicine</li>
        <li>Milwaukee Admirals</li>
        <li>Chip Uihlein</li>
        <li>Angela &amp; Ross Williams</li>
      </ul>
    </div>

    <div class="one-third">
      <h3>Navy Level - $1,000</h3>
      <ul>
        <li>The Bourne Family</li>
        <li>Continental Properties Company, Inc.</li>
        <li>Godfrey &amp; Khan, S.C.</li>
        <li>Jean &amp; Charlie Gorham</li>
        <li>Cookie &amp; Tom Goris</li>
        <li>Julie &amp; Andy Gusho</li>
        <li>Dr. &amp; Mrs. Leander Jennings</li>
        <li>Evelyn Kelly</li>
        <li>Mary Ann &amp; Charles P. LaBahn</li>
        <li>Elizabeth &amp; Tom Long</li>
        <li>Candy &amp; Bruce Pindyck</li>
        <li>Peggy &amp; Ned Purtell</li>
        <li>R&amp;R Insurance Services, Inc.</li>
        <li>Julianne &amp; Stephen Spadafora</li>
        <li>Joy &amp; Cy Tector</li>
        <li>Kathleen &amp; Frank Thometz</li>
        <li>Chris &amp; Mary Tornehl</li>
        <li>Debbie &amp; Camp VanDyke</li>
        <li>Wolf Paving</li>
      </ul>
    </div>

    <div class="one-third">
      <h3>Denim Level - $500</h3>
      <ul>
        <li>Ace Worldwide Elite Relocation Services/Steiner Group</li>
        <li>Aversa &mdash; Bayshore Town Center</li>
        <li>Ginny &amp; Mike Bolger</li>
        <li>Patty &amp; Mike Grebe</li>
        <li>Ann Homstad</li>
        <li>Laura &amp; Pat Koppa</li>
        <li>Kris &amp; Robert Rick</li>
        <li>Jen &amp; Todd Schoon</li>
        <li>Kitty Tierney</li>
        <li>Bonnie &amp; Ned Timarac</li>
      </ul>

      <div class="btb-sponsorship">
        INTERESTED IN SPONSORSHIP?<br>
        <a href="pdf/Sponsor_Reply_Sheet_2017.pdf">LEARN MORE</a>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>